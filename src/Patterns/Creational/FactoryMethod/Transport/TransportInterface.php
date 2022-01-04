<?php

namespace App\Patterns\Creational\FactoryMethod\Transport;


interface TransportInterface {

    public function deliverBy():void;

    public function deliverDate(string $userDateChoice):void;

    public function deliverDestination(string $userDestinationChoice):void;

}