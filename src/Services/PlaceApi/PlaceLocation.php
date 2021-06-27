<?php

namespace GoogleApi\Services\PlaceApi;

use Spatie\DataTransferObject\FlexibleDataTransferObject;

class PlaceLocation extends FlexibleDataTransferObject
{
    public float $lat;
    public float $lng;
}