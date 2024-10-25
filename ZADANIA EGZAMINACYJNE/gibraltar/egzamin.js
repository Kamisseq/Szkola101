const rightE = document.querySelector('.right')
const fontsizeE = document.getElementById('fontsize');
const imgE = document.querySelector('img');
const ulE = document.querySelector('.right ul');

indigoBtn.addEventListener('click', (e)=>{
    rightE.style.backgroundColor = 'indigo';
})

steelblueBtn.addEventListener('click', (e)=>{
    rightE.style.backgroundColor = 'steelblue';
})

oliveBtn.addEventListener('click', (e)=>{
    rightE.style.backgroundColor = 'olive';
})

fontcolor.addEventListener('click', (e)=>{
    rightE.style.color = fontcolor.value;
} )

fontsizeE.addEventListener('change', (e)=>{
    rightE.style.fontSize = fontsizeE.value;
})

paintrama.addEventListener('click', (e)=>{
    if (paintrama.checked) {
        imgE.style.border = '1px solid white'
    } 
    else{
        imgE.style.border = 'none';
    }
})

typeList.addEventListener('click', (e)=>{
    ulE.style.listStyleType = document.querySelector('input[name="type"]:checked').value;
})

