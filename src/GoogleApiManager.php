<?php

namespace GoogleApi;

class GoogleApiManager{

    private $placeApi;

    public function __construct(IPlaceApi $placeApi)
    {
        $this->placeApi = $placeApi;
    }

    public function placeApi():IPlaceApi{
        return $this->placeApi;
    }
    
}