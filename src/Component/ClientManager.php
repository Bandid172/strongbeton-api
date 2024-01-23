<?php

namespace App\Component;

use App\Entity\Client;
use Doctrine\ORM\EntityManagerInterface;

class ClientManager
{
    public function __construct(private EntityManagerInterface $entityManager)
    {

    }

    public function save(Client $client, bool $isNeedFlush = false)
    {
        $this->entityManager->persist($client);

        if($isNeedFlush) {
            $this->entityManager->flush();
        }
    }
}