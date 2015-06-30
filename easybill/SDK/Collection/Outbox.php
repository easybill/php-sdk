<?php

namespace easybill\SDK\Collection;

class Outbox extends Collection
{
    /**
     * @return string
     */
    public function getCollectionProperty()
    {
        return 'Sent';
    }
}