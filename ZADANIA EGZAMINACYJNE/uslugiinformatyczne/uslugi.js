przeslijGuzik.addEventListener('click', (e)=>{
    if(regulamin.checked){
        komunikat.innerHTML = `${imie.value.toUpperCase()} ${nazwisko.value.toUpperCase()} <br>
        Treść twojej sprawy: ${zgloszenie.value}`
        komunikat.style.color = 'Navy';
    }
    else{
        komunikat.textContent = 'Musisz zapoznać się z regulaminem.'
        komunikat.style.color = 'Red'
    }
})

resetGuzik.addEventListener('click', (e)=>{
    
})
