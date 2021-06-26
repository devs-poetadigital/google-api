<?php

namespace GoogleApi\AuthenType;

interface IAuthenType
{
    /**
     * @param array $decodedJwt with the data provided in the JWT
     *
     */
    public function getHeader() : ?array;

    /**
     * @param array $userInfo representing the user profile and user accessToken
     *
     */
    public function getUrl() : string;

    /**
     * @param array $userInfo representing the user profile and user accessToken
     *
     */
    public function query() : array;

}
