# good-new-shareapp

docker compose exec -it db /bin/bash
mysql -u root -p < docker-entrypoint-initdb.d/init.sql
