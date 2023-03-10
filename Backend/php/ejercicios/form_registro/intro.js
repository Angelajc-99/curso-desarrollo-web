$(document).ready(function () {
    $('.search-box input[type="text"]').on("change", function () {
        // Cada vez que el value del input cambie, lo recogeremos
        let text = $(this).val();

        // Guardamos el div donde mostraremos los resultados en una variable
        // . se pone el punto antes de la clase
        let resultList = $(this).siblings(".display"); //Buscamos a los hermanos del input (this) con clase .display

        // Logintud del texto text.length
        if (text.length > 0) {
            // Si el valor del input no está vacío, llamamos al php
            $.get("busqueda.php", {term: text}).done(function (data) {
                // resultList.html(data);
                $('.search-box input[type="text"]').css("color", data);
                console.log('funciona ' + data);
              });
        } else {
            // Se vacía la lista
            resultList.empty();
        }
      })

      
    /* function colorChange(color) {
        $('.search-box input[type="text"]').css("colorDelBorde", color)
    }*/

});

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
                $('.signup').slideToggle (300); 
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
        
        // $('.container').slideToggle(700);
     });
});