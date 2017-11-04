# symfony-3-test-tasks
Symfony-3 Test Tasks

## Setup

Clone repository
```console
$ git clone https://github.com/denbat/symfony-3-test-tasks.git
$ cd symfony-3-test-tasks
```

Download dependencies
```console
$ composer update
```

Create database
```console
$ php bin/console doctrine:schema:update --force
```

Load fixtures
```console
$ php bin/console doctrine:fixtures:load
```