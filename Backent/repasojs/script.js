$(document).ready(function () {
    // keyup es para que funcione sin clicar en cualquier parte de la pantalla
    // el change es para clickar con el mouse

    $('input.pass').on('keyup', function() {
        // quiero comparar los valores de los dos imputs

        // recogemos el valor de los inputs
        valor1 = $('input[name="pass"]').val();
        valor2 = $('input[name="confirm"]').val();

        // sólo se ejecutará cuando los imputs tengan la misma longitud
        if (valor1.length == valor2.length) {
            if (valor1 == valor2) {
              // si los valores coinciden:
  
              // activamos el cotón de registro
              $('input[type="submit"]').removeAttr('disabled');
          } else alert('las contraseñas no coinciden'); 
          
    }

    $('input[type="submit"]').attr('disabled');
    jqattr
    })
});