$(document).ready(function () {
    $('.search-box input[type="text"]').on("change", function () {
    // $('.search-box input[type="text"]').on("change", function () {
        // Cada vez que el value del imput cambie lo recogeremos
        let text = $(this).val();

        // Guardamos el div donde mostraremos los resultados en una variable
        // se pone un punto antes de la clase
        let resultList = $(this).siblings(".display"); //Buscamos a los hermanos del input (this) con clase . display

        // longitud del texto
        if (text.length > 0) {
            // Si el valor del input no está vacío, llamamos al php
            $.get("busqueda.php", { term: text }).done(function (data) {
                // resultList.html(data);
                $('.search-box input[type="text"]').css("color", data);
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