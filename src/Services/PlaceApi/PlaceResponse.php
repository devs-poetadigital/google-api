<?php

namespace GoogleApi\Services\PlaceApi;

use GoogleApi\Services\IResonseDto;
use Spatie\DataTransferObject\FlexibleDataTransferObject;

class PlaceResponse extends FlexibleDataTransferObject implements IResonseDto
{
    public ?string $error_message;
    public string $status;
    public $result;
}