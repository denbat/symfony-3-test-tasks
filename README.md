# symfony-3-test-tasks
Symfony-3 Test Tasks

## Setup

Download dependencies
``` bash
composer update
```

Create database
``` bash
php bin/console doctrine:schema:update --force
```
Load fixtures
``` bash
php bin/console doctrine:fixtures:load
```