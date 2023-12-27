//27-12-23: Ed... Validaciones de js para el archivo: agguser_admin.php

document.getElementById('btn-addClient').addEventListener('click', function(event) {
    event.preventDefault(); // Evita que el formulario se envíe automáticamente
    
    // Realiza las validaciones
    var isValid = validateForm();

    // Si todas las validaciones son exitosas, puedes enviar el formulario
    if (isValid) {
        // Aquí puedes agregar la lógica para enviar los datos a la base de datos
        alert('Formulario válido. ¡Datos enviados!');
    }
});

function validateForm() {
    var isValid = true;

    // Validación de la cédula de identidad
    var dniClient = document.getElementById('DNIClient').value;
    if (!/^\d{1,8}$/.test(dniClient)) {
        alert('Cédula de identidad inválida. Debe contener solo números y no puede ser mayor a 8 dígitos.');
        isValid = false;
    }

    // Validación del nombre
    var nameClient = document.getElementById('NameClient').value;
    if (!/^[A-Za-záéíóúÁÉÍÓÚ ]{1,50}$/.test(nameClient)) {
        alert('Nombre inválido. Debe contener solo letras y no puede ser mayor a 50 caracteres.');
        isValid = false;
    }

    // Validación del apellido
    var lastNameClient = document.getElementById('LastNameClient').value;
    if (!/^[A-Za-záéíóúÁÉÍÓÚ ]{1,50}$/.test(lastNameClient)) {
        alert('Apellido inválido. Debe contener solo letras y no puede ser mayor a 50 caracteres.');
        isValid = false;
    }

    // Validación de la fecha de nacimiento
    var birthDateClient = document.getElementById('addressClient1').value;
    if (birthDateClient === '') {
        alert('Fecha de nacimiento inválida. Debe ser seleccionada.');
        isValid = false;
    }

    // Validación del Serial del Carnet de la Patria
    var carnetPatria = document.getElementById('addressClient2').value;
    if (carnetPatria.trim() === '') {
        alert('Serial del Carnet de la Patria no puede estar vacío.');
        isValid = false;
    }

    // Validación del Teléfono
    var phoneClient = document.getElementById('phoneClient').value;
    if (!/^\d{1,12}$/.test(phoneClient)) {
        alert('Teléfono inválido. Debe contener solo números y no puede ser mayor a 12 dígitos.');
        isValid = false;
    }

    // Validación del Email
    var emailClient = document.getElementById('emailClient').value;
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailClient)) {
        alert('Email inválido. Debe tener un formato válido.');
        isValid = false;
    }

    // Validación del Rol Familiar
    var roleFamiliar = document.querySelector('select[name="roleFamiliar"]').value;
    if (roleFamiliar === '') {
        alert('Debe seleccionar el Rol Familiar.');
        isValid = false;
    }

    // Validación de la Ubicación de la Persona
    var locationPerson = document.querySelector('select[name="locationPerson"]').value;
    if (locationPerson === '') {
        alert('Debe seleccionar la Ubicación de la Persona.');
        isValid = false;
    }

    // Validación de la Dirección
    var addressClient = document.getElementById('addressClient1').value;
    if (addressClient.trim() === '') {
        alert('Dirección no puede estar vacía.');
        isValid = false;
    }

    // Validación del Número de Casa
    var houseNumberClient = document.getElementById('addressClient1').value;
    if (houseNumberClient.trim() === '') {
        alert('Número de Casa no puede estar vacío.');
        isValid = false;
    }

    // Validación de la Ideología
    var ideologyClient = document.querySelector('select[name="ideologyClient"]').value;
    if (ideologyClient === '') {
        alert('Debe seleccionar la Ideología.');
        isValid = false;
    }

    // Validación de la Información del Cilindro de Gas
    var gasCylinderInfo = document.querySelectorAll('input[name="gasCylinder"]:checked').length;
    if (gasCylinderInfo === 0) {
        alert('Debe seleccionar al menos un cilindro de gas.');
        isValid = false;
    }

    // Puedes agregar más validaciones según sea necesario
    
    return isValid;
}