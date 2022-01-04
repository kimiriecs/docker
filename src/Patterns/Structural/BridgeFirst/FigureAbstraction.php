<?php

namespace App\Patterns\Structural\BridgeFirst;

use App\Patterns\Structural\BridgeFirst\FigureColorImplementationInterface;
// use App\Patterns\Structural\BridgeFirst\FigureColorImplementation;

class FigureAbstraction {

    protected $figureColorImplementation;

    public function __construct(FigureColorImplementationInterface $figureColorImplementation) {
    // public function __construct(FigureColorImplementation $figureColorImplementation) {

        $this->figureColorImplementation = $figureColorImplementation;

    }

    public function ColoredFigure() {

        $color = $this->figureColorImplementation->NoColor();

        $figureShape = 'unknown figure';

        $result = 'this is ' . $figureShape . '' . $color;

        return $result;

    }
}