misieksnk/charmapper
=============

> Converts characters to Latin

Installation
------------

Simply use [Composer](https://getcomposer.org):

```shell
$ composer require misieksnk/charmapper
```

Usage
------------
Convert given string:

```php
use MisiekSnk\CharMapper\CharMapper;

$charMapper = new CharMapper();
echo $charMapper->map('Gżegżółka'); //Gzegzolka
```