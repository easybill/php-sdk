<?php

namespace easybill\SDK\Collection;

use Doctrine\Common\Collections\AbstractLazyCollection;
use Doctrine\Common\Collections\ArrayCollection;

class Payments extends AbstractLazyCollection
{
    /** @var boolean */
    public $payed;
    /** @var float */
    public $toPay;

    /**
     * Do the initialization logic
     *
     * @return void
     */
    protected function doInitialize()
    {
        $customers = array();
        if (property_exists($this, 'Payment')) {
            if (is_array($this->Payment)) {
                $customers = $this->Payment;
            } else {
                $customers[] = $this->Payment;
            }
        }

        $this->collection = new ArrayCollection($customers);
    }
}