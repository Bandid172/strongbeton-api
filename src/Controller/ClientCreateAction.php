<?php

namespace App\Controller;

use App\Component\ClientFactory;
use App\Component\ClientManager;
use App\Component\UserPostTelegramBot;
use App\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClientCreateAction extends AbstractController
{
    public function __construct(private ClientFactory $clientFactory, private ClientManager $clientManager, private UserPostTelegramBot $userPostTelegramBot)
    {
    }

    public function __invoke(Client $data): Client
    {
        $client = $this->clientFactory->create($data->getName(), $data->getPhoneNumber());
        $this->clientManager->save($client, true);
        $this->userPostTelegramBot->sendData($data->getName(), $data->getPhoneNumber());

        return $client;
    }
}