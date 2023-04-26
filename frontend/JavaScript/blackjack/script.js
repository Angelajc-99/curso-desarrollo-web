// funcion para la baraja que creamos
const contBaraja = document.getElementById('cont-baraja');
// Iconos e imagen de las cartas
let iconoDuda = `<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-tPBbSLcRO8Sm7CtdMhObCGBTD9_iX4PcbrIGVtZy2uuEW6HKmUQuWcj0tIdjyI4IboE&usqp=CAU">`;
let iconoDiamantes = `<i class="bi bi-suit-diamond"></i>`;
let iconoPicas = `<i class="bi bi-suit-diamond"></i>`;
let iconoCorazones = `<i class="bi bi-suit-heart"></i></i>`;
let iconoTreboles = `<i class="bi bi-suit-club-fill"></i>`;
// Array para el valor de las monedas de apuestas
let coins = [10, 25, 50, 100] ;

 // Variables que nos ayudaran hacer apuestas
//  let total = 100;
//  let totalDisplay = document.getElementById("total");
//  let apuestaDisplay = document.getElementById("mensaje");
//  let apuesta = 0;

// Juego de la casa
let puntosCasa = 0;
let jugadaCasa = [];
let cartasCasa = [2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K", "A"];

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
const btnIniciar = document.getElementById('btn-iniciar');
const btnPedir = document.getElementById('btn-pedir');
const btnPlantarse = document.getElementById('btn-plantarse');
const tabContent = document.getElementById('tab');
// const reset = document.getElementById('reset');
const apuestas = document.querySelector('.apuestas');
const cotent = document.querySelector('.cotent');
const controls = document.querySelector('.controls');
const monedasJugador = [];
const btnApostar = document.getElementById('btn-apostar');

let jugadorPlantado = false;

let fin = false;
let timer = 0;

let temporizador = 0;



// El juego empieza con dos cartas para la casa y dos cartas para el jugador
function empezar() {
    // Se resetean las cartas
    jugadaCasa = [];
    jugadaJugador = [];
    puntosCasa=0;
    puntosJugador=0;

    activarBotones();

    //Recogemos las dos cartas iniciales de la casa:
    darCarta("casa");



    //Recogemos las dos cartas iniciales del jugador:
    darCarta();
    darCarta();

    // Recogemos la dos cartas iniciales de la casa:
    // darCarta("casa");
    cotent.style.display = "flex"
    tabContent.style.display = "flex"
    btnApostar.style.display = "none"
    btnPlantarse.style.display ="flex"
    reset.style.display ="flex"
    btnPedir.style.display ="flex"
    manoCasa.classList.add('cartaOculta');
    manoJugador.classList.add('cartaOculta');

    
// totalDisplay.innerHTML = total;



}
function play() {
    empezar();
}


function activarBotones() {
    btnPedir.style['pointer-events'] = 'auto';
    btnPedir.style['opacity'] = 1;
    btnPlantarse.style['pointer-events'] = 'auto';
    btnPlantarse.style['opacity'] = 1;
    // btnApostar.style['opacity'] = 1;
}
function desactivarBotones() {
    btnPedir.style['pointer-events'] = 'none';
    btnPedir.style['opacity'] = 0.7;
    btnPlantarse.style['pointer-events'] = 'none';
    btnPlantarse.style['opacity'] = 0.7;
}

// Le damos la función a calcularPuntos
function calcularPuntos() {
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

    mostrarCartas();
    displayCasa.innerHTML = puntosCasa;
    displayJugador.innerHTML = puntosJugador;
    // resultadoJuego.innerHTML = "Apuestas";

    ganador();
}



function mostrarCartas() {
    manoCasa.innerHTML = '';
    manoJugador.innerHTML = '';
    for (let i = 0; i < jugadaCasa.length; i++) {
        if (jugadaCasa.length<2) {
            manoCasa.innerHTML += "<div class='carta duda'>"
                + "<div class='palo'>" + iconoDuda + "</div>"
                + "</div>"+
                "<div class='carta'>"
                + "<div class='num top'>" + jugadaCasa[i] + "</div>"
                + "<div class='palo'>" + iconoDiamantes + "</div>"
                + "<div class='num bot'>" + jugadaCasa[i] + "</div>"
                + "</div>";
        } else {
            manoCasa.innerHTML += "<div class='carta'>"
                + "<div class='num top'>" + jugadaCasa[i] + "</div>"
                + "<div class='palo'>" + iconoDiamantes + "</div>"
                + "<div class='num bot'>" + jugadaCasa[i] + "</div>"
                + "</div>";
        }
    }
    for (let i = 0; i < jugadaJugador.length; i++) {
        manoJugador.innerHTML += "<div class='carta'>"
            + "<div class='num top'>" + jugadaJugador[i] + "</div>"
            + "<div class='palo'>" + iconoCorazones + "</div>"
            + "<div class='num bot'>" + jugadaJugador[i] + "</div>"
            + "</div>";
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
    if (jugadaJugador.length >= 2) calcularPuntos("");
}

function plantarse() {
    // let info = document.getElementById("info");
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
    btnIniciar.style.display = "none"
    apuestas.style.display = "flex";
    btnApostar.style.display = "flex";
    
    controls.style.display = "none";
    empezar();



}

function playagain() {
    empezar();
}

function mostrarMonedas() {
    let style_coins = ''
    
    const data = coins.map(coin => {
        switch (coin) {
            case 10:
                style_coins = 'coin_10';
                break;
            case 25:
                style_coins = 'coin_25';
                break;
                case 50:
                style_coins = 'coin_50';
                break;
            case 100:
                style_coins = 'coin_100';
                break;
        
            default:
                break;
        }
       return `
        <div>
            <div class="${style_coins}" onclick="apostar(${coin})">${coin}€</div>
        </div>
        
       `
    })

    apuestas.innerHTML = data.join('')


}

mostrarMonedas()


function apostar(coin) { 
    monedasJugador.push(coin)
    console.log(monedasJugador)
    btnApostar.style.display = "none";
    controls.style.display='flex';
    manoCasa.classList.remove('cartaOculta');
    manoJugador.classList.remove('cartaOculta');

    calcularPuntos("");


  
//     console.log(total);
        
//     if ((total - apuesta < 0)) {
 
//        btnIniciar.disabled = true;
//        let resultado = window.confirm('¡No tienes suficientes fondos!, ¿Quieres volver a iniciar la partida?');
 
//        if (resultado === true) {
//            total = 50;
//        }
//        return true;
//    } else {
//     console.log(total);
//     totalDisplay.innerHTML = total - apuesta;

//     apuestaDisplay.innerHTML = apuesta + " € " + "Apuesta realizada!";
//     btnIniciar.disabled = false;
//     }
}

//  otra manera de las monedas
/* <div>
     <div class="${style_coins}" onclick="apostar(${coin})"><i class="bi bi-coin"></i>${coin}</div>
  </div> */
  
//   primera manera para referirse a las monedas
//   <div>
//             <div class="${style_coins}" onclick="apostar(${coin})">$${coin}</div>
//         </div>
