<?php

namespace Daniti\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Tool\ArrayAccessorTrait;


class PipedriveResourceOwner implements ResourceOwnerInterface
{
    protected $response;

    public function __construct(array $response = array())
    {
        $this->response = $response;
    }

    public function getId()
    {
        return $this->response['data']['id'] ?: null;
    }

    public function getEmail()
    {
        return $this->response['data']['email'] ?: null;
    }

    public function getName()
    {
        return $this->response['data']['name'] ?: null;
    }

    public function getCompanyId()
    {
        return $this->response['data']['company_id'] ?: null;
    }

    public function toArray()
    {
        return $this->response;
    }
}