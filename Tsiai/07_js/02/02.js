const passwordE = document.querySelector('#password');
const resultMessageE = document.getElementById('paragraf');
const reg = /\d/;



buttonE.addEventListener("click", (e)=>{
    let password = passwordE.value
    if(password.length == 0){
        resultMessageE.textContent = "WPISZ HASŁO!";
        resultMessageE.style.color = "red";
    }
    else if (password.length >= 7 && reg.test(password)){
        resultMessageE.textContent = "DOBRE";
        resultMessageE.style.color = "green";
    }
    else {
        resultMessageE.textContent = "złe";
        resultMessageE.style.color = "black";
    }

})
