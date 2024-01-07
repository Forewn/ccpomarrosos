//Validaciones agregar usuario 05-01-2024

// Obtener el elemento input por su id
var inputNombre = document.getElementById("nombre");

// Obtener el elemento span por su id
var spanError = document.getElementById("error");

// Agregar un evento de input al input
inputNombre.addEventListener("input", function() {
  // Obtener el valor del input
  var valor = inputNombre.value;

  // Crear una expresión regular para validar el nombre
  // Solo se permiten letras y espacios
  var regex = /^[a-zA-Z\s]+$/;

  // Comprobar si el valor cumple con la expresión regular
  var valido = regex.test(valor);

  // Si no es válido, mostrar un mensaje de error en el span
  if (!valido) {
    spanError.textContent = "El nombre no puede contener números ni caracteres especiales";
  } else {
    // Si es válido, borrar el mensaje de error
    spanError.textContent = "";
  }
});
// ---------------------------------------------------Validación de Apellido---------------------------------
var inputapellido = document.getElementById("apellido");

// Obtener el elemento span por su id
var spanError1 = document.getElementById("error1");

// Agregar un evento de input al input
inputapellido.addEventListener("input", function() {
  // Obtener el valor del input
  var valor = inputapellido.value;

  // Crear una expresión regular para validar el nombre
  // Solo se permiten letras y espacios
  var regex = /^[a-zA-Z\s]+$/;

  // Comprobar si el valor cumple con la expresión regular
  var valido = regex.test(valor);

  // Si no es válido, mostrar un mensaje de error en el span
  if (!valido) {
    spanError1.textContent = "El apellido no puede contener números ni caracteres especiales";
  } else {
    // Si es válido, borrar el mensaje de error
    spanError1.textContent = "";
  }
});
// ---------------------------------------------------Validación de Serial---------------------------------
var inputserial = document.getElementById("serial");

// Obtener el elemento span por su id
var spanError2 = document.getElementById("error2");

// Agregar un evento de input al input
inputserial.addEventListener("input", function() 
{
  // Obtener el valor del input
  var valor = inputserial.value;


  // Si no es válido, mostrar un mensaje de error en el span
  if (valor > 9999999999) 
  {
    spanError2.textContent = "El serial es invalido. Por favor, ingrese un serial de 10 digitos";
  } else {
    // Si es válido, borrar el mensaje de error
    spanError2.textContent = "";
  }
});

// ---------------------------------------------------Validación de telefono---------------------------------
let inputTel = document.getElementById("telefono");
var spanError3 = document.getElementById("error3");

// Definir la expresión regular que solo acepta números y el signo +
let regexTel = /^\+?[0-9]+$/;

// Agregar un listener al evento input del input
inputTel.addEventListener("input", function() {
  // Obtener el valor del input
  let valor = inputTel.value;
  var valido = regexTel.test(valor)
  // Verificar si el valor cumple con la expresión regular
  if (!valido || valor.length > 13  || valor.length < 13 ) 
  {    
    spanError3.textContent = "El teléfono es invalido. Por favor, ingrese un número telefónico correcto";
	if (!valido)
  	{
		spanError3.textContent = "El teléfono es invalido. Por favor, ingrese un número telefónico sin letras";
  	}	
  } 
  else 
  {    
    spanError3.textContent = "";
  }
  
});
// Agregar un listener al evento focus del campo
inputTel.addEventListener("focus", function() {
  // Obtener el valor del campo
  let valor = inputTel.value;
  // Verificar si el valor termina con "@gmail.com"
  if (!valor.endsWith("+58")) {
    // Si no termina, agregar el texto "@gmail.com" al final
    inputTel.value = "+58" + valor;
  }
});

// ---------------------------------------------------Validación de Correo---------------------------------
let inputEmail = document.getElementById("correo");
var spanError4 = document.getElementById("error4");
// Agregar un listener al evento focus del campo
inputEmail.addEventListener("focus", function() {
  // Obtener el valor del campo
  let valor = inputEmail.value;
  // Verificar si el valor termina con "@gmail.com"
  if (!valor.endsWith("@gmail.com")) {
    // Si no termina, agregar el texto "@gmail.com" al final
    inputEmail.value = valor + "@gmail.com";
  }
});