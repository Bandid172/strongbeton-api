<?php

namespace App\Component;

class UserPostTelegramBot
{
    public function sendData(string $clientName, string $clientPhoneNumber)
    {
        $token = "6521564550:AAGAzu5oZa850MmQwYc3LVycyy2D_jhAcq8";
        $chat_id = '965946944';

        $url = "https://api.telegram.org/bot" . $token . "/sendMessage";
        $params = [
            'chat_id' => $chat_id,
            'text' => $clientName . "\n" . $clientPhoneNumber,
        ];

        $url .= '?' . http_build_query($params);

        file_get_contents($url);
    }
}