<?php

class APIRequest
{

    /**
     *
     * @var APIId
     */
    var $apiId;

    /**
     *
     * @var map
     */
    var $addtionalParams = [];

    /**
     *
     * @var base on request parameter object.
     */
    var $requestEntity;

    /**
     *
     * @var map
     */
    var $attachments = [];

    /**
     *
     * @var String
     */
    var $authCodeKey;

    /**
     *
     * @var String
     */
    var $accessToken;

    /**
     *
     * @var AuthorizationToken
     */
    var $authToken;
}
