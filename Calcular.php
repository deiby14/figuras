<?php
session_start();
//recuperamos codigo
require_once 'FiguraGeometrica.php';
require_once 'Triangulo.php';
require_once 'Rectangulo.php';
require_once 'Cuadrado.php';
require_once 'Circulo.php';

// Recuperar datos del formulario
$tipoFigura = $_POST['tipoFigura'] ?? '';  
$lado1 = $_POST['lado1'] ?? '';  //  para evitar el "undefined key"
$lado2 = $_POST['lado2'] ?? null;
$lado3 = $_POST['lado3'] ?? null;

// Validar que lado1 este en todas las figuras
if (empty($lado1)) {
    die("El valor del lado1 es obligatorio.");
}


//array para recibir los datos
$_SESSION = array_merge($_SESSION, [
    'tipoFigura' => $tipoFigura,
    'lado1' => $lado1,
    'lado2' => $lado2,
    'lado3' => $lado3
]);


//  instancia de la figura geométrica
$figura = null;
//opciones de lados para cada figura

switch ($tipoFigura) {
    case 'Triángulo':
        $figura = new Triangulo($lado1, $lado2, $lado3);
        break;
    case 'Rectángulo':
        $figura = new Rectangulo($lado1, $lado2);
        break;
    case 'Cuadrado':
        $figura = new Cuadrado($lado1);
        break;
    case 'Círculo':
        $figura = new Circulo($lado1);
        break;
    default:
        die("Figura no válida.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <div class="container">
        <h1>Resultado</h1>
        <p><?php echo htmlspecialchars($figura->__toString()); ?></p>
        <p>Área: <?php echo  intval($figura->calcularArea()) . 'cm²' ; ?></p> <!--  área -->
        <p>Perímetro: <?php echo  intval($figura->calcularPerimetro()) . 'cm'; ?></p> <!--  perímetro -->

        <a href="index.php">Volver</a>
    </div>

</body>
</html>
