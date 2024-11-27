const quantityArrayE = document.querySelectorAll('.quantity')
const updateArrayE = document.querySelectorAll('.update')
const ordersArrayE = document.querySelectorAll('.orders')
const nameOfProductArrayE = document.querySelectorAll('tr td:first-child')

let orderId = 0;

function checkQuantity(){
    quantityArrayE.forEach(quantityE => {
        const quantity = parseInt(quantityE.textContent);
        if(quantity === 0){
            quantityE.style.backgroundColor = 'red';
        }
        else if (quantity >= 1 && quantity <=5){
            quantityE.style.backgroundColor = 'yellow';
        }
        else {
            quantityE.style.backgroundColor = 'honeydew';
        }
    })
};

checkQuantity()


updateArrayE.forEach((updateE, index) => {
    updateE.addEventListener('click', e=>{
        const newQuantity = prompt('Podaj nową ilość');
        quantityArrayE[index].innerHTML = newQuantity;
        checkQuantity();
    })
});

ordersArrayE.forEach((ordersE, index) =>{
    ordersE.addEventListener('click', e=>{
        orderId++;
        alert(`Zamówienie nr: ${orderId} Produkt: ${nameOfProductArrayE[index].innerHTML}`)
    })
});

