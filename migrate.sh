openssl req -newkey rsa:2048 -new -nodes -x509 -days 365 -keyout ./docker/ssl/apache-selfsigned.key -out ./docker/ssl/apache-selfsigned.crt

docker cp docker/ssl/apache-selfsigned.key $1:/etc/ssl/private/apache-selfsigned.key
docker cp docker/ssl/apache-selfsigned.crt $1:/etc/ssl/certs/apache-selfsigned.crt

docker exec -it $1 rm -rf /etc/apache2/sites-available/000-default.conf
docker cp docker/ssl/000-default.conf $1:/etc/apache2/sites-available/000-default.conf

docker exec -it $1 mysql -u root -proot -D prestashop -h mariadb -e "UPDATE ps_shop_url SET domain='$2', domain_ssl='$2' WHERE id_shop_url=1;"
docker exec -it $1 mysql -u root -proot -D prestashop -h mariadb -e "UPDATE ps_homeslider_slides_lang SET url=REPLACE(url, 'localhost', '$2');"
docker exec -it $1 mysql -u root -proot -D prestashop -h mariadb -e "UPDATE ps_configuration_lang SET value=REPLACE(value, 'localhost', '$2') WHERE id_configuration=434;"
docker exec -it $1 a2enmod ssl
docker exec -it $1 service apache2 restart

sudo find ./src/themes/etrendlite/ -type f -exec sed -i "s/localhost/$2/" {} \;

docker-compose up -d
