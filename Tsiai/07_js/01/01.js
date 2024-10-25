const buttonE = document.querySelector('button');
const surnameE = document.getElementById('surname');
const errorMessageE = document.getElementById('error');

surnameE.addEventListener("input", (e)=>{
    let surname = surnameE.value
    if (surname.length < 3){
        surnameE.classList.add("error");
        errorMessageE.textContent = "zbyt krótkie";
    }
    else {
        surnameE.classList.remove("error");
        errorMessageE.textContent = "";
    }
})
