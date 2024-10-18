
const treeE = document.getElementById('tree');
const bushesE = document.getElementById('bushes');
const perennialsE = document.getElementById('perennials');
const buttonE = document.querySelector('button');

const calculator = function(event){
    let selectedPlant = document.querySelector('input[name="plants"]:checked').value;
    if (selectedPlant) {
        let cost = 0;
        switch (selectedPlant) {
            case "drzewa":
                cost = 50 * 10;
                break;
            case "krzewy":
                cost = 30 * 10;
                break;
            case "byliny":
                cost = 15 * 10;
                break;
        }
    document.getElementById('costDisplay').textContent = "Koszt to: " + cost + " zł";

}};
buttonE.addEventListener('click', calculator);