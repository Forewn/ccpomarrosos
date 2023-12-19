document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
});

function validarFormulario(evento) {
    evento.preventDefault();
    var first_name = document.getElementById('nombre').value;
    if(first_name.length == 0) {
        alert('El nombre es obligatorio');
        return;
    }
    var second_name = document.getElementById('nombre2').value;
    if(second_name.length == 0){
        alert('El apellido es obligatorio');
        return;
    }
    var last_name = document.getElementById('apellido').value;
    if (last_name.length == 0) {
        alert('El usuario es obligatorio');
        return;
    }
    var tipoId = document.getElementById('tipoID');
    if(tipoId.value == 0){
        alert('Seleccione un tipo de identificacion');
        return;
    }
    var id = document.getElementById('id').value;
    if (id.length != 8) {
        alert('Ingrese una cedula real');
        return;
    }
    var correo = document.getElementById('correo').value;
    if(correo.length == 0){
        alert('correo obligatorio');
    }
    var password = document.getElementById('password').value;
    if (password.length < 6) {
      alert('La clave no es válida');
      return;
    }
    var password2 = document.getElementById('password2').value;
    if (password2 != password){
        alert('Las claves deben ser iguales');
        return;
    }
    var agree = document.getElementById('disclaimer');
    if(!agree.checked){
        alert('Para usar el servicio debe aceptar los terminos y condiciones');
        return;
    }
    this.submit();
}