<?php

namespace App\Patterns\Structural\BridgeFirst;

use App\Patterns\Structural\BridgeFirst\FigureColorImplementationInterface;
// use App\Patterns\Structural\BridgeFirst\FigureColorImplementationSimple;


class SquresExtendedFromAbstraction extends FigureAbstraction {

    protected $figureColorImplementation;
    // protected $figureColorImplementationSimple;


    public function __construct(FigureColorImplementationInterface $figureColorImplementation) {
    // public function __construct(FigureColorImplementationSimple $figureColorImplementationSimple) {

        $this->figureColorImplementation = $figureColorImplementation;
        // $this->figureColorImplementationSimple = $figureColorImplementationSimple;

    }

    public function RedSqure() {

        $figure = 'squre';

        $color = $this->figureColorImplementation->RedColor();
        // $color = $this->figureColorImplementationSimple->RedColor();

        $result = $figure . ' ' . 'with' . ' ' . $color . ' ' . 'color';

        return $result;
    }

}