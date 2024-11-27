nextButton1.addEventListener("click", (e) => {
        document.getElementById("block1").style.visibility = "hidden";
        document.getElementById("block2").style.visibility = "visible";
});

nextButton2.addEventListener("click", (e) => {
    document.getElementById("block2").style.visibility = "hidden";
    document.getElementById("block3").style.visibility = "visible";
});



submitButton.addEventListener("click", (e) => {
        const passwordField = document.querySelectorAll('input[type="password"]');
        const password1 = passwordField[0].value;
        const password2 = passwordField[1].value

    if (password1 !== password2) {
        alert("Podane hasła różnią się");
        return; 
    }

        const nameField = document.querySelectorAll('input[type="text"]');
        const firstName = nameField[0].value;
        const lastName = nameField[1].value;

        console.log(`Witaj ${firstName} ${lastName}`);

});
