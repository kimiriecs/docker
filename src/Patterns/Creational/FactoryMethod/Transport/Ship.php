<?php

namespace App\Patterns\Creational\FactoryMethod\Transport;


class Ship implements TransportInterface {

    private $userLevelChoice;

    public function __construct(string $userLevelChoice)
    {
        
        $this->userLevelChoice = $userLevelChoice;

    }

    public function deliverBy(): void
    {
        echo "</br>Delivering by Ship of $this->userLevelChoice level</br></br>";
    }

    public function deliverDate(string $userDateChoice): void
    {
        echo "</br>Delivering was started at $userDateChoice</br></br>";
    }
    
    public function deliverDestination(string $userDestinationChoice): void
    {
        echo "</br>Delivering to $userDestinationChoice</br></br>";
    }

}