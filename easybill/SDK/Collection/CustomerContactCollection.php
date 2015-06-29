<?php

namespace easybill\SDK\Collection;

use Doctrine\Common\Collections\AbstractLazyCollection;
use Doctrine\Common\Collections\ArrayCollection;

class CustomerContactCollection extends AbstractLazyCollection
{

    /**
     * Do the initialization logic
     *
     * @return void
     */
    protected function doInitialize()
    {
        $customers = array();
        if (property_exists($this, 'Contact')) {
            if (is_array($this->Contact)) {
                $customers = $this->Contact;
            } else {
                $customers[] = $this->Contact;
            }
        }

        $this->collection = new ArrayCollection($customers);
    }
}