<?php

namespace easybill\SDK\Model;

use Doctrine\Common\Collections\AbstractLazyCollection;
use Doctrine\Common\Collections\ArrayCollection;

class CustomerCollection extends AbstractLazyCollection
{

    /**
     * Do the initialization logic
     *
     * @return void
     */
    protected function doInitialize()
    {
        $customers = array();
        if (property_exists($this, 'SearchCustomer')) {
            if (is_array($this->SearchCustomer)) {
                $customers = $this->SearchCustomer;
            } else {
                $customers[] = $this->SearchCustomer;
            }
        }

        $this->collection = new ArrayCollection($customers);
    }
}