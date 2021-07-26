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
    public $rating;
    public ?string $url;
    public ?string $adr_address;
    public ?string $formatted_phone_number;
    public ?string $international_phone_number;
    public ?string $website;
    public ?string $vicinity;
    public ?string $formatted_address;
    public $utc_offset;
    public $user_ratings_total;
    public ?array $types;
    public ?PlacePhotoCollection $photos;
    public ?PlaceAddressCollection $address_components;
    public ?PlaceGeometry $geometry;
}