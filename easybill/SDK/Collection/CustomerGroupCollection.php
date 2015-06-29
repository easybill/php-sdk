<?php

namespace easybill\SDK\Collection;

use Doctrine\Common\Collections\AbstractLazyCollection;
use Doctrine\Common\Collections\ArrayCollection;

class CustomerGroupCollection extends AbstractLazyCollection
{

    /**
     * Do the initialization logic
     *
     * @return void
     */
    protected function doInitialize()
    {
        $customers = array();
        if (property_exists($this, 'CustomerGroup')) {
            if (is_array($this->CustomerGroup)) {
                $customers = $this->CustomerGroup;
            } else {
                $customers[] = $this->CustomerGroup;
            }
        }

        $this->collection = new ArrayCollection($customers);
    }
}