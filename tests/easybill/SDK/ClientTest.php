<?php

namespace easybill\SDK;

include_once 'ClientHelper.php';

class ClientTest extends ClientHelper
{

    public function testGetSoapClient()
    {
        $this->assertInstanceOf('\SoapClient', $this->getClient()->getSoapClient());
    }
}
