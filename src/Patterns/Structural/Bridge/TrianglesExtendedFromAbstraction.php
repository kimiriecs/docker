<?php

namespace App\Patterns\Structural\Bridge;

use App\Patterns\Structural\Bridge\FigureColorImplementationInterface;


class TrianglesExtendedFromAbstraction extends FigureAbstraction {

    protected $figureColorImplementation;


    public function __construct(FigureColorImplementationInterface $figureColorImplementation) {

        $this->figureColorImplementation = $figureColorImplementation;

    }

    /**
     * Function returnes string : 'triangle with green color' or 'triangle with green!!! color'
     * depending on $figureColorImplementation type
     * 
     * @return string
     */
    public function ColorTheFigure():string {

        $figure = 'triangle';

        $color = $this->figureColorImplementation->GreenColor();

        $result = $figure . ' ' . 'with' . ' ' . $color . ' ' . 'color';

        return $result;
    }

}