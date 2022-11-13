const abecedario = [
    "A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","U","V","W","X","Y","Z"
];
let contenedorBotones = document.getElementById('botones');
for (let i = 0; i < abecedario.length; i++) {
    console.log = ('abecedario'[i]);
    contenedorBotones.innerHTML += `<button>${abecedario[i]}</button>`
}