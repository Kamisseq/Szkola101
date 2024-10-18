console.log('dksdshnkjsank')

const number1E = document.getElementById('number1');
const number2E = document.getElementById('number2');
const buttonE = document.querySelector('button');

buttonE.addEventListener('click',(e)=>{
    console.dir(number1)
    let num1 = Number(number1E.value)
    let num2 = Number(number2E.value)
    const suma = num1 + num2;
    const iloczyn = num1 * num2;
    document.getElementById('result').textContent = `Suma liczb wynosi: ${suma} a iloczyn to:  ${iloczyn}`;
});

