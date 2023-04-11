
// let picas = [
//     "A" {

//     }
// ];
// let diamantes = [];
// let treboles = [];
// let corazones = [];

// Juego de la casa
let puntosCasa = 0;
let jugadaCasa = [];
let cartasCasa = [ 2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K", "A"];

//Juego del jugador
let puntosJugador = 0;
let jugadaJugador = [];
let cartasJugador = [2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K", "A"];

// Identificamos los elementos de HTML, para las variables que vamos a imprimir en pantalla
const manoCasa = document.getElementById('mano-casa');
const manoJugador = document.getElementById('mano-jugador');
const displayCasa = document.getElementById('puntos-casa');
const displayJugador = document.getElementById('puntos-jugador');
const resultado = document.getElementById('resultado');
const btnIniciar  = document.getElementById('btn-iniciar');
const btnPedir = document.getElementById('btn-pedir');
const btnPlantarse = document.getElementById('btn-plantarse');
const tabContent = document.getElementById('tab');
const reset = document.getElementById('reset');
// .style.visibility = "visible";
// const playAgain = document.getElementById('playagain');

let jugadorPlantado = false;

let fin = false;
let timer = 0;


// for (i = 0; i < 100; i++) {
// 	carta.splice(Math.random() * 52, 0, carta[0]);
// 	carta.shift();
// }

// El juego empieza con dos cartas para la casa y dos cartas para el jugador
function empezar() {
    // Se resetean las cartas
    jugadaCasa = [];
    jugadaJugador = [];
    fin = false;
    activarBotones();

    //Recogemos las dos cartas iniciales de la casa:
    darCarta("casa");
    darCarta("casa");


    //Recogemos las dos cartas iniciales del jugador:
    darCarta();
    darCarta();

}


function activarBotones() {
    btnPedir.style['pointer-events'] = 'auto';
    btnPlantarse.style['pointer-events'] = 'auto';
    // reset.style['pointer-events'] = 'visiblity'
}
function desactivarBotones() {
    btnPedir.style['pointer-events'] = 'none';
    btnPlantarse.style['pointer-events'] = 'none';
}

    // Le damos la función a calcularPuntos
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

                // iconos 
    // let iconoCorazon = `<i class="bi bi-suit-heart-fill"></i>`;
    // let iconoTrebol = `<i class="bi bi-suit-club-fill"></i>`;

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

        // Puntos de la partida la cual se pone cuando se gana la partida (REVISAR)
        // info.innerHTML = "Puntuación del jugador:" + puntosJugador + "<br>Puntuación de la casa: " + puntosCasa;

        // Switch para comentar el estado actual del juego
        switch (true) {
            case puntosJugador > puntosCasa:
                resultado.innerHTML = "Va ganando el jugador"
                break;
            case puntosCasa > puntosJugador:
                resultado.innerHTML = "Va ganando la casa"
                break;
            case puntosCasa === puntosJugador:
                resultado.innerHTML = "Empate"
                break;

            default: 
                console.log("default switch 1");
                break;
        }
        desactivarBotones();
        
        // info.innerHTML = "Puntuación del jugador:" + puntosJugador + "<br>Puntuación de la casa: " + puntosCasa;


        // switch para determinar que ha finalizado la partida
        switch (true) {
            case (puntosCasa === 21 && puntosJugador === 21):
                resultado.innerHTML = "Ambas partes tienen 21, la apuesta se recupera."                
                break;
            case (puntosCasa === 21 && puntosJugador != 21):
                resultado.innerHTML = "La casa tiene Blackjack. El jugador pierde la apuesta!"
                break;
            case (puntosCasa != 21 && puntosJugador === 21):
                resultado.innerHTML = "Has ganado!"
                break;
            case puntosJugador > 21:
                resultado.innerHTML = "Gana la casa."
                break;
            case puntosCasa > 21:
                resultado.innerHTML = "La casa se ha pasado de 21. Gana el jugador."
                break;
        
            default:
                console.log("default switch 2");
                activarBotones();
                break;
        }

        
        // let fin = false;
        // if (puntosJugador > 21) {
        //     // esta variable mostrará el mensaje si es que la casa va ganando o no
        //     console.log("El jugador se ha pasado de 21. Gana la casa");
        //     resultado.innerHTML = "El jugador se ha pasado de 21. Gana la casa";
        //     fin = true;
        //     return;

        // } else if (puntosCasa > 21) {
        //     console.log("La casa se ha pasado de 21. Gana el jugador");
        //     resultado.innerHTML = "La casa se ha pasado de 21. Gana el jugador";
        //     fin = true;
        //     return;
        // }
        // if (puntosJugador > puntosCasa && !fin) {
        //     console.log ("Va ganando el jugador");
        //     console.log("");
        //     resultado.innerHTML = "Va ganando el jugador"
        //     // jugar("casa");
        //     return;
        // } else if (puntosCasa > puntosJugador && ! fin) {
        //     console.log("Va ganando la casa");
        //     console.log("");
        //     resultado.innerHTML = "Va ganando la casa"
        //     // jugar("jugador");
        //     return;
        // } else {
        //     console.log("Hay empate");
        //     console.log("");
        //     resultado.innerHTML = "Hay empate";
        //     // jugar("jugador");
        //     return;
            
        // }
    }
   function darCarta(jugada) {
       switch (jugada) {
           case "casa":
               jugadaCasa.push(cartasCasa[Math.floor(Math.random() * cartasCasa.length)]);            
               break;
           default:
               jugadaJugador.push(cartasJugador[Math.floor(Math.random() * cartasJugador.length)]);
               break;
       }
    //    Cuentas los puntos del jugador y de la casa
       if(jugadaCasa.length >= 2 && jugadaJugador.length >=2) 
       calcularPuntos();
    }

    function plantarse() {
    let info = document.getElementById("info");
        jugadorPlantado = true;
        desactivarBotones();
        if (puntosJugador > puntosCasa) {
            darCarta('casa');
            timer = setTimeout(() => {
                plantarse();
            }, 1000);
        } else {
            clearTimeout(timer);
            timer = 0;
        }

    }


function jugar() {  
    tabContent.style.display ="flex"
    btnIniciar.style.display ="none"
    reset.style.display="flex"
    btnPedir.style.display ="flex"
    btnPlantarse.style.display ="flex"
    // resultado.style.display ="flex"
empezar();

}

// esta es otro método de la función para los botones
// Event listener
// btnIniciar.addEventListener('click', empezar);
// btnPedir.addEventListener('click', darCarta);
// btnPlantarse.addEventListener('click', plantarse);

function playagain() {
    location.reload(true);


}