<?php

namespace Xuplau\HSAPI;

use GuzzleHttp\Client;

class HSAPI
{

    private $base_uri  = 'https://omgvamp-hearthstone-v1.p.mashape.com';
    private $api_key   = 'zqTkSVryBQmshZYMro905HipSdw4p18G4K2jsncvAYLLr3p9IK';
    private $jwt       = '';
    private $jwt_renew = '';
    private $locale    = 'ptBR';
    private $http;

    public function __construct()
    {
        $this->http = new Client([
            'base_uri' => $this->base_uri,
            'headers' => [
                //'Authorization' => 'Bearer '.$jwt,
                'X-Mashape-Key' => $this->api_key,
                'User-Agent'    => 'xuplau-hsapi v0.0.1',
                'Accept'        => 'application/json'
            ]
        ]);
    }

    public function cards()
    {
        return $this->cards = new Endpoints\CardsEndpoint($this->http);
    }

}