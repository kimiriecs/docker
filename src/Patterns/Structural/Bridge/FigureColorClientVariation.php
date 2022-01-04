<?php

namespace App\Patterns\Structural\Bridge;


use App\Patterns\Structural\Bridge\FigureColorImplementationSimple;
use App\Patterns\Structural\Bridge\FigureColorImplementationUpgrated;
use App\Patterns\Structural\Bridge\SquresExtendedFromAbstraction;
use App\Patterns\Structural\Bridge\CirclesExtendedFromAbstraction;
use App\Patterns\Structural\Bridge\TrianglesExtendedFromAbstraction;

class FigureColorClientVariation {

    private function ColoredFigureSqures(SquresExtendedFromAbstraction $figureAbstractionSqures) {

        $coloredFigure = $figureAbstractionSqures->ColorTheFigure();

        echo $coloredFigure;

    }

    private function ColoredFigureCircles(CirclesExtendedFromAbstraction $figureAbstractionCircles) {

        $coloredFigure = $figureAbstractionCircles->ColorTheFigure();

        echo $coloredFigure;

    }

    private function ColoredFigureTriangles(TrianglesExtendedFromAbstraction $figureAbstractionTriangles) {

        $coloredFigure = $figureAbstractionTriangles->ColorTheFigure();

        echo $coloredFigure;

    }

    public function PrintTheRedSqure() {

        $figureImlementation = new FigureColorImplementationSimple();

        $coloredSqure = new SquresExtendedFromAbstraction($figureImlementation);

        $this->ColoredFigureSqures($coloredSqure);

    }

    public function PrintTheBlueCircle() {

        $figureImlementation = new FigureColorImplementationUpgrated();

        $coloredCircle = new CirclesExtendedFromAbstraction($figureImlementation);

        $this->ColoredFigureCircles($coloredCircle);

    }

    public function PrintTheGreenTriangle() {

        $figureImlementation = new FigureColorImplementationUpgrated();

        $coloredCircle = new TrianglesExtendedFromAbstraction($figureImlementation);

        $this->ColoredFigureTriangles($coloredCircle);

        $coloredCircle->ChangeImplementation(new FigureColorImplementationSimple());

        echo '</br></br>' . '. . . change color implementation . . .' . '</br></br>';

        $this->ColoredFigureTriangles($coloredCircle);

    }
}