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
          } else {
            alert('las contraseñas no coinciden');  
          }
        }    
    })

    // jqslider
    // jqclick para qu eme de selector
    $('#btnShow').click(function () { 
       $('.container').toggle();        
    });
    $('#btnFade').click(function () { 
        $('.container').fadeToggle();        
     });
     $('#btnSlide').click(function () { 
        $('.container').slideToggle();        
     });

    //  $('.cambiar').click(function () { 
    //     $('.cambiar').slideToggle();        
    //  });

     
    let contador = 0;
    let pos = 'login';
    $('.cambioForm').click(function () { 
        if (contador < 1 || pos == 'login') {
            $('.login').slideToggle(300, function () {
                $('.signup').slideToggle(300);
              });
              contador++;
              pos = 'signup';
        } else {
            $('.signup').slideToggle(300, function () {
                $('.login').slideToggle(300);
              });
              contador--;
              pos = 'login';
        }
        $('div#background').fadeToggle(1000);

        // $('.container').slideToggle(700);
    });

    $('#btnClass').click(function () {
        $('body').toggleClass('cuerpo');
        console.log('funciona');
      });
    $('#btnBG').click(function () {
        $('div#background').fadeToggle(1000);
        console.log('funciona');
      });
});