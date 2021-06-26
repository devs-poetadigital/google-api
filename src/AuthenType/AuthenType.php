<?php

namespace GoogleApi\AuthenType;

class AuthenType implements IAuthenType 
{
    protected $config;

    public function __construct(
        array $config = null
    ){
        $this->config = $config;
    }

    public function getHeader() : ?array{
        return ['Content-Type'=>'application/json'];
    }

    public function getUrl() : string {
        return "https://maps.googleapis.com/maps/api/";
    }

    public function query() : array{
        return [];
    }

}
