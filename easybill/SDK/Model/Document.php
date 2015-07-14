<?php

namespace easybill\SDK\Model;

class Document extends DocumentDescriber
{
    /** @var boolean */
    public $payed;

    /** @var Customer */
    public $customer;
}