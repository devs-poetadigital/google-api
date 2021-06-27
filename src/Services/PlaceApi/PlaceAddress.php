<?php

namespace GoogleApi\Services\PlaceApi;

use Spatie\DataTransferObject\FlexibleDataTransferObject;

class PlaceAddress extends FlexibleDataTransferObject
{
    public ?string $long_name;
    public ?string $short_name;
    public array $types;
}