// Juego de la casa 

let puntosCasa = 0; 
let jugadaCasa = []; 
let cartasCasa = [ 2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K", "A"]; 

//Juego del jugador 

let puntosJugador = 0; 
let jugadaJugador = []; 
let cartasJugador = [2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K", "A"]; 

// Identificamos los elementos de HTML, para las variables que vamos a imprimir en pantalla 
const cartasCa = document.getElementById('cartas-casa');
const cartasJu = document.getElementById('cartas-jugador');

const marcadorCa = document.getElementById('puntos');
const marcadorJu = document.getElementById('puntosJu');
const result = document.getElementById('result'); 

const btnInicio = document.getElementById('inicio');
const btnApostar = document.getElementsByClassName('apuesta');
const btnPedir = document.getElementById('btn-pedir');
const btnPlantarse = document.getElementById('detener');
const btnReset = document.getElementById('reset');

let alerta = document.getElementById('alerta');

let fin = false;
let timer = 0;

function empezar() {

    puntosCasa = 0;
    jugadaCasa = [];

    puntosJugador = 0;
    jugadaJugador = [];

    result.innerHTML = "¿Cuál es tu apuesta?";

    if (jugadaCasa.length == 0 && jugadaJugador.length == 0) {
        
        jugar("casa")
        jugar("");

        jugar("jugador")
        jugar("");
    }

    btnInicio.disabled = true;

    for (let i = 0; i < btnApostar.length; i++) {
        btnApostar[i].disabled = true;

    }
}

let total = 100;
let totalDisplay = document.getElementById("total");
let apuestaDisplay = document.getElementById("mensaje");
let apuesta = 0;

btnPlantarse.disabled = true;
btnPedir.disabled = true;
btnInicio.disabled = true;
totalDisplay.innerHTML = total;

function apostar() {
    apuesta = apuesta;
    console.log(total);

    if (total < 0) {
        btnInicio.disabled = true;
        apuestaDisplay.innerHTML = 'No tienes dinero para apostar';

        return true;
    } else {
        console.log(total);
        totalDisplay.innerHTML = total - apuesta;
        apuestaDisplay.innerHTML = apuesta + " € " + "apuesta realizada!";
        btnInicio.disabled = false;
    }
    juntar();
    contenedor.style.opacity = 1;
} 

function jugar(jugada) {
    switch (jugada) {
        case "casa":
            manoCasa.push(mazo[Math.floor(Math.random() * mazo.length)]);
            break;
        case "jugador":
            manoJugador.push(mazo[Math.floor(Math.random() * mazo.length)]);
            break;
    }
    if (jugadaCasa.length >= 2 && jugadaJugador.length >= 2) calcularPuntos();
}

function calcularPuntos() {

    puntosCasa = 0;
    puntosJugador = 0;

    // se realiza el for con cada jugador primero con la casa 
    let as = false;
    let limite = 1;
    if (jugadorPlantado) limite = manoCasa.length;
    for (let i = 0; i < limite; i++) {

        let puntos = manoCasa[i].charAt(0);
        switch (puntos) {
            case "A":
                puntosCasa += 11;
                as = true;
                break;
            case '0':
            case "J":
            case "Q":
            case "K":
                puntosCasa += 10;
                break;

            default:
                puntosCasa += parseInt(puntos);
                break;
        }

    }
    //si los puntos son menores que 21 al AS se le restaran 10 para que valga 1
    if (puntosCasa > 21 && as) {
        puntosCasa -= 10;
    }

    // for despues con el jugador
    let asJ = false;
    for (let i = 0; i < manoJugador.length; i++) {

        let puntos = manoJugador[i].charAt(0);
        console.log(puntos);
        console.log(manoJugador[i].charAt(0));
        switch (puntos) {
            case "A":
                puntosJugador += 11;
                asJ = true;
                break;
            case '0':
                console.log('diez');
            case "J":
            case "Q":
            case "K":
                puntosJugador += 10;
                break;

            default:
                puntosJugador += parseInt(puntos);
                break;
        }

    }
    if (puntosJugador > 21 && asJ) {
        puntosJugador -= 10;
    }

    console.log("cartas de la casa:" + manoCasa.join());
    console.log("puntuación de la casa: " + puntosCasa);

    marcadorCa.innerHTML = puntosCasa;

    console.log("cartas del jugador:" + manoJugador.join());
    console.log("puntuación del jugador: " + puntosJugador);

    marcadorJu.innerHTML = puntosJugador;
    cartasCa.innerHTML = manoCasa.join();
    cartasJu.innerHTML = manoJugador.join();
    //cerramos la funcion
    mostrarCartas();

    ganador();

}

let iconoPicas = `<i class="bi bi-suit-spade-fill"></i>`;
let iconoCorazones = `<i class="bi bi-suit-heart"></i>`;

function mostrarCartas() {

    cartasCa.innerHTML = '';
    cartasJu.innerHTML = '';
    // baraja.innerHTML = '';

    for (let i = 0; i < manoCasa.length; i++) {
        let valor = manoCasa[i].charAt(0);

        if (valor == 0) valor = 10;
        let palo = manoCasa[i].charAt(1);

        let print = '';
        let color = '';
        switch (palo) {
            case 'D':
                print = iconoDiamantes;
                color = 'carta-roja';
                break;
            case 'P':
                print = iconoPicas;
                color = 'carta-negra';
                break;
            default:
                break;
        }

        cartasCa.innerHTML +=

            "<div id='" + manoCasa[i] + "' class='carta baraja'>"
            + "<div class='carta-contenedor'>"
            + "<div class='frontal " + color + "'>"
            + "<div class='num top'>" + valor + "</div>"
            + "<div class='palo'>" + print + "</div>"
            + "<div class='num bot'>" + valor + "</div>"
            + "</div>"

            + "<div class='trasera'>"
            + "<div class='palo'>"
            // + reves 
            + "</div>"
            + "</div>"

            + "</div>"
            + "</div>"
    }

    if (!jugadorPlantado) {
        let ultimaCarta = document.querySelectorAll('#cartas-casa .carta');
        ultimaCarta[ultimaCarta.length - 1].style.backgroundImage =
            "url('https://img.freepik.com/free-vector/neon-suit-poker-casino-brick-wall_47243-538.jpg?size=338&ext=jpg')";
        ultimaCarta[ultimaCarta.length - 1].childNodes[0].style.opacity = '0';
        ultimaCarta[ultimaCarta.length - 1].style.transition = 'all 1s';
    }


    for (let i = 0; i < manoJugador.length; i++) {
        let valor = manoJugador[i].charAt(0);

        if (valor == 0) valor = 10;
        let palo = manoJugador[i].charAt(1);

        let print = '';
        let color = '';
        switch (palo) {
            case 'D':
                print = iconoDiamantes;
                color = 'carta-roja';
                break;
            case 'P':
                print = iconoPicas;
                color = 'carta-negra';
                break;
            default:
                break;
        }

        cartasJu.innerHTML +=

            "<div id='" + manoJugador[i] + "' class='carta baraja'>"
            + "<div class='carta-contenedor'>"
            + "<div class='frontal " + color + "'>"
            + "<div class='num top'>" + valor + "</div>"
            + "<div class='palo'>" + print + "</div>"
            + "<div class='num bot'>" + valor + "</div>"
            + "</div>"

            + "<div class='trasera'>"
            + "<div class='palo'>"
            + "</div>"
            + "</div>"

            + "</div>"
            + "</div>"
    }

    // for (let i = 0; i < manocasa.length; i++) {

}

//al tener los puntos ya determinamos necesitamos saber quien va ganando y si es necesario pedrir otra carta
//para esto creamos la funcion ganador


function ganador() {

    let fin = false;
    btnPlantarse.disabled = false;
    btnjugar.disabled = false;
    btnreset.disabled = false;

    // primero se estipula si alguno se a pasado de 21  
    if (puntosJugador > 21) {
        console.log("El jugador se ha pasado de 21. Gana la casa");
        resultadoJuego.innerHTML = "El jugador se ha pasado de 21. Gana la casa";
        btnjugar.disabled = true;
        btnPlantarse.disabled = true;

        // Si el jugador pierde, se le resta la apuesta de su saldo
        total = total - apuestaJ;
        totalDisplay.innerHTML = total;
        console.log(total);

        if ((total - apuestaJ <= 0)) {

            //usamos el setTimeout para que me permita ver las 
            //carta antes de que me salga la alerta
            setTimeout(() => {

                alerta.style.display = "block";
                total = 50;
                btnreset.disabled = true;

            }, 1000);

        }
        fin = true;
        return;

    } else if (puntosCasa > 21) {
        console.log("La casa se ha pasado de 21. Gana el jugador");
        resultadoJuego.innerHTML = "La casa se ha pasado de 21. Gana el jugador";
        btnjugar.disabled = true;
        btnPlantarse.disabled = true;
        //calcula la apuesta
        total = total + apuestaJ;
        totalDisplay.innerHTML = total;
        console.log(total);
        fin = true;
        return;
    }

    if (puntosJugador == 21) {
        if (puntosCasa == 21) {
            btnPlantarse.disabled = true;
            resultadoJuego.innerHTML = "Hay empate";
            total = total + apuestaJ;
            apuestaDisplay.innerHTML = total;
            totalDisplay.innerHTML = total;
        } else {
            btnPlantarse.disabled = true;
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
            btnPlantarse.disabled = true;
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
        //si los puntos son mayores a los del contrincante pero es 
        //diferente de la variable fin(21) 
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
            btnPlantarse.disabled = true;
            btnjugar.disabled = true;
            console.log(total);
        }
        return;
    }

}