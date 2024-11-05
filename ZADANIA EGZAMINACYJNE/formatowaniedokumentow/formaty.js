btnRed.addEventListener('click', (e)=>{
    changeStyle("red");
})
btnGreen.addEventListener('click', (e)=>{
    changeStyle("green");
})
btnBlue.addEventListener('click', (e)=>{
    changeStyle("blue");
})

const fontSizeE = document.getElementById('fontSize');
const fontStyleE = document.getElementById('fontStyle');
const paragraphE = document.getElementById('format');

function changeStyle(color){
    paragraphE.style.color = color;
    paragraphE.style.fontStyle = fontStyleE.value;
    paragraphE.style.fontSize = fontSizeE.value + '%';
}
