<?php

namespace easybill\SDK\Collection;

use Doctrine\Common\Collections\AbstractLazyCollection;
use Doctrine\Common\Collections\ArrayCollection;

class Outbox extends AbstractLazyCollection
{

    /**
     * Do the initialization logic
     *
     * @return void
     */
    protected function doInitialize()
    {
        $customers = array();
        if (property_exists($this, 'Sent')) {
            if (is_array($this->Sent)) {
                $customers = $this->Sent;
            } else {
                $customers[] = $this->Sent;
            }
        }

        $this->collection = new ArrayCollection($customers);
    }
}