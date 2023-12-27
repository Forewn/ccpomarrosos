let inputCedula = document.getElementById("cedula");
	var spanError = document.getElementById("error");
	inputCedula.addEventListener("input", function()
	{
		let regexCedula = /^[0-9]{7,8}$/;
		// Obtener el valor del input
		let valor = inputCedula.value;
		var valido = regexCedula.test(valor);
		// Verificar si el valor cumple con la expresión regular
		if (!valido) 
		{
			spanError.textContent = "Cedula invalida. Por favor, Ingrese una cédula que no contenga letras y entre 7 a 8 digitos";
		} else {
			spanError.textContent = "";
		}
	});