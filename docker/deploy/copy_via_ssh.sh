#!/bin/bash

cp ../mariadb/*.sql.gz ./scripts/db_3.sql.gz

gunzip ./scripts/db_3.sql.gz

rsync ./scripts/* <user>@<ip_address>:~/path/to/file