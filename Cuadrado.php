<?php
class Cuadrado extends FiguraGeometrica {
    public function __construct($lado1) {
        parent::__construct('Cuadrado', $lado1);
    }

    public function calcularArea() {
        return pow($this->lado1, 2); // Área del cuadrado: lado^2
    }

    public function calcularPerimetro() {
        return 4 * $this->lado1; // Perímetro del cuadrado: 4 * lado
    }

    public function __toString() {
        return "Cuadrado con lado: {$this->lado1}";
    }
}
?>

