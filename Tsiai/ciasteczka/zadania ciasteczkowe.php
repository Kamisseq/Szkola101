<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    form:post

    <!-- 1. 
A.  ustaw ciasteczko o dowolnej nazwie i treści "witam na stronie", czas - 10 sekund
B. następnie wyświetl ciasteczko 
C. jeśli pojawiły się błędy (gdy ciasteczka nie ma) sprawdź czy istnieje, zanim je wyświetlisz

-->
<?php
    setcookie("mojawiadomosc", "witam na stronie", time() + 10);

    if (isset($_COOKIE['mojawiadomosc'])){
        echo $_COOKIE['mojawiadomosc'];
    } else{
        echo "ciasteczko nie istnieje";
    }
?>

<!-- 2. 
A. sprawdź czy ciasteczko licznik istnieje, jeśli nie, ustaw je na wartość 1 (czas - 15 sekund)
B. w przeciwnym wypadku oczytaj jego wartość, zwiększ o 1 i ponownie ustaw na 15 sekund
C. przetestuj  -->

<?php
    if(isset($_COOKIE['licznik'])){
        $licznik = $_COOKIE['licznik'] + 1;
        setcookie("licznik", $licznik, time() + 15);
        echo "to wizyta" . $licznik;
    } else{
        setcookie("licznik", 1, time() + 15);
        echo "to pierwsza wizyta";
    }
?>

<!-- 
3. Napisz skrypt PHP, który po połączeniu się ze stroną:
Jeśli strona jest odwiedzana po raz pierwszy poprosi o imię użytkownika i zapisze je w ciasteczku.
Jeśli strona jest odwiedzana po raz kolejny wyświetli komunikat powitalny: -->

<?php

?>

<!-- 4. zmodyfikuj poprzednie zadanie tak, aby poza imieniem była wyświetlana liczba odwiedzin strony: -->
  

<!-- 5. Dodaj możliwość usuwania ciasteczka imie (przy okazji powinno też być usunięte ciasteczko z liczbą odwiedzin) --> -->
</body>
</html>
