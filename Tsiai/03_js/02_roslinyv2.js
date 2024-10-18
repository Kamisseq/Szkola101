const buttonE = document.querySelector('button');

const tariff = {
    drzewa:50, 
    krzewy:30,
    byliny:15
}  
const calculator = function(event){
    let selectedPlant = document.querySelector('input[name="plants"]:checked').value;
    
    costDisplay.textContent = `Wybrałeś ${selectedPlant}, koszt wynosi ${tariff[selectedPlant]}zł`

};
buttonE.addEventListener('click', calculator);