
// Juego de la casa
let puntosCasa = 0;
let jugadaCasa = [];
let cartasCasa = [ 2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K", "A"];

//Juego del jugador
let puntosJugador = 0;
let jugadaJugador = [];
let cartasJugador = [2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K", "A"];

// Identificamos los elementos de HTML, para las variables que vamos a imprimir en pantalla
let manoCasa = document.getElementById('mano-casa');
let manoJugador = document.getElementById('mano-jugador');
let displayCasa = document.getElementById('puntos-casa');
let displayJugador = document.getElementById('puntos-jugador');
let resultado = document.getElementById('resultado');

let fin = false;
let timer = 0;


// El juego empieza con dos cartas para la casa y dos cartas para el jugador
function empezar() {
    // Se resetean las cartas
    jugadaCasa = [];
    jugadaJugador = [];
    fin = false;

    //Recogemos las dos cartas iniciales de la casa:
    jugar("casa");
    jugar("casa");


    //Recogemos las dos cartas iniciales del jugador:
    jugar("jugador");
    jugar("jugador");

}
    // Le damos la función a clacularPuntos
    function calcularPuntos () {
        puntosCasa = 0;
        puntosJugador = 0;
        for (let i = 0; i < jugadaCasa.length; i++) {
            let as = false;
            // Le damos el valor a las letras
            switch (jugadaCasa[i]) {
                case "A":
                    puntosCasa += 11;
                    as = true;                    
                    break;
                case "J":
                case "Q":
                case "K":
                    puntosCasa += 10;
                     break;
            
                default:
                    puntosCasa += jugadaCasa[i];
                    break;
            }
            if (puntosCasa > 21 && as) {
                puntosCasa -= 10; 
             }
         }

         for (let i = 0; i < jugadaJugador.length; i++) {
            let as = false;
            // Le damos el valor a las letras
            switch (jugadaJugador[i]) {
                case "A":
                    puntosJugador += 11;
                    as = true;                    
                    break;
                case "J":
                case "Q":
                case "K":
                    puntosJugador += 10;
                     break;
            
                default:
                    puntosJugador += jugadaJugador[i];
                    break;
            }
            if (puntosJugador > 21 && as) {
                puntosJugador -= 10; 
             }
         }

         
    // Se imprime el estado de la partida por consola
         console.log("Cartas de la casa:" + jugadaCasa.join());
         console.log("Puntuación de la casa:" + puntosCasa);
         console.log("Cartas del jugador:" + jugadaJugador.join());
         console.log("Puntuación del jugador" + puntosJugador);

        //  Variables que se imprimen en pantalla
            //  comentamos el join para hacer una funcion la cual me permita mostrar las cartas...
        // manoCasa.innerHTML = jugadaCasa.join();
        // manoJugador.innerHTML = jugadaJugador.join();
        mostrarCartas();
        displayCasa.innerHTML = puntosCasa;
        displayJugador.innerHTML = puntosJugador;
         ganador();
    }

    let iconoDiamante = `<i class='bi bi-suit-diamond-fill'></i>`;
    let iconoPica = `<i class="bi bi-suit-spade-fill"></i>`;

    function mostrarCartas() {
        manoCasa.innerHTML = '';
        manoJugador.innerHTML = '';
        for (let i = 0; i < jugadaCasa.length; i++) {
                //  creamos los div para poder poner los iconos a las cartas
            // manoCasa.innerHTML += "<div>" + jugadaCasa[i] + "</div>";
            manoCasa.innerHTML += "<div class='carta'>" 
            + "<div class='num top'>" + jugadaCasa[i] + "</div>"
            + "<div class='palo'>" + iconoDiamante + "</div>"
            + "<div class='num bot'>" + jugadaCasa[i] + "</div>"
            + "</div>";            

        }
        for (let i = 0; i < jugadaJugador.length; i++) {
            // manoJugador.innerHTML += "<div>" + jugadaJugador[i] + "</div>";
            manoJugador.innerHTML += "<div class='carta'>"            
            +"<div class='num top'>" + jugadaJugador[i] + "</div>"
            +"<div class='palo'>" + iconoPica + "</div>"
            +"<div class='num bot'>" + jugadaJugador[i] + "</div>"
            +"</div>";
        }
    }

    // Le damos la función al ganador, el ganador debe tener 21 puntos no pasarse de 21 puntos.
    function ganador() {
        let fin = false;
        if (puntosJugador > 21) {
            // esta variable mostrará el mensaje si es que la casa va ganando o no
            console.log("El jugador se ha pasado de 21. Gana la casa");
            resultado.innerHTML = "El jugador se ha pasado de 21. Gana la casa";
            fin = true;
            return;

        } else if (puntosCasa > 21) {
            console.log("La casa se ha pasado de 21. Gana el jugador");
            resultado.innerHTML = "La casa se ha pasado de 21. Gana el jugador";
            fin = true;
            return;
        }

        if (puntosJugador > puntosCasa && !fin) {
            console.log ("Va ganando el jugador");
            console.log("");
            resultado.innerHTML = "Va ganando el jugador"
            // jugar("casa");
            return;
        } else if (puntosCasa > puntosJugador && ! fin) {
            console.log("Va ganando la casa");
            console.log("");
            resultado.innerHTML = "Va ganando la casa"
            // jugar("jugador");
            return;
        } else {
            console.log("Hay empate");
            console.log("");
            resultado.innerHTML = "Hay empate";
            // jugar("jugador");
            return;
            
        }
    }
   function jugar(jugada) {
       switch (jugada) {
           case "casa":
               jugadaCasa.push(cartasCasa[Math.floor(Math.random() * cartasCasa.length)]);            
               break;
           case "jugador":
               jugadaJugador.push(cartasJugador[Math.floor(Math.random() * cartasJugador.length)]);
               break;
       }
    //    Cuentas los puntos del jugador y de la casa
       if(jugadaCasa.length >= 2 && jugadaJugador.length >=2) calcularPuntos();
    }

    function plantarse() {
        if (puntosJugador > puntosCasa) {
            jugar('casa');
        // } else fin = true;
    
        // if (!fin) {
            timer = setTimeout(() => {
                plantarse();
            }, 1500);
        } else {
            clearTimeout(timer);
            timer = 0;
        }
        // console.log(fin);
    
    }

empezar();

