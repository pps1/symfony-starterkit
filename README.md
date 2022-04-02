# Symfony Starterkit

A template for Symfony 5 applications

## Setup
1. Install [Docker Engine](https://docs.docker.com/engine/install/)
2. ```git clone git@github.com:pps1/symfony-starterkit.git```
3. ```cd symfony-starterkit```
4. ```docker compose up```
5. The application should now be available at http://localhost:8002
6. (optional) Install the [Symfony Binary](https://symfony.com/download)

## Running tests
You can run tests with the following command:
```shell
bin/phpunit
```

## Linting
You can execute the [Psalm](https://psalm.dev/) linter with the following command:
```shell
bin/psalm
```

You can execute the [PHPStan](https://github.com/phpstan/phpstan) linter with the following command:
```shell
bin/phpstan
```

You can fix your code smell using [CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) with the following command:
```shell
bin/csfixer
```

## More reading materials
- https://symfony.com/
- https://symfony.com/doc/5.4/index.html
- https://symfony.com/doc/5.4/controller.html
- https://symfony.com/doc/5.4/doctrine.html
