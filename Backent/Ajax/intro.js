$(document).ready(function () {
    $('.search-box input[type="text"]').on("keyup input", function () {
        // Cada vez que el value del imput cambie lo recogeremos
        let text = $(this).val();

        // Guardamos el div donde mostraremos los resultados en una variable
        // se pone un punto antes de la clase
        let resultList = $(this).siblings(".display"); //Buscamos a los hermanos del input (this) con clase . display

        // longitud del texto
        if (text.length > 0) {
            // Si el valor del input no está vacío, llamamos al php
            $.get("search.php", {term: text}).done(function (data) {
                resultList.html(data);
            });
        } else {
            // Se vacía la lista
            resultList.empty();
        }
    })
});