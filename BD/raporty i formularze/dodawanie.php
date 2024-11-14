<?php
$conn = new mysqli('localhost', 'root', '', 'kamil_lepper');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST['typ']) &&  isset($_POST['nazwa']) && isset($_POST['cena'])){
            $typ = $_POST['typ'];
            $nazwa = $_POST['nazwa'];
            $cena = $_POST['cena'];
        

            $sql = "INSERT INTO dania (typ, nazwa, cena) VALUES ($typ, '$nazwa', $cena)";
            if($conn->query($sql)){
                echo "Danie $nazwa zostało dodane do bazy";
            }
        }
        else{
            echo"Uzupełnij dane: ";
        }
       
    ?>
</body>
</html>
<?php
$conn->close();
?>