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

const btnPlantarse = document.getElementById('btn-plantarse');

const btnPedir = document.getElementById('btn-pedir'); 

const reset = document.getElementById('reset');


let apuestas = document.querySelector('.apuestas');

let jugadorPlantado = false;

let fin = false;
let timer = 0;

function empezar() {
    puntosCasa = 0;
    manoCasa = [];

    puntosJugador = 0;
    manoJugador = [];

    resultJuego.innerHTML = "Apuesta";

    if (manoCasa.length == 0 && manoJugador.length == 0) {
        jugar("casa");
        jugar("casa");

        jugar("jugador");
        jugar("jugador");
    }
}
    btnIniciar.disabled = true;

     //para desabilitar los botones despues de apostar creamos un FOR para recorrer los botones
    //
    for (let i = 0; i < apostar.length; i++) {
        apostar[i].disabled = true;
    }

    // Variables que nos ayudaran hacer apuestas
    let total = 100;
    let totalDisplay = document.getElementById("total");
    let apuestaDisplay = document.getElementById("mensaje");
    let apuesta = 0;

    btnIniciar.disabled = true;

    totalDisplay.innerHTML = total;

    // Creamos una función que nos permitirá hacer apuestas
    function apuestas() {

        apostar = apuestas;
        console.log(total);
        
        if ((total - apuesta < 0)) {
     
           btnIniciar.disabled = true;
           let resultado = window.confirm('¡No tienes suficientes fondos!, ¿Quieres volver a iniciar la partida?');
     
           if (resultado === true) {
               total = 50;
           }
           return true;
       } else {
        console.log(total);
        totalDisplay.innerHTML = total - apuesta;

        apuestaDisplay.innerHTML = apuesta + " € " + "Apuesta realizada!";
        btnIniciar.disabled = false;
        }
    }
    function empezar() {

        switch (jugada) {
            case "casa":
                manoCasa.push(cartasCasa[Math.floor(Math.random() * cartasCasa.length)]);
                break;
            case "jugador":
                manoJugador.push(cartasJugador[Math.floor(Math.random() * cartasJugador.length)]);
                break;
        }

        //este if nos permitira calcular cuando cada jugador tenga 2 cartas 
    if (manoCasa.length >= 2 && manoJugador.length >= 2) calcularPuntos();

    }
    // creamos la funcion de calcular puntos en donde le daremos el valor a las cartas con letra,primero con un for que cuente las cartas
// y despues le agregamos un swich(if) para darles el valor con la condicion
function calcularPuntos() {
    puntosCasa = 0;
    puntosJugador = 0;
    // se realiza el for con cada jugador primero con la casa 
    for (let i = 0; i < manoCasa.length; i++) {
        let as = false;
        switch (manoCasa[i]) {
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
                puntosCasa += manoCasa[i];
                break;
        }
        //si los puntos son menores que 21 al AS se le restaran 10 para que valga 1
        if (manoCasa > 21 && as) {
            puntosCasa -= 10;
        }
    }
    // for despues con el jugador
    for (let i = 0; i < manoJugador.length; i++) {
        let as = false;
        switch (manoJugador[i]) {
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
                puntosJugador += manoJugador[i];
                break;
        }
        if (puntosJugador > 21 && as) {
            puntosJugador -= 10;
        }
    }
    console.log("Cartas de la casa:" + manoCasa.join());
    // document.getElementById("cartascasa").innerHTML = manoCasa.join();
    console.log("Puntuación de la casa: " + puntosCasa);
    marcadorc.innerHTML = puntosCasa;
    console.log("Cartas del jugador:" + manoJugador.join());

    console.log("puntuación del jugador: " + puntosJugador);
    marcadorJ.innerHTML = puntosJugador;
    cartasc.innerHTML = manoCasa.join();
    cartasj.innerHTML = manoJugador.join();
    //cerramos la funcion
    mostrarCartas();
    ganador();
}
let iconoDiamantes = `<i class='bi bi-suit-diamond-fill'></i>`;
let iconoPicas = `<i class="bi bi-suit-spade-fill"></i>`;

function mostrarCartas() {
    cartasCasa.innerHTML = '';
    cartasJugador.innerHTML = '';
    for (let i = 0; i < manoCasa.length; i++) {
        cartasCasa.innerHTML += "<div class='carta'>"
            + "<div class='num top'>" + manoCasa[i] + "</div>"
            + "<div class='palo'>" + iconoDiamantes + "</div>"
            + "<div class='num bot'>" + manoCasa[i] + "</div>"
            + "</div>";
    }

    //ocultamos una de las cartas
    ultimaCarta = document.querySelectorAll('#cartas-casa .carta');

    for (let i = 0; i < manoJugador.length; i++) {
        cartasj.innerHTML += "<div class='carta'>"
            + "<div class='num top'>" + manoJugador[i] + "</div>"
            + "<div class='palo'>" + iconoPicas + "</div>"
            + "<div class='num bot'>" + manoJugador[i] + "</div>"
            + "</div>";
    }

}
function ganador() {
    let fin = false;
    btnplantarse.disabled = false;
    btnjugar.disabled = false;
    // primero se estipula si alguno se a pasado de 21  
    if (puntosJugador > 21) {
        console.log("El jugador se ha pasado de 21. Gana la casa");
        resultJuego.innerHTML = "El jugador se ha pasado de 21. Gana la casa";
        btnjugar.disabled = true;
        btnplantarse.disabled = true;
    }
    function ganador() {
        let fin = false;
        btnplantarse.disabled = false;
        btnjugar.disabled = false;
        // primero se estipula si alguno se a pasado de 21  
        if (puntosJugador > 21) {
            console.log("El jugador se ha pasado de 21. Gana la casa");
            resultadoJuego.innerHTML = "El jugador se ha pasado de 21. Gana la casa";
            btnjugar.disabled = true;
            btnplantarse.disabled = true;
           // Si el jugador pierde, se le resta la apuesta de su saldo
        total = total - apuestaJ;
        totalDisplay.innerHTML = total;
        console.log(total);

        if ((total - apuestaJ <= 0)) {

            //usamos el setTimeout para que me permita ver las carta antes de que me salga la alerta
            setTimeout(() => {
                let resultado = window.confirm('¡Te faltan fondos!, ¿Quieres volver a iniciar?');
                if (resultado === true) {
                    total = 50;
                }
            }, 1000);


        }
        fin = true;
        return;

    } else if (puntosCasa > 21) {
        console.log("La casa se ha pasado de 21. Gana el jugador");
        resultadoJuego.innerHTML = "La casa se ha pasado de 21. Gana el jugador";
        btnjugar.disabled = true;
        btnplantarse.disabled = true;
        //calcula la apuesta
        total = total + apuestaJ;
        totalDisplay.innerHTML = total;
        console.log(total);
        fin = true;
        return;
    }


    if (puntosJugador == 21) {
        if (puntosCasa == 21) {
            btnplantarse.disabled = true;
            resultadoJuego.innerHTML = "Hay empate";
            total = total + apuestaJ;
            apuestaDisplay.innerHTML = total;
            totalDisplay.innerHTML = total;
        } else {
            btnplantarse.disabled = true;
            btnjugar.disabled = true;
            resultadoJuego.innerHTML = "El jugador tiene un 21. Ganas el doble de tu apuesta!";
            total = total + apuestaJ * 2;
            apuestaDisplay.innerHTML = total;
            totalDisplay.innerHTML = total;
        }
        return;
    }
    if (puntosCasa == 21) {
        if (puntosJugador == 21) {
            resultadoJuego.innerHTML = "Hay empate";
            total = total + apuestaJ;
            console.log(total);
            apuestaDisplay.innerHTML = total;
            totalDisplay.innerHTML = total;
        } else {
            btnplantarse.disabled = true;
            btnjugar.disabled = true;
            resultadoJuego.innerHTML = "La casa tiene 21. Pierdes tu apuesta";
            total = total - apuestaJ;
            console.log(total);
            apuestaDisplay.innerHTML = total;
            totalDisplay.innerHTML = total;
        }
        return;
    }
    // si ninguno se a pasado revisamos los puntos y si necesita otra carta
    if (puntosJugador > puntosCasa && !fin) {
        //si los puntos son mayores a los del contrincante pero es diferente de la variable fin(21) 
        //va ganando y juega el contrario       
        console.log("Va ganando el jugador");
        resultadoJuego.innerHTML = "Va ganando el jugador";
        console.log("");
        // jugar("casa");
        return;
    } else if (puntosCasa > puntosJugador && !fin) {
        console.log("Va ganando la casa");
        resultadoJuego.innerHTML = "Va ganando la casa";
        console.log("");
        // jugar("jugador");
        return;
    } else {
        console.log("Hay empate");
        console.log("");
        resultadoJuego.innerHTML = "Hay empate";
        // jugar("jugador");
        if (jugadorPlantado) {
            // total = total + apuestaJ;
            apuestaDisplay.innerHTML = total;
            totalDisplay.innerHTML = total;
            btnplantarse.disabled = true;
            btnjugar.disabled = true;
            console.log(total);
        }
        return;
    }
}
// creamos una funcion que nos permitira jugar,introducimos un switch que nos arrojara una carta adicional de forma aleatoria
// en este caso usamos el numero random del inicio en una funcion
let jugadorPlantado = false;
function plantarse() {
    jugadorPlantado = true;
    btnplantarse.disabled = true;
    btnjugar.disabled = true;
    if (puntosJugador > puntosCasa) {
        jugar("casa");
        timer = setTimeout(() => {
            plantarse();
        }, 1500);
    } else {
        clearTimeout(timer);
        timer = 0;
        ganador();
    }
    console.log(fin);
}
function reset() {
    puntosCasa = 0;
    manocasa = [];
    puntosJugador = 0;
    manojugador = [];
    cartasc.innerHTML = [];
    cartasj.innerHTML = [];
    marcadorc.innerHTML = [];
    marcadorJ.innerHTML = [];
    resultadoJuego.innerHTML = "Introduce tu apuesta";
    apuestaDisplay.innerHTML = "";
    totalDisplay.innerHTML = total;
        }
    }