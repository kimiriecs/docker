<?php

namespace App\Patterns\Structural\Bridge;

use App\Patterns\Structural\Bridge\FigureColorImplementationInterface;


class SquresExtendedFromAbstraction extends FigureAbstraction {

    protected $figureColorImplementation;


    public function __construct(FigureColorImplementationInterface $figureColorImplementation) {

        $this->figureColorImplementation = $figureColorImplementation;

    }

    /**
     * Function returnes string : 'squre with red color' or 'squre with red!!! color'
     * depending on $figureColorImplementation type
     * 
     * @return string
     */
    public function ColorTheFigure():string {

        $figure = 'squre';

        $color = $this->figureColorImplementation->RedColor();

        $result = $figure . ' ' . 'with' . ' ' . $color . ' ' . 'color';

        return $result;
    }

}