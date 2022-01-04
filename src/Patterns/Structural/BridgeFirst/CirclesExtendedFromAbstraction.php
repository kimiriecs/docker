<?php

namespace App\Patterns\Structural\BridgeFirst;

use App\Patterns\Structural\BridgeFirst\FigureColorImplementationInterface;
// use App\Patterns\Structural\BridgeFirst\FigureColorImplementation;
// use App\Patterns\Structural\BridgeFirst\FigureColorImplementationUpgrated;

class CirclesExtendedFromAbstraction extends FigureAbstraction {


    protected $figureColorImplementation;
    // protected $figureColorImplementationUpgrated;

    public function __construct( FigureColorImplementationInterface $figureColorImplementation) {
    // public function __construct( FigureColorImplementationUpgrated $figureColorImplementationUpgrated, FigureColorImplementation $figureColorImplementation) {

        parent::__construct($figureColorImplementation);

        $this->figureColorImplementation = $figureColorImplementation;
        // $this->figureColorImplementationUpgrated = $figureColorImplementationUpgrated;

    }

    public function BlueCircle() {

        $color = $this->figureColorImplementation->BlueColor();
        // $color = $this->figureColorImplementationUpgrated->BlueColor();

        $figureShape = 'circle';

        $result = 'this is ' . $color . ' ' . $figureShape;
        
        return $result;

    }

}