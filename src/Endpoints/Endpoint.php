<?php

namespace Xuplau\HSAPI\Endpoints;

use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;

class Endpoint
{

    protected $http;

    public function __construct( Client $http )
    {
        $this->http = $http;
    }

    protected function handleResponse( Response $response )
    {
        switch ( $response->getStatusCode() ) {
            case 404:
                // fix: make this better
                return 'fix';
        }
    }

}