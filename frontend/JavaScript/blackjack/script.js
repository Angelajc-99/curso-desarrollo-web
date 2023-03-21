// Tenemos el juego de la casa
let puntosCasa = 0;
let jugadaCasa = [];
let cartasCasa = [ 2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K", "A"];

//Juego del jugador
let puntosJugador = 0;
let jugadaJugador = [];
let cartasJugador = [2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K", "A"];

function empezarJuego() {
    //Recogemos las dos cartas iniciales de la casa:
    jugadaCasa.push(cartasCasa[Math.floor(Math.random() * cartasCasa.length)]);
    jugadaCasa.push(cartasCasa[Math.floor(Math.random() * cartasCasa.length)]);



    //Recogemos las dos cartas iniciales del jugador:
    jugadaJugador.push(cartasJugador[Math.floor(Math.random() * cartasJugador.length)]);
    jugadaJugador.push(cartasJugador[Math.floor(Math.random() * cartasJugador.length)]);

    calcularPuntos();
    console.log(jugadaCasa.join());
    console.log("puntuación de la casa: " + puntosCasa); 
    console.log(jugadaJugador.join());
    console.log("puntuación del jugador: " + puntosJugador); 
}
    function calcularPuntos () {
        for (let i = 0; i < jugadaCasa.length; i++) {
            let as = false;
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
         ganador();
    }

    function ganador() {
        if (puntosJugador > puntosCasa) {
            console.log ("Va ganando el jugador");
        } else if (puntosCasa > puntosJugador) {
            console.log("Gana la casa");
        } else console.log("Hay empate");
    }

    function jugar () {
        switch (key) {
            case value:
                
                break;
        
            default:
                break;
        }
    }



empezarJuego();
