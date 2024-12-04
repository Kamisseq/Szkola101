btn2.addEventListener('click', e=>{
    tab2.classList.remove("hidden");
    tab1.classList.add("hidden");
    tab3.classList.add("hidden");
})

btn1.addEventListener('click', e=>{
    tab2.classList.add("hidden");
    tab1.classList.remove("hidden");
    tab3.classList.add("hidden");
})


btn3.addEventListener('click', e=>{
    tab2.classList.add("hidden");
    tab1.classList.add("hidden");
    tab3.classList.remove("hidden");
})

let progressPercentage = 4;

const progressE = document.getElementById('progress');

const inputArrayE = document.querySelectorAll('main input');

inputArrayE.forEach(inputE => {
    inputE.addEventListener('blur', e=>{
        progressPercentage += 12;
        if(progressPercentage > 100){
            progressPercentage = 100;
        }
        progressE.style.width = progressPercentage + '%';
    })
});

button = document.querySelector('#tab3 button');

button.addEventListener('click', e=>{
    console.log(`${firstName.value}, ${lastName.value}, ${birthDate.value}, ${street.value}, ${houseNumber.value}, ${city.value}, ${telephoneNumber.value}, ${rodo.checked}`);
})