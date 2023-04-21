// funcion para la baraja que creamos
const contBaraja = document.getElementById('cont-baraja');
// Iconos de las cartas
let iconoDuda = `<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpnNpqBKiuXKwoadqpErhb029NkX1Z3jmH0Q&usqp=CAU">`;
let iconoDiamantes = `<i class="bi bi-suit-diamond"></i>`;
let iconoPicas = `<i class="bi bi-suit-diamond"></i>`;
let iconoCorazones = `<i class="bi bi-suit-heart"></i></i>`;
let iconoTreboles = `<i class="bi bi-suit-club-fill"></i>`;

// function crearBaraja(){
//     let baraja = new Array();
//     let palos = {
//         "D": "Diamantes",
//         "P": "Picas",
//         "C": "Corazones",
//         "T": "Treboles"        
//     }
//     let rangos = new Array("A", 2, 3, 4, 5, 6, 7, 8, 9, 0, "J", "Q", "K");

//      Object.keys(palos).forEach(function (value) {
//         for (let i = 0; i < rangos.length; i++) {
//             baraja.push(rangos[i] + value);
            
//         }
//     })
//     console.log(baraja);

//     for (let i = 0; i < baraja.length; i++) {
//         let valor = baraja[i].charAt(0);
//         if(valor == 0) valor = 10;
//         let palo = baraja[i].charAt(1);
//         let print = '';
//         let color = '';
//         switch (palo){
//             case 'D':
//                 print = iconoDiamantes;
//                 color = 'carta-roja';
//                 break
//             case 'P':
//                  print = iconoPicas;
//                  color = 'carta-negra';
//                  break
//              case 'C':
//                 print = iconoCorazones;
//                 color = 'carta-roja';
//                 break
//             case 'T':
//                 print = iconoTreboles;
//                 color = 'carta-negra';
//                 break
//           default:
//             break;
//         }
//         contBaraja.innerHTML +=
//         "<div id='" + baraja[i] + "' class='carta baraja'>"
//         + "<div class='carta-contenedor'>"
//         + "<div class='frontal " + color + "'>"
//         + "<div class='num top'>" + valor + "</div>"
//         + "<div class='palo'>" + print + "</div>"
//         + "<div class='num bot'>" + valor + "</div>"
//         + "</div>"

//         + "<div class='duda trasera'>" + iconoDuda + "</div>"
//             + "</div>"
//             + "</div>";

//         let cartaTop = document.querySelectorAll('.baraja');
//         cartaTop[cartaTop.length - 1].style.zIndex = i;
//         // cartaTop[cartaTop.length - 1].style.boxShadow = "0 0 2px 1px #eff";
//         // cartaTop[cartaTop.length - 1].style.position = "absolute";
//         // cartaTop[cartaTop.length - 1].style.left = i/3+"px";
//         // cartaTop[cartaTop.length - 1].style.top = i+"px";
//     }
// }
// crearBaraja();
// let baraja = document.querySelectorAll('.baraja');
// let caraCartas = document.querySelectorAll('.baraja .carta-contenedor');
// let barajaTrasera = document.querySelectorAll('.trasera');
// let num = document.querySelectorAll('.baraja .num');
// let palos = document.querySelectorAll('.baraja .palo');

// function voltearBaraja() {

//     if (caraCartas[0].classList.contains('voltear')) {
//         for (let i = 0; i < caraCartas.length; i++) {
//             caraCartas[i].classList.remove('voltear');
//         }
//     } else {
//         for (let i = 0; i < caraCartas.length; i++) {
//             caraCartas[i].classList.add('voltear');
//         }
//     }
// }

// function juntar() {
//     for (let i = 0; i < baraja.length; i++) {
//         baraja[i].style.marginLeft = '-59.85px';

//     }

    // contenedorBaraja.style.flexWrap = 'nowrap';

// }
// function separar() {
//     for (let i = 0; i < baraja.length; i++) {
//         baraja[i].style.marginLeft = '0';

//     }

//     // contenedorBaraja.style.flexWrap = 'wrap';
// }
// function mezclar() {
//     let listado = [];
//     for (let i = 0; i < baraja.length; i++) {
//         listado[i] = i;
//     }
//     let currentIndex = listado.length,  randomIndex;

//     // While there remain elements to shuffle.
//     while (currentIndex != 0) {

//       // Pick a remaining element.
//       randomIndex = Math.floor(Math.random() * currentIndex);
//       currentIndex--;

//       // And swap it with the current element.
//       [listado[currentIndex], listado[randomIndex]] = [
//         listado[randomIndex], listado[currentIndex]];
//     }

//     for (let i = 0; i < baraja.length; i++) {
//         baraja[i].style.order = listado[i];
//         baraja[i].style.zIndex = listado[i];

//     }
//   }


// Juego de la casa
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
const apuestas = document.querySelector('.apuestas');

let jugadorPlantado = false;

let fin = false;
let timer = 0;

let temporizador = 0;

// function apostar(){
//     switch (key) {
//         case value:
            
//             break;
    
//         default:
//             break;
//     }
// }

// for (i = 0; i < 100; i++) {
// 	carta.splice(Math.random() * 52, 0, carta[0]);
// 	carta.shift();
// }

// El juego empieza con dos cartas para la casa y dos cartas para el jugador
function empezar() {
    // Se resetean las cartas
    jugadaCasa = [];
    jugadaJugador = [];
    console.log(jugadaCasa)
    console.log(jugadaJugador)
    // fin = false;
    activarBotones();

    //Recogemos las dos cartas iniciales de la casa:
    darCarta("casa");
   


    //Recogemos las dos cartas iniciales del jugador:
    darCarta();
    darCarta();

    // Recogemos la dos cartas iniciales de la casa:
    darCarta("casa");
   

    // Cada segundo los tiempos de la animación del parpadeo se randomizan
    // let tempParp = setInterval(parpadeo, 1000);

}

function activarBotones() {
    btnPedir.style['pointer-events'] = 'auto';
    btnPedir.style['opacity'] = 1;
    btnPlantarse.style['pointer-events'] = 'auto';
    btnPlantarse.style['opacity'] = 1;
}
function desactivarBotones() {
    btnPedir.style['pointer-events'] = 'none';
    btnPedir.style['opacity'] = 0.7;
    btnPlantarse.style['pointer-events'] = 'none';
    btnPlantarse.style['opacity'] = 0.7;
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

         
  

        //  Variables que se imprimen en pantalla
            //  comentamos el join para hacer una funcion la cual me permita mostrar las cartas...
        // manoCasa.innerHTML = jugadaCasa.join();
        // manoJugador.innerHTML = jugadaJugador.join();
        mostrarCartas();
        displayCasa.innerHTML = puntosCasa;
        displayJugador.innerHTML = puntosJugador;
         ganador();
    }

    // let iconoDiamante = `<i class='bi bi-suit-diamond-fill'></i>`;
    // let iconoPica = `<i class="bi bi-suit-spade-fill"></i>`;

                // iconos 
    // let iconoCorazon = `<i class="bi bi-suit-heart-fill"></i>`;
    // let iconoTrebol = `<i class="bi bi-suit-club-fill"></i>`;

    function mostrarCartas() {
    manoCasa.innerHTML = '';
    manoJugador.innerHTML = '';
    for (let i = 0; i < jugadaCasa.length; i++) {
        if(i == 0){
            manoCasa.innerHTML += "<div class='carta duda'>"
        + "<div class='palo'>" + iconoDuda + "</div>"
        + "</div>";
        }else{
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
// fichas de apuestas
function juntar() {
    for (let i = 0; i < apostar.length; i++) {
        apostar[i].style.marginLeft = '-59.85px';

    }

    apuestas.style.flexWrap = 'nowrap';

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
    apuestas.style.display ="flex";
    // resultado.style.display ="flex"
empezar();

}


// este es otro método de la función para los botones
// Event listener
// btnIniciar.addEventListener('click', empezar);
// btnPedir.addEventListener('click', darCarta);
// btnPlantarse.addEventListener('click', plantarse);

function playagain() {
    location.reload(true);
}

// let cartas = document.querySelectorAll('.card');

// for (let i = 0; i < cartas.length; i++) {
//     cartas[i].classList.remove('card');

// }


// function juntar() {
//     for (let i = 0; i < baraja.length; i++) {
//         baraja[i].style.marginLeft = '-59.85px';

//     }

//     // contenedorBaraja.style.flexWrap = 'nowrap';

// }
// function separar() {
//     for (let i = 0; i < baraja.length; i++) {
//         baraja[i].style.marginLeft = '0';

//     }

//     // contenedorBaraja.style.flexWrap = 'wrap';
// }
// function mezclar() {
//     let listado = [];
//     for (let i = 0; i < baraja.length; i++) {
//         listado[i] = i;
//     }
//     let currentIndex = listado.length,  randomIndex;

//     // While there remain elements to shuffle.
//     while (currentIndex != 0) {

//       // Pick a remaining element.
//       randomIndex = Math.floor(Math.random() * currentIndex);
//       currentIndex--;

//       // And swap it with the current element.
//       [listado[currentIndex], listado[randomIndex]] = [
//         listado[randomIndex], listado[currentIndex]];
//     }

//     for (let i = 0; i < baraja.length; i++) {
//         baraja[i].style.order = listado[i];
//         baraja[i].style.zIndex = listado[i];

//     }
//   }