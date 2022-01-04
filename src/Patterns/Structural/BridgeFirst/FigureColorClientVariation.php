<?php

namespace App\Patterns\Structural\BridgeFirst;

use App\Patterns\Structural\BridgeFirst\FigureAbstraction;
use App\Patterns\Structural\BridgeFirst\FigureColorImplementation;
use App\Patterns\Structural\BridgeFirst\FigureColorImplementationSimple;
use App\Patterns\Structural\BridgeFirst\FigureColorImplementationUpgrated;
use App\Patterns\Structural\BridgeFirst\SquresExtendedFromAbstraction;
use App\Patterns\Structural\BridgeFirst\CirclesExtendedFromAbstraction;

class FigureColorClientVariation {

    private function ColoredFigureDefault(FigureAbstraction $figureAbstraction) {

        $coloredFigure = $figureAbstraction->ColoredFigure();

        echo $coloredFigure;

    }

    private function ColoredFigureSqures(SquresExtendedFromAbstraction $figureAbstractionSqures) {

        $coloredFigure = $figureAbstractionSqures->RedSqure();

        echo $coloredFigure;

    }

    private function ColoredFigureCircles(CirclesExtendedFromAbstraction $figureAbstractionCircles) {

        $coloredFigure = $figureAbstractionCircles->ColoredFigure();

        echo $coloredFigure;

    }

    public function PrintTheFigureDefault() {

        $figureImlementation = new FigureColorImplementation();

        $coloredFigure = new FigureAbstraction($figureImlementation);

        $this->ColoredFigureDefault($coloredFigure);

    }

    public function PrintTheRedSqure() {

        $figureImlementation = new FigureColorImplementationSimple();
        // $figureImlementationSimple = new FigureColorImplementationSimple();

        $coloredSqure = new SquresExtendedFromAbstraction($figureImlementation);
        // $coloredSqure = new SquresExtendedFromAbstraction($figureImlementationSimple);

        $this->ColoredFigureSqures($coloredSqure);

    }

    public function PrintTheBlueCircle() {

        $figureImlementation = new FigureColorImplementationUpgrated();
        // $figureImlementationUpgrated = new FigureColorImplementationUpgrated();

        $coloredCircle = new CirclesExtendedFromAbstraction($figureImlementation);
        // $coloredCircle = new CirclesExtendedFromAbstraction($figureImlementationUpgrated, $figureImlementation);

        $this->ColoredFigureCircles($coloredCircle);

    }
}