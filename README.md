easybill PHP SDK
================

[![Latest Stable Version](https://poser.pugx.org/easybill/php-sdk/v/stable.png)](https://packagist.org/packages/easybill/php-sdk) [![Total Downloads](https://poser.pugx.org/easybill/php-sdk/downloads.png)](https://packagist.org/packages/easybill/php-sdk) [![Latest Unstable Version](https://poser.pugx.org/easybill/php-sdk/v/unstable.png)](https://packagist.org/packages/easybill/php-sdk) [![License](https://poser.pugx.org/easybill/php-sdk/license.png)](https://packagist.org/packages/easybill/php-sdk)

Switch `php-sdk` to [REST API](https://www.easybill.de/api/). SOAP API and Version 1.0.* are **deprecated**!

**Note**: v2 is not compatible with v1!

## Installation
The recommended way of installing this library is using [Composer](http://getcomposer.org/). 

Add this repository to your composer information using the following command

```bash
composer require easybill/php-sdk
```

## Usage

```php
use easybill\SDK\Client;
use easybill\SDK\Endpoint;

$client = new Client(new Endpoint('... your API key ...'));

$result = $client->request('GET', 'documents');

print_r($result);
```

## More examples

Check the **examples** folder.

## Documentation

Please see https://www.easybill.de/api for up-to-date documentation.

## Contributing

Please feel free to send bug reports and pull requests.

## License

Published as open source under the terms of [MIT License](http://opensource.org/licenses/MIT).
