<?php

namespace easybill\SDK\Collection;

class Payments extends Collection
{
    /** @var boolean */
    public $payed;
    /** @var float */
    public $toPay;

    /**
     * @return string
     */
    public function getCollectionProperty()
    {
        return 'Payment';
    }
}