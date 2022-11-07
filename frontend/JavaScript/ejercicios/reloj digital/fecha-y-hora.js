let fecha = new Date();
document.getElementById('testDate').innerHTML = fecha;

// Creando objetos fecha
// Con un string:
let fechaString = new Date('February 07, 1999 04:15:00');
let fechaStringShort= new Date('1999-02-07 04:15:00');

document.getElementById('dateString').innerHTML = fechaStringShort;

//Con números:
let fechaNum = new Date(2001, 06, 23);

document.getElementById('dateNumber').innerHTML = fechaNum;

// con milisegundos: 
setInterval(() => {
    document.getElementById('fechaMS').innerHTML = new Date().getTime();
}, 1);
// en vez de interval pones 1 para que vaya a la rapidez de los ms
document.getElementById('fechaMS2').innerHTML = new Date('1965-07-04').getTime();


// Imprimir fechas
// con DateString
document.getElementById('fechaDateString').
innerHTML = new Date().toDateString();

// Métodos GET
// Construir un string para imprimir la fecha como queramos 
// 'Hoy es lunes, 07 de Noviembre del año 2022'

function getFecha() {
    let fecha = new Date();
    let diaSemana = fecha.getDay();         //Me va a dar el día de 0 a 6
    let diaMes = fecha.getDate(); 
    let month = fecha.getMonth();
    let year = fecha.getFullYear();

    let texto = '';

        
    // let month = fecha.getMonth();
    
    console.log(diaSemana)
    //Si hoy martes, nos dará un 2, ya que cuenta desde el domingo


    // if (diaSemana = 0) {
    //     diaSemana = 'Domingo';       
    // }
    // if (diaSemana = 1) {
    //     diaSemana = 'Lunes';       
    // }
    // if (diaSemana = 2) {
    //     diaSemana = 'Martes';       
    // }
    // Esto no es recomendable porque habría que poner un if por cada día de la semana
    // El método ideal para hacer esto es usando un array []
    // Un array es un tipo especial de variable que puede guardar varios tipos de datos y que los clasifica usando un índice
    // Vamos a crear un array con los días de la semana:

    const dias = [
        "domingo",
        "lunes",
        "martes",
        "miércoles",
        "jueves",
        "viernes",
        "sábado",
    ]

    const meses = [
        "enero",
        "febrero",
        "marzo",
        "abril",
        "mayo",
        "junio",
        "julio",
        "agosto",
        "septiembre",
        "octubre",
        "noviembre",
        "diciembre",
    ]

    // Cada elemnto del array, pertenece a una posición del índice
    // Los índices de los array empiezan a contar desde 0

    // Construimos el string: 'Hoy es lunes, 07 de Noviembre del año 2022':
    texto = 'Hoy es ' + dias[diaSemana ] + ", " + diaMes + ' de ' + meses[month] + ' del año ' + year;
    document.getElementById('fechaGet').innerHTML =  texto;
    
}

getFecha();

