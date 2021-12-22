easybill PHP SDK
================

[![Latest Stable Version](https://poser.pugx.org/easybill/php-sdk/v/stable.png)](https://packagist.org/packages/easybill/php-sdk) [![Total Downloads](https://poser.pugx.org/easybill/php-sdk/downloads.png)](https://packagist.org/packages/easybill/php-sdk) [![Latest Unstable Version](https://poser.pugx.org/easybill/php-sdk/v/unstable.png)](https://packagist.org/packages/easybill/php-sdk) [![License](https://poser.pugx.org/easybill/php-sdk/license.png)](https://packagist.org/packages/easybill/php-sdk) [![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/easybill/php-sdk)

## Installation
The recommended way of installing this library is using [Composer](http://getcomposer.org/). 

Add this repository to your composer information using the following command

```bash
composer require easybill/php-sdk
```

## Usage

```php
use Easybill\SDK\Client;
use Easybill\SDK\Endpoint;
use Easybill\SDK\Models\Customer;

$client = new Client(new Endpoint('... your API key ...'));

$customerCreate = new Customer();
$customerCreate->setFirstName('Foo');
$customerCreate->setLastName('Bar');
$customerCreate->setCompanyName('FooBar GmbH');
$customerCreate->setEmails(['foo.bar@foobar.com']);

$result = $client->request('POST', 'customers', $customerCreate->toArray());

$customer = new Customer($result);

var_dump($customer)
```

## More examples

Check the [examples](examples) folder and run:

```shell
API_KEY=<your_api_key> php examples/customers_01_load-list.php
```

## Documentation

Please see https://www.easybill.de/api for up-to-date documentation.

## Contributing

Please feel free to send bug reports and pull requests.

## License

Published as open source under the terms of [MIT License](http://opensource.org/licenses/MIT).
