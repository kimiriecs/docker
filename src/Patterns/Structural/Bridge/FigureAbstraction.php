<?php

namespace App\Patterns\Structural\Bridge;

use App\Patterns\Structural\Bridge\FigureColorImplementationInterface;


abstract class FigureAbstraction {

    protected $figureColorImplementation;

    public function __construct(FigureColorImplementationInterface $figureColorImplementation) {

        $this->figureColorImplementation = $figureColorImplementation;

    }

    public function ChangeImplementation (FigureColorImplementationInterface $figureColorImplementation) {

        $this->figureColorImplementation = $figureColorImplementation;

    }

    abstract public function ColorTheFigure():string;
}