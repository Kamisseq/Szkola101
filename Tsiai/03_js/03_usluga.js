const copyE = document.getElementById('copy');

const submitForm = function(event){
    event.preventDefault()
    let email = document.getElementById("email").value;
    let service = document.getElementById("service").value;
    let copy = ""
    
    if(copyE.checked){
        copy = "Wysłano kopie wiadomości "
    }

    result.innerHTML = `${email} <br> Usługa ${service} <br> ${copy}` 
   }

serviceForm.addEventListener('submit', submitForm);