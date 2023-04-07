<?php

namespace Daniti\OAuth2\Client\Provider\Exception;

use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use Psr\Http\Message\ResponseInterface;

class PipedriveIdentityProviderException extends IdentityProviderException
{
    public static function fromResponse(ResponseInterface $response, $message = null)
    {
        return new static($message, $response->getStatusCode(), (string)$response->getBody());
    }
}