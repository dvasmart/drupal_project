.PHONY: build up down stop start install cli test list

include .env

default: up

build:
	docker-compose build
up:
	docker-compose up -d --build
down:
	docker-compose down
stop:
	docker-compose stop
start:
	docker-compose start
cli:
	docker-compose exec -w /var/www/web php bash -c "drush list"
	docker-compose exec -w /var/www/web php bash
cache_clear:
	docker-compose exec -T -w=/var/www/web php bash -c "drush cache:clear drush"
composer_install:
	docker-compose exec -T -w /var/www/web php bash -c "composer install --no-interaction "
site_install:
	docker-compose exec -T -w /var/www/web php bash -c "drush site:install --existing-config --db-url=$(MYSQL_DRIVER)://$(MYSQL_USER):$(MYSQL_PASS)@$(MYSQL_HOST):$(MYSQL_PORT)/$(MYSQL_DB_NAME) --account-pass=$(USER_PASS) -y"
test:
	docker-compose exec -T php curl 0.0.0.0:80 -H "Host: $(PROJECT_BASE_URL)" --write-out %{http_code} --silent --output /dev/null
drush_folder:
	docker-compose exec -T php bash -c 'mkdir -p "drush" && echo -e "options:\n  uri: http://$(PROJECT_BASE_URL)" > drush/drush.yml'
create_user:
	docker-compose exec -T -w /var/www/web php bash -c 'drush ucrt "Benjamin Franklin" --mail="b_franklin@mail.com" --password="123"'
content:
	docker-compose exec -T -w=/var/www/web php bash -c "drush en dvasmart_content -y"
	docker-compose exec -T -w=/var/www/web php bash -c "drush pmu dvasmart_content default_content hal -y"



