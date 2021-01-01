docker exec -it $1 mysql -u root -proot -D prestashop -h mariadb -e "UPDATE ps_shop_url SET domain='$2', domain_ssl='$2' WHERE id_shop_url=1;"
docker exec -it $1 mysql -u root -proot -D prestashop -h mariadb -e "UPDATE ps_homeslider_slides_lang SET url=REPLACE(url, 'localhost', '$2');"
docker exec -it $1 mysql -u root -proot -D prestashop -h mariadb -e "UPDATE ps_configuration_lang SET value=REPLACE(value, 'localhost', '$2') WHERE id_configuration=434;"

docker-compose up -d
