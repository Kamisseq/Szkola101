<?php
$conn = new mysqli("localhost", "root", "", "bibliotekatrzy");

?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Imię: </label>
        <input type="text" id="name" name="name">
        <label for="surname"> Nazwisko: </label>
        <input type="text" id="surname" name="surname">
        <button>Pokaż</button>
    </form>
    <?php
        if (!empty($_POST['name']) && !empty($_POST['surname'])){
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $query = "SELECT tytul
            FROM ksiazki
                JOIN wypozyczenia ON wypozyczenia.id_ksiazka = ksiazki.id
                JOIN czytelnicy ON wypozyczenia.id_czytelnik = czytelnicy.id
                WHERE imie = '$name' AND nazwisko = '$surname';";
            $result = $conn->query($query);
            $titles = $result->fetch_all(1);

            foreach($titles as $title){
                echo "<p> {$title['tytul']} </p>";
            }
        };
    ?>
</body>
</html>

<?php
$conn->close();
?>