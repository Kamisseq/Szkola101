
const cennik = {
    krotkie: 25,
    srednie: 30,
    poldlugie: 40,
    dlugie: 50
};

const buttonE = document.querySelector('button')
buttonE.addEventListener('click', (e)=>{
    const zaznaczonePole = document.querySelector('input[name="dlugosc"]:checked');
    const cena = cennik[zaznaczonePole.value];
    wynik.innerText = `Cena promocyjna: ${cena - 10} zł`
})
