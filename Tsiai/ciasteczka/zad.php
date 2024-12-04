<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- <input type='text' name='imie' required placeholder='Podaj imię'>
    <input type='submit' value='Zapisz'> -->

    <?php

        if(!isset($_COOKIE['imie']) && empty($_POST['imie'])) {
            echo "
            <form method = 'post'>
            <input type='text' name='imie' required placeholder='Podaj imię'>
            <input type='submit' value='Zapisz'>
            </form>
            ";
        } elseif(!isset($_COOKIE['imie']) && !empty($_POST['imie'])){
            setcookie("imie", $_POST['imie'], time() + 10);
            echo "Witaj użytkowniku {$_POST['imie']} jesteś na naszej stronie 1 raz";
            setcookie("licznik", 1, time() + 10);
        } else {
            $licznik = $_COOKIE['licznik'] + 1;
            setcookie("licznik", $licznik, time() + 10);
            setcookie("imie", $_COOKIE['imie'], time() + 10);
            echo "Witaj uzytkowniku {$_COOKIE['imie']} jesteś na naszej stronie {$licznik} raz ";
            echo "<a href='zad2.php'>Usuń ciasteczka {$_COOKIE['imie']}</a>";
        }

    ?>

    <!-- <a href='zad2.php'>Usuń ciasteczka {$_COOKIE['imie']};</a> -->

</body>
</html>