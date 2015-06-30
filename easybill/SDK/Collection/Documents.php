<?php

namespace easybill\SDK\Collection;

use Doctrine\Common\Collections\AbstractLazyCollection;
use Doctrine\Common\Collections\ArrayCollection;

class Documents extends AbstractLazyCollection
{

    /**
     * Do the initialization logic
     *
     * @return void
     */
    protected function doInitialize()
    {
        $customers = array();
        if (property_exists($this, 'Document')) {
            if (is_array($this->Document)) {
                $customers = $this->Document;
            } else {
                $customers[] = $this->Document;
            }
        }

        $this->collection = new ArrayCollection($customers);
    }
}