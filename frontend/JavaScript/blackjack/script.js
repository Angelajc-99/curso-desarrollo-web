
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
        manoCasa.innerHTML = jugadaCasa.join();
        manoJugador.innerHTML = jugadaJugador.join();
        displayCasa.innerHTML = puntosCasa;
        displayJugador.innerHTML = puntosJugador;
         ganador();
    }

    // Le damos la función al ganador, el ganador debe tener 21 puntos no pasarse de 21 puntos.
    function ganador() {
        let fin = false;
        if (puntosJugador > 21) {
            console.log("El jugador se ha pasado de 21. Gana la casa");
            fin = true;
            return;

        } else if (puntosCasa > 21) {
            console.log("La casa se ha pasado de 21. Gana el jugador");
            fin = true;
            return;
        }

        if (puntosJugador > puntosCasa && !fin) {
            console.log ("Va ganando el jugador");
            console.log("");
            jugar("casa");
            return;
        } else if (puntosCasa > puntosJugador && ! fin) {
            console.log("Va ganando la casa");
            console.log("");
            jugar("jugador");
            return;
        } else {
            console.log("Hay empate");
            console.log("");
            jugar("jugador");
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
        } else fin = true;
    
        if (!fin) {
            timer = setTimeout(() => {
                plantarse();
            }, 1500);
        } else {
            clearTimeout(timer);
            timer = 0;
        }
        console.log(fin);
    
    }

empezar();

