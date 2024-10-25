const hueE = document.getElementById('hueInput');
const mainColorE = document.getElementById('mainColor')
const color1E = document.getElementById('color1')
const color2E = document.getElementById('color2')
const color3E = document.getElementById('color3')
const color4E = document.getElementById('color4')
function generateColors(){
    let hue = parseInt(hueE.value)
    mainColorE.style.backgroundColor = `hsl(${hue}, 100%, 50%)`;
    color1E.style.backgroundColor = `hsl(${hue}, 80%, 50%)`;
    color2E.style.backgroundColor = `hsl(${hue}, 60%, 50%)`;
    color3E.style.backgroundColor = `hsl(${hue}, 40%, 50%)`;
    color4E.style.backgroundColor = `hsl(${hue}, 20%, 50%)`;
}

generatePallete.addEventListener('click', generateColors);