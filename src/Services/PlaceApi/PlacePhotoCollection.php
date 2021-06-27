<?php

namespace GoogleApi\Services\PlaceApi;

use Spatie\DataTransferObject\DataTransferObjectCollection;

class PlacePhotoCollection extends DataTransferObjectCollection
{
    public function current(): PlacePhoto
    {
        return parent::current();
    }
}