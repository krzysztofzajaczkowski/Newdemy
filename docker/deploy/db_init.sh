gunzip ./docker/mariadb/*.gz > db_3.sql
ssh -L "port_1":"ip_address_2":"port_2" kubeuser@"ip_address_1"
mysql -h localhost -P "port_1" -u root -e "CREATE DATABASE db_3;" -p
mysql -h localhost -P "port_1" -u root -e "CREATE USER 'user_3' IDENTIFIED BY 'newdemy';" -p
mysql -h localhost -P "port_1" -u root -e "GRANT ALL PRIVILEGES ON db_3.* TO 'user_3';" -p
rsync -z kubeuser@"ip_address_1":db_3.sql
mysql -h localhost -P "port_1" -u user_3 -p db_3 < db_3.sql
