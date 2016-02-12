<?php

namespace Xuplau\HSAPI\Endpoints;

use Xuplau\HSAPI\Filters\Card as Filters;
use Xuplau\HSAPI\Entities\Card as Card;
use JsonMapper;
use ArrayObject;

class CardsEndpoint extends Endpoint
{
    public function get( Filters $filters )
    {

        $mapper = new JsonMapper;

        // Check if filter name is set (this return only one card)
        if ( isset($filters->name) && !empty($filters->name) ) {

            $response = $this->http->request(
                'GET',
                '/cards/'.urlencode($filters->name),
                ['query' => (array) $filters]
            );

            if ( $response->getStatusCode() == 200 ) {
                $json = json_decode($response->getBody());
                if ( !empty($json) && json_last_error() !== JSON_ERROR_NONE) {
                    // fix: make this better
                    return 'fix';
                }
                $collection = $mapper->map(
                    $json[0], new Card
                );
                return $collection;
            }
        }

        $response = $this->http->request(
            'GET',
            '/cards',
            ['query' => (array) $filters]
        );

        if ( $response->getStatusCode() == 200 ) {
            $json = json_decode($response->getBody());
            if ( !empty($json) && json_last_error() !== JSON_ERROR_NONE) {
                // fix: make this better
                return 'fix';
            }

            $sets = [];
            // fix: better way to get Set names
            foreach ($json as $set => $cards) {
                $collection = $mapper->mapArray(
                    $cards, [], 'Xuplau\HSAPI\Entities\Card'
                );
                $sets[$set] = $collection;
            }
            return $sets;
        }

        return $this->handleResponse( $response );
    }
}
