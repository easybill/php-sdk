<?php

namespace easybill\SDK;

abstract class ClientHelper extends \PHPUnit_Framework_TestCase
{

    /**
     * @return \easybill\SDK\Client
     */
    public function getClient()
    {
        $client = new Client('your api key!');
        return $client;
    }

}