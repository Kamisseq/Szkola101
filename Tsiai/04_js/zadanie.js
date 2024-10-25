const fontSizeE = document.getElementById('fontSize');
const paragraphE = document.querySelector('.right p');
const italicCheckboxE = document.getElementById('italicText');
const ulE = document.querySelector('ul');
const classSelectingE = document.getElementById('classSelecting');

fontSizeE.addEventListener("change", (e)=>{
    paragraphE.style.fontSize = fontSizeE.value + "px";
    console.log(paragraphE);
})

italicCheckboxE.addEventListener("change", (e)=>{
    if (italicCheckboxE.checked){
        paragraphE.style.fontStyle = "italic";
    }
    else{
        paragraphE.style.fontStyle = "normal";
    }
})

ulE.addEventListener('click', (e)=>{
    let hue = document.querySelector('input[name="colorOption"]:checked').value
    paragraphE.style.color = `hsl(${hue}, 80%, 50%)`;
    paragraphE.style.backgroundColor = `hsl(${hue}, 80%, 90%)`
})

classSelectingE.addEventListener("change", (e)=>{
        paragraphE.className = document.querySelector('#classSelecting').value
})