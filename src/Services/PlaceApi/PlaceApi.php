<?php

namespace GoogleApi\Services\PlaceApi;

use Exception;
use GoogleApi\AuthenType\ApiKeyAuthen;
use GoogleApi\IPlaceApi;
use GoogleApi\Services\HttpClient;
use GoogleApi\Services\HttpMethod;

class PlaceApi implements IPlaceApi{

    private HttpClient $httpRequest;
    public function __construct(array $config = null)
    {
        if(is_null($config))
        {
            $config = $this->app->make('config')->get('google-api');
        }
        $authenKey = new ApiKeyAuthen($config);
        $this->httpRequest = new HttpClient($authenKey);
    }
    public function getPlaceDetail(string $id): ?PlaceDto
    {
        $response = $this->httpRequest->request(PlaceResponse::class, HttpMethod::Get,'place/details/json',['place_id'=>$id], null);
        if($response->status == 'OK')
        {
            return new PlaceDto($response->result);
        }
        throw new Exception($response->error_message);
    }

}