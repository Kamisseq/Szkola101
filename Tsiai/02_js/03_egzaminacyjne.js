
const numberOfCoffeE = document.getElementById('numberOfCoffe');
const weightInDgE = document.getElementById('weightInDg');
const buttonE = document.querySelector('button');

const calculator = function(event){
    const number = parseInt(numberOfCoffeE.value);
    const weight = parseInt(weightInDgE.value);
    let priceFor1DG = 0;

    switch(number){
        case 1:
            priceFor1DG = 5;
            break
        case 2:
            priceFor1DG = 7;
            break
        case 3:
            priceFor1DG = 6;
            break
        }

        result.textContent=`Kost zamówienia wynosi ${priceFor1DG * weight} zł`
}

buttonE.addEventListener('click', calculator)
