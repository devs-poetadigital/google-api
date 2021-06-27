<?php

namespace GoogleApi\Services\PlaceApi;

use Spatie\DataTransferObject\DataTransferObjectCollection;

class PlaceAddressCollection extends DataTransferObjectCollection
{
    public function current(): PlaceAddress
    {
        return parent::current();
    }
}