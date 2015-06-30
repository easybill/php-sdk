<?php

namespace easybill\SDK\Collection;

use Doctrine\Common\Collections\AbstractLazyCollection;
use Doctrine\Common\Collections\ArrayCollection;

abstract class Collection extends AbstractLazyCollection implements CollectionProperty
{

    /**
     * Do the initialization logic
     *
     * @return void
     */
    protected function doInitialize()
    {
        $property = $this->getCollectionProperty();

        $items = array();
        if (property_exists($this, $property)) {
            if (is_array($this->$property)) {
                $items = $this->$property;
            } else {
                $items[] = $this->$property;
            }
        }

        $this->collection = new ArrayCollection($items);
    }
}