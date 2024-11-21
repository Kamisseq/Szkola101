const imageE = document.getElementById("active-image");

let index = 1;

nextImage.addEventListener('click', (e)=>{
    if (index == 7){
        index = 1;
    }
    else {
        index++;
    }

    imageE.src = `${index}.jpg`
});

previousImage.addEventListener('click', (e)=>{
    if (index == 1){
        index = 7;
    }
    else {
        index--;
    }

    imageE.src = `${index}.jpg`
})

