<?php

namespace App\Patterns\Structural\BridgeFirst;

interface FigureColorImplementationInterface {

    public function NoColor ():string;

    public function RedColor ():string;

    public function GreenColor ():string;

    public function BlueColor ():string;

    public function YellowColor ():string;

}