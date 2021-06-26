<?php

namespace GoogleApi;

use GoogleApi\Services\PlaceApi\PlaceDto;

interface IPlaceApi{

    public function getPlaceDetail(string $id): ?PlaceDto;
    
}