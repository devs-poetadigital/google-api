<?php

namespace GoogleApi\Services;

use GuzzleHttp\Client;
use GoogleApi\AuthenType\IAuthenType;

abstract class HttpMethod
{
    const Get = 'GET';
    const Post = 'POST';
    const Put = 'PUT';
    const Delete = 'DELETE';
    // etc.
}

class HttpClient 
{
    protected $config;
    protected $client;
    public function __construct(
        IAuthenType $config
    ){
        $this->config = $config;
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $config->getUrl(),
            'timeout'  => 2.0,
        ]);
    }

    public function request($class, string $method, string $path, array $query = null, $body = null ) {
        $mergeQuery = $this->config->query();
        if(!is_null($query))
        {
            $mergeQuery = array_merge($mergeQuery, $query);
        }
        $bodyRequest = [
            'query' =>  $mergeQuery,
        ];
        if(!is_null($body))
        {
            $bodyRequest = [
                'form_params' => $body
            ];
        }
        $response = $this->client->request($method,$path,$bodyRequest);
        $body = $response->getBody();
        $response = new $class(json_decode($body,true));
        return $response;
    }

}
