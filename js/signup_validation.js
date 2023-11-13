document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
  });

function validarFormulario(evento) {
    evento.preventDefault();
    const nombre = document.getElementById('nombre');
    const apellido = document.getElementById('apellido');
    const tipoId = document.getElementById('tipoID');
    const id = document.getElementById('id');
    const correo = document.getElementById('correo');
    const password = document.getElementById('password');
    const password2 = document.getElementById('verifyPassword');

    if(nombre.value.length == 0){
        alert('Nombre obligatorio');
        return;
    }
    if(apellido.value.length == 0){
        alert('Apellido obligatorio');
        return;
    }
    if(tipoId.value == "Seleccione una opcion"){
        alert('Seleccione un tipo de documento valido');
        return;
    }
    if(id.value.length == 0){
        alert('Ingrese su cedula');
        return;
    }
    if(id.value.length != 8){
        alert('Ingrese una cedula valida');
        return;
    }
    if(correo.value.length == 0){
        alert('Correo obligatorio');
        return;
    }
    if(password.value.length == 0){
        alert('Contrasena obligatorio');
        return;
    }
    if(password.value.length < 8){
        alert('La contrase;a debe contener al menos 8 caracteres');
        return;
    }
    if(password.value != password2.value){
        alert('Las contrasenas deben ser iguales');
        return;
    }
    this.submit()
}