function validarLado(inputId, error) {
    const input = document.getElementById(inputId);
    const errorSpan = document.getElementById(error);
    const valor = parseFloat(input.value.trim());

    // Limpiar mensaje de error y quitar borde rojo
    errorSpan.textContent = "";
    input.classList.remove("input-error");

    // Validaciones
    if (!input.value.trim()) {
        errorSpan.textContent = "Este campo es obligatorio";
    } else if (isNaN(valor)) {
        errorSpan.textContent = "Ingrese un número válido";
    } else if (valor <= 0) {
        errorSpan.textContent = "Ingrese un número mayor a 0";
    } else if (valor > 100) {
        errorSpan.textContent = "No se puede ingresar un valor mayor a 100";
    }

    if (errorSpan.textContent) {
        input.className = "input-error"; // Asigna directamente la clase input-error
    }
    
}


