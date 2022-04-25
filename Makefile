.PHONY: build up down stop start install cli test list

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
	docker-compose exec -T php composer install --no-interaction --working-dir=web/
	docker-compose exec -T php bash -c "drush site:install --existing-config --db-url=$(MYSQL_DRIVER)://$(MYSQL_USER):$(MYSQL_PASS)@$(MYSQL_HOST):$(MYSQL_PORT)/$(MYSQL_DB_NAME) --account-pass=$(USER_PASS) -y"
	docker-compose exec -T php bash -c 'mkdir -p "drush" && echo -e "options:\n  uri: http://$(PROJECT_BASE_URL)" > drush/drush.yml'
	docker-compose exec -T php bash -c 'drush ucrt "Benjamin Franklin" --mail="b_franklin@mail.com" --password="123"'
	docker-compose exec -T php bash -c 'drush user-add-role "administrator" "Benjamin Franklin"'
cli:
	docker-compose exec php bash
test:
	docker-compose exec -T php curl 0.0.0.0:80 -H "Host: $(PROJECT_BASE_URL)" --write-out %{http_code} --silent --output /dev/null
list:
	docker-compose exec -T -w=/var/www/web php bash -c "drush list"

q:
	docker-compose exec -T -w=/var/www/web php bash -c "drush config:export --destination=../config/"
w:
	docker-compose exec -T -w=/var/www/web php bash -c "drush cache:clear drush"

# ok
composer_install:
	docker-compose exec -T -w /var/www/web php bash -c "composer install --no-interaction "
# ok
site_install:
	docker-compose exec -T -w /var/www/web php bash -c "drush site:install --existing-config --db-url=$(MYSQL_DRIVER)://$(MYSQL_USER):$(MYSQL_PASS)@$(MYSQL_HOST):$(MYSQL_PORT)/$(MYSQL_DB_NAME) --account-pass=$(USER_PASS) -y"
# ok
t:
	docker-compose exec -T php curl 0.0.0.0:80 -H "Host: $(PROJECT_BASE_URL)" --write-out %{http_code} --silent --output /dev/null
# ok
y:
	docker-compose exec -T php bash -c 'mkdir -p "drush" && echo -e "options:\n  uri: http://$(PROJECT_BASE_URL)" > drush/drush.yml'
# ok
u:
	docker-compose exec -T -w /var/www/web php bash -c 'drush ucrt "Benjamin Franklin" --mail="b_franklin@mail.com" --password="123"'
# ok
i:
	docker-compose exec -T -w /var/www/web php bash -c 'drush user-add-role "administrator" "Benjamin Franklin"'
help:
	docker-compose exec -T -w /var/www/web php bash -c "pwd"




