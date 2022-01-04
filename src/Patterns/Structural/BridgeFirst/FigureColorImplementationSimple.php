<?php

namespace App\Patterns\Structural\BridgeFirst;

class FigureColorImplementationSimple implements FigureColorImplementationInterface {
    
    public function NoColor(): string
    {
        return 'wothout color';
    }

    public function RedColor(): string
    {
        return 'red';
    }

    public function GreenColor(): string
    {
        return 'green';
    }

    public function BlueColor(): string
    {
        return 'blue';
    }

    public function YellowColor(): string
    {
        return 'yellow';
    }

}
