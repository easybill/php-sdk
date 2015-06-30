<?php

namespace easybill\SDK\Collection;

use Doctrine\Common\Collections\AbstractLazyCollection;
use Doctrine\Common\Collections\ArrayCollection;

class CompanyPositionGroups extends AbstractLazyCollection
{

    /**
     * Do the initialization logic
     *
     * @return void
     */
    protected function doInitialize()
    {
        $customers = array();
        if (property_exists($this, 'CompanyPositionGroup')) {
            if (is_array($this->CompanyPositionGroup)) {
                $customers = $this->CompanyPositionGroup;
            } else {
                $customers[] = $this->CompanyPositionGroup;
            }
        }

        $this->collection = new ArrayCollection($customers);
    }
}