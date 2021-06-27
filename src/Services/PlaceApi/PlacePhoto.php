<?php

namespace GoogleApi\Services\PlaceApi;

use Spatie\DataTransferObject\FlexibleDataTransferObject;

class PlacePhoto extends FlexibleDataTransferObject
{
    public int $height;
    public int $width;
    public string $photo_reference;
}