.PHONY: build up down stop start install cli test drush_list

include .env

default: up

build:
	docker-compose build
up:
	docker-compose up -d
down:
	docker-compose down
stop:
	docker-compose stop
start:
	docker-compose start
install: up
	docker-compose exec -T php composer install --no-interaction
	docker-compose exec -T php bash -c "drush si --existing-config --db-url=$(MYSQL_DRIVER)://$(MYSQL_USER):$(MYSQL_PASS)@$(MYSQL_HOST):$(MYSQL_PORT)/$(MYSQL_DB_NAME) --account-pass=$(USER_PASS) -y"
	docker-compose exec -T php bash -c 'mkdir -p "drush" && echo -e "options:\n  uri: http://$(PROJECT_BASE_URL)" > drush/drush.yml'
	docker-compose exec -T php bash -c 'drush ucrt "Benjamin Franklin" --mail="b_franklin@mail.com" --password="456"'
	docker-compose exec -T php bash -c 'drush user-add-role "administrator" "Benjamin Franklin"'
cli:
	docker-compose exec php bash
test:
	docker-compose exec -T php curl 0.0.0.0:80 -H "Host: $(PROJECT_BASE_URL)" --write-out %{http_code} --silent --output /dev/null
drush_list: up
	docker-compose exec -T php bash -c "drush list"