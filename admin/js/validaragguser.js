//18-12-23... Validaciones de js para el archivo: agguser_admin.php

/* Inicio de validación: Formulario de DNI*/

    const dniInput = document.getElementById('DNIClient');
    const dniError = document.querySelector('.mdl-textfield__error');

    dniInput.addEventListener('blur', function() {
    const value = dniInput.value;

    // Limpiar mensaje de error antes de validar
    dniError.style.display = 'none';

    // Validar longitud del DNI
    if (value.length !== 8) {
        dniError.innerText = 'La cedula debe tener 8 dígitos';
        dniError.style.display = 'block';
        return;
    }

    // Validar que sea un número entero
    if (!/^\d+$/.test(value)) {
        dniError.innerText = 'La cedula debe ser un número';
        dniError.style.display = 'block';
        return;
    }

    // Puedes agregar validaciones adicionales aquí, como la verificación
    // del dígito verificador del DNI usando un algoritmo específico.

    // No hay errores, DNI válido
    console.log('cedula valida');
    });
/* Fin de validación: Formulario de DNI*/


/* Inicio de validación: Formulario de Apellido*/
    
/* Fin de validación: Formulario de Apellido*/


