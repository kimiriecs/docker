<?php

namespace App\Patterns\Creational\FactoryMethod\Transport;

use App\Patterns\Creational\FactoryMethod\Transport\Logystic;
use App\Patterns\Creational\FactoryMethod\Transport\TransportInterface;



class RoadLogystic extends Logystic {

    private $userLevelChoice;

    public function __construct(string $userLevelChoice)
    {
        $this->userLevelChoice = $userLevelChoice;

    }

    public function transport(): TransportInterface
    {
        return new Truck($this->userLevelChoice);
    }

    // public function createOrder(string $userDateChoice, string $userDestinationChoice) {

    //     $transport = $this->transport();

    //     $transport->deliverBy();

    //     $transport->deliverDate($userDateChoice);

    //     $transport->deliverDestination($userDestinationChoice);

    // }

}