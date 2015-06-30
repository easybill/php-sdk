<?php

namespace easybill\SDK\Collection;

use Doctrine\Common\Collections\AbstractLazyCollection;
use Doctrine\Common\Collections\ArrayCollection;

class CompanyPositions extends AbstractLazyCollection
{

    /**
     * Do the initialization logic
     *
     * @return void
     */
    protected function doInitialize()
    {
        $customers = array();
        if (property_exists($this, 'SearchPosition')) {
            if (is_array($this->SearchPosition)) {
                $customers = $this->SearchPosition;
            } else {
                $customers[] = $this->SearchPosition;
            }
        }

        $this->collection = new ArrayCollection($customers);
    }
}