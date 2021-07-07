# Medicinae Scraper Worker

## Requisitos

- Docker

## Buildar e Executar Docker

`docker-compose up --build` para buildar e executar containers.

## Entrar no Container e Instalar Projeto

`docker-compose exec -u www-data php-fpm bash` para entrar no container do php como usuário normal.

`composer install` para instalar as dependencias do projeto.

Duplicar o `.env.example` e renomear a duplicata para `.env`


To get started, install Passport via the Composer package manager:

composer require laravel/passport
Passport's service provider registers its own database migration directory, so you should migrate your database after installing the package. The Passport migrations will create the tables your application needs to store OAuth2 clients and access tokens:

php artisan migrate
Next, you should execute the passport:install Artisan command. This command will create the encryption keys needed to generate secure access tokens. In addition, the command will create "personal access" and "password grant" clients which will be used to generate access tokens:

php artisan passport:install
