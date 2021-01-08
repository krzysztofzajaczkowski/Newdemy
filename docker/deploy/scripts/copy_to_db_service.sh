#!/bin/bash

kubectl --namespace="namespace" cp ~/path/to/file/db_3.sql <pod-name>:/tmp/db_3.sql

kubectl --namespace="namespace" cp ~/path/to/file/import_db.sh <pod-name>:/tmp/import_db.sh

kubectl --namespace="namespace" exec --stdin --tty <pod-name> -- chmod +x /tmp/import_db.sh

kubectl --namespace="namespace" exec --stdin --tty <pod-name> -- /tmp/import_db.sh

kubectl --namespace="namespace" exec --stdin --tty <pod-name> -- rm /tmp/db_3.sql

kubectl --namespace="namespace" exec --stdin --tty <pod-name> -- rm /tmp/import_db.sh