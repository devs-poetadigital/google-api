<?php

namespace GoogleApi\Services\PlaceApi;

use Spatie\DataTransferObject\FlexibleDataTransferObject;

class PlaceDto extends FlexibleDataTransferObject
{
    public string $place_id;
    public string $name;
    public string $reference;
    public $opening_hours;
    public ?string $business_status;
    public ?float $rating;
    public ?string $url;
    public ?string $vicinity;
    public ?string $formatted_address;
    public ?array $types;
    public ?PlacePhotoCollection $photos;
    public ?PlaceAddressCollection $address_components;
    public ?PlaceGeometry $geometry;
}