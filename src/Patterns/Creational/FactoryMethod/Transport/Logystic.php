<?php

namespace App\Patterns\Creational\FactoryMethod\Transport;


use App\Patterns\Creational\FactoryMethod\Transport\TranportInterface;


abstract class Logystic {


    /**
     *  Factory Method
     *
     * @return TransportInterface
     */
    abstract function transport():TransportInterface;

    /**
     *  Business logic
     *
     * @param string $userDateChoice
     * @param string $userDestinationChoice
     * @return void
     */
    public function createOrder(string $userDateChoice, string $userDestinationChoice) {

        $transport = $this->transport(); // Create an instance of type TransportInterface()

        $transport->deliverBy();

        $transport->deliverDate($userDateChoice);

        $transport->deliverDestination($userDestinationChoice);

    }

}