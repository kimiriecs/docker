<?php

namespace App\Patterns\Creational\FactoryMethod\Transport;

use App\Patterns\Creational\FactoryMethod\Transport\Logystic;

class Client {

    public function order(Logystic $logystic)
    {
        $userDateChoice = '25-07-2022';

        $userDestinationChoice = 'Kongo';

        $logystic->createOrder($userDateChoice, $userDestinationChoice);
    }

    public function send() {

        $userLevelChoice = 'Hight';

        $this->order(new RoadLogystic($userLevelChoice));

        $userLevelChoice = 'Low';

        $this->order(new SeaLogystic($userLevelChoice));

    }

}