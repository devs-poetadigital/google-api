<?php

namespace GoogleApi\Services\PlaceApi;

use Spatie\DataTransferObject\FlexibleDataTransferObject;

class PlaceGeometry extends FlexibleDataTransferObject
{
    public ?PlaceLocation $location;
}