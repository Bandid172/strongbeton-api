<?php

namespace App\Component;

use App\Entity\Client;

class ClientFactory
{
    public function __construct()
    {
    }

    public function create(string $name, string $phoneNumber): Client
    {
        $client = new Client();

        $client->setName($name);
        $client->setPhoneNumber($phoneNumber);

        return $client;
    }
}