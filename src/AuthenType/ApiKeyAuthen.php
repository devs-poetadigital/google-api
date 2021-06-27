<?php

namespace GoogleApi\AuthenType;

class ApiKeyAuthen extends AuthenType
{
    public function query() : array{
        return ['key'=>$this->config['api_key']];
    }
}
