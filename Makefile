.PHONY: build up down stop start install cli test drush_list

include .env

default: install

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
	docker-compose exec -T php bash -c "drush site:install --existing-config --db-url=$(MYSQL_DRIVER)://$(MYSQL_USER):$(MYSQL_PASS)@$(MYSQL_HOST):$(MYSQL_PORT)/$(MYSQL_DB_NAME) -y"
	docker-compose exec -T php bash -c 'mkdir -p "drush" && echo -e "options:\n  uri: http://$(PROJECT_BASE_URL)" > drush/drush.yml'
cli:
	docker-compose exec php bash
test:
	docker-compose exec -T php curl 0.0.0.0:80 -H "Host: $(PROJECT_BASE_URL)"
drush_list: up
	docker-compose exec php bash -c "drush list"