// cambio de color al body y cambio de icono.
    var iconDark = document.getElementById('dark');

    var iconsLigth = document.getElementById('ligth')

let dark = true

function Mycolor() {
    if (dark == true) {
        document.body.style.background = "linear-gradient( 94.3deg,  rgba(26,33,64,1) 10.9%, rgba(81,84,115,1) 87.1% )";
        iconDark.style.display = 'none';
        iconsLigth.style.display = 'block';
        dark = false;
    } else {
        document.body.style.background = "linear-gradient( 103.3deg,  rgba(252,225,208,1) 30%, rgba(255,173,214,1) 55.7%, rgba(162,186,245,1) 81.8% )";
        dark = true;
        iconDark.style.display = 'block';
        iconsLigth.style.display = 'none';
    }

   

}



