# PHP API Consumer for [Hearthstone](http://us.battle.net/hearthstone/en/)

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Just playing around with guzzle, psr7 and jsonmapper

## API

This API provides up to date Hearthstone data pulled directly from the game.

- [Documentation](https://market.mashape.com/omgvamp/hearthstone)

## Install

Via Composer

``` bash
$ composer require xuplau/hsapi
```

## Usage

``` php
require __DIR__ . '/../vendor/autoload.php';

use Xuplau\HSAPI\HSAPI;
use Xuplau\HSAPI\Filters\Card as Filters;

$hsapi   = new HSAPI;
$filters = new Filters;

// Get All Cards
$tmp = $hsapi->cards()->get($filters);
var_dump($tmp);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email ivanrosolen@gmail.com instead of using the issue tracker.

## Credits

- [Ivan Rosolen][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/xuplau/hsapi.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/xuplau/hsapi/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/xuplau/hsapi.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/xuplau/hsapi.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/xuplau/hsapi.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/xuplau/hsapi
[link-travis]: https://travis-ci.org/xuplau/hsapi
[link-scrutinizer]: https://scrutinizer-ci.com/g/xuplau/hsapi/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/xuplau/hsapi
[link-downloads]: https://packagist.org/packages/xuplau/hsapi
[link-author]: https://github.com/ivanrosolen
[link-contributors]: ../../contributors
