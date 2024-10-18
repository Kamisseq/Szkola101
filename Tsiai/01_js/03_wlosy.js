// function odkryjPromocje(){
//     const dlugosc=document.querySelector
//     let cena}

//     switch(dlugosc){
//         case 'krotkie':
//             cena=25;
//             break;
//         case 'srednie':
//             cena=30;
//             break
//         case 'poldlugie': 
//             cena=40;
//             break
//         case 'dlugie':
//             cena=50;
//             break
//     }
//     document.getElementById('wynik').textContent = 'Cena strzyżenia wynosi: ' + cena;

        const formE = document.querySelector('form');
        formE.addEventListener('submit', function(event){
        event.preventDefault()
        if(krotkie.checked){
            wynik.textContent='Cena strzyżenia: 25zł';
        }
        else if(srednie.checked){
            wynik.textContent='Cena strzyżenia: 30zł';
        }
        else if(poldlugie.checked){
            wynik.textContent='Cena strzyżenia: 40zł';
        }
        else if(dlugie.checked){
            wynik.textContent='Cena strzyżenia: 50zł';
        }})