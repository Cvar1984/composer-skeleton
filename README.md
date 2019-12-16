# composer-skeleton
> Contoh library composer

## Contoh installasi library dan depencies

```sh
apt install php7.3
apt install php7.3-curl
composer install
```

## Contoh penjelasan pengguna an library

```php
<?php
require __DIR__ . '/vendor/autoload.php';
use Cvar1984/Hello;
try {
    Hello::setMessage('Hello world');
}
catch(Exception $e) {
    echo $e->getMessage();
}
```
## Todo
* Memperbaiki bug
* Menambah fitur
