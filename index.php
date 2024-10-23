<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Figuras Geométricas</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="validacion.js"></script> 
</head>
<body>

<div class="container">
    <h1>Calculadora de figuras</h1>

    <!-- Formulario para seleccionar figura geométrica -->
    <form action="calcular.php" method="POST">
        <label for="tipoFigura">Seleccione una figura:</label>
        <select name="tipoFigura" id="tipoFigura" required>
            <option value="">--Seleccione--</option>
            <option value="Triángulo">Triángul</option>
            <option value="Rectángulo">Rectángulo</option>
            <option value="Cuadrado">Cuadrado</option>
            <option value="Círculo">Círculo</option>
        </select>

        <!-- Campos que se mostrarán dinámicamente -->
        <div id="inputs" class="input-container"></div>

        <button type="submit">Calcular</button>
    </form>
</div>

<script>
    const tipoFigura = document.getElementById("tipoFigura");
    const inputsDiv = document.getElementById("inputs");

    tipoFigura.addEventListener("change", function() {
        let figura = tipoFigura.value;
        inputsDiv.innerHTML = ''; // Limpiar los inputs

        if (figura === "Triángulo") {
            inputsDiv.innerHTML = `
                <div class="form-group">
                    <label for="lado1">Lado 1:</label>
                    <input type="number" name="lado1" id="lado1" onblur="validarLado('lado1', 'error-lado1')" required>
                    <span id="error-lado1" class="error-message" style="color: red;"></span>
                </div>
                <div class="form-group">
                    <label for="lado2">Lado 2:</label>
                    <input type="number" name="lado2" id="lado2" onblur="validarLado('lado2', 'error-lado2')" required>
                    <span id="error-lado2" class="error-message" style="color: red;"></span>
                </div>
                <div class="form-group">
                    <label for="lado3">Lado 3:</label>
                    <input type="number" name="lado3" id="lado3" onblur="validarLado('lado3', 'error-lado3')" required>
                    <span id="error-lado3" class="error-message" style="color: red;"></span>
                </div>
            `;
        } else if (figura === "Rectángulo") {
            inputsDiv.innerHTML = `
                <div class="form-group">
                    <label for="lado1-rect">Base:</label>
                    <input type="number" name="lado1" id="lado1-rect" onblur="validarLado('lado1-rect', 'error-lado1-rect')" required>
                    <span id="error-lado1-rect" class="error-message" style="color: red;"></span>
                </div>
                <div class="form-group">
                    <label for="lado2-rect">Altura:</label>
                    <input type="number" name="lado2" id="lado2-rect" onblur="validarLado('lado2-rect', 'error-lado2-rect')" required>
                    <span id="error-lado2-rect" class="error-message" style="color: red;"></span>
                </div>
            `;
        } else if (figura === "Cuadrado") {
            inputsDiv.innerHTML = `
                <div class="form-group">
                    <label for="lado1-cua">Lado:</label>
                    <input type="number" name="lado1" id="lado1-cua" onblur="validarLado('lado1-cua', 'error-lado1-cua')" required>
                    <span id="error-lado1-cua" class="error-message" style="color: red;"></span>
                </div>
            `;
        } else if (figura === "Círculo") {
            inputsDiv.innerHTML = `
                <div class="form-group">
                    <label for="lado1-cir">Radio:</label>
                    <input type="number" name="lado1" id="lado1-cir" onblur="validarLado('lado1-cir', 'error-lado1-cir')" required>
                    <span id="error-lado1-cir" class="error-message" style="color: red;"></span>
                </div>
            `;
        } 
    });
</script>

</body>
</html>
