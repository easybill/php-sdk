easybill PHP SDK
================

Switch SDK to [REST API](https://www.easybill.de/api/) **under development!** 

### Usage

```php
use easybill\SDK\Client;
use easybill\SDK\Endpoint;

$client = new Client(new Endpoint('... your API key ...'));

$result = $client->request('GET', 'documents');

print_r($result);
```

Output:

```
Array
(
    [page] => 1
    [pages] => 1
    [limit] => 100
    [total] => 1
    [items] => Array
        (
            [0] => Array
                (
                    ... truncated!
                )
        )        
)
```

### Contributing

Please feel free to send bug reports and pull requests.

### License

Published as open source under the terms of [MIT License](http://opensource.org/licenses/MIT).
