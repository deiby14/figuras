<?php
class Circulo extends FiguraGeometrica {

    public function __construct($radio) {
        parent::__construct('Círculo', $radio);
    }

    public function calcularArea() {
        return pi() * pow($this->lado1, 2); // Área del círculo: π * radio^2
    }

    public function calcularPerimetro() {
        return 2 * pi() * $this->lado1; // Perímetro del círculo (circunferencia): 2 * π * radio
    }

    public function __toString() {
        return "Círculo con radio: {$this->lado1}";
    }
}


?>