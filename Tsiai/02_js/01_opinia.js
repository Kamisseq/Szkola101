

const h1E = document.querySelector('h1');

const changeText = function(event){
    h1E.textContent="Kolorowa jesień";
}
h1E.addEventListener('click', changeText);


const formE = document.querySelector('form');

const showOpinionV2 = function(event){
    event.preventDefault()
    const myOpinion = document.querySelector('input[name="opinion"]:checked');
    result.textContent = `Twoje zdanie na ten temat to: ${myOpinion.value}`
}

const showOpinion = function(event){
    console.log(event)
    event.preventDefault()
    if(great.checked){
        result.textContent="Twoje zdanie na ten temat to: Doskonałe"
    }
    if(medium.checked){
        result.textContent="Twoje zdanie na ten temat to: Średnie"
    }
    if(poor.checked){
        result.textContent="Twoje zdanie na ten temat to: Słabe"
    }
}

formE.addEventListener('submit', showOpinionV2)
