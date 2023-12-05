document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
  });

function validarFormulario(evento){
    evento.preventDefault();
    var id = document.getElementById('cedula').value;
    if(id.length == 0) {
        alert('El nombre es obligatorio');
        return;
      }
    var password = document.getElementById('password').value;
    if(password.length == 0){
        alert('No ha ingresado contrasena');
        return;
    } 
    if(password.length >= 16){
        alert('Maximo de caracteres 16');
    }
    this.submit();
}