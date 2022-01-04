<?php

namespace App\Patterns\Structural\Bridge;

use App\Patterns\Structural\Bridge\FigureColorImplementationInterface;


class CirclesExtendedFromAbstraction extends FigureAbstraction {


    protected $figureColorImplementation;

    public function __construct(FigureColorImplementationInterface $figureColorImplementation) {

        parent::__construct($figureColorImplementation);

        $this->figureColorImplementation = $figureColorImplementation;

    }

    /**
     * Function returnes string : 'circle with blue color' or 'circle with blue!!! color'
     * depending on $figureColorImplementation type
     * 
     * @return string
     */
    public function ColorTheFigure():string {

        $color = $this->figureColorImplementation->BlueColor();

        $figureShape = 'circle';

        $result = 'this is ' . $color . ' ' . $figureShape;
        
        return $result;

    }

}