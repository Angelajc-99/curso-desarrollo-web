const Body = document.querySelector('body');
const BotonDark = document.querySelector('.btn');

BotonDark.onclick = () => {
    Body.classList.toggle('dark');

    if (Body.classList.contains('dark')) {
        localStorage.setItem('ModoDarkAgregado', 'true');
    } else {
        localStorage.setItem('ModoDarkAgregado', 'false');
    }
}

if (localStorage.getItem('ModoDarkAgregado') === 'true') {
    Body.classList.add('dark');
} else {
    Body.classList.remove('dark');
}


let querty = document.querySelector('.qwerty');
let search = document.querySelector('.buscar');

// Para el Boton
search.onclick = () => {
    let url = 'https://www.google.com/search?q=' + querty.value;
    window.open(url, '_self');
}

// Para enter
querty.addEventListener('keypress', (e) => {
    if (e.key === "Enter") {
        let url = 'https://www.google.com/search?q=' + querty.value;
        window.open(url, '_self');
    }
})