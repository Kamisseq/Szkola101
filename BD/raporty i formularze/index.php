<?php
$conn = new mysqli("localhost", "root", "", "kamil_lepper");

$sql = "SELECT typ, nazwa, cena, id FROM dania;";
$result =$conn->query($sql);  
$dania =$result->fetch_all(1); 

$sql = "SELECT typy_dan.nazwa, AVG(cena) as srednia_cena 
FROM dania
INNER JOIN typy_dan ON dania.typ = typy_dan.id
GROUP BY typ";
$result =$conn->query($sql);
$ceny =$result->fetch_all(1);

$sql = "SELECT id, nazwa FROM typy_dan";
$result = $conn->query($sql);
$typydan =$result->fetch_all(1);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <section class="left">
    <h2>Dostępne dania: </h2>
    <ol>
        <?php
            foreach($dania as $danie){
                echo"<li><strong>{$danie['typ']} </strong>{$danie['nazwa']} - {$danie['cena']} zł </li>";
            }
            
        ?>
    </ol>
    <h2>Dodaj nowe danie</h2>
    <form action="dodawanie.php" method="post">
    <p>Wybierz typ dania: </p>
    <!-- <label>
    <input type='radio' name='typ' value ='1'> Główne
    </label> -->
            <?php
                foreach($typydan as $typ){
                    echo"
                    <label>
                    <input type='radio' name='typ' value ='{$typ['id']}'> {$typ['nazwa']}
                    </label>
                    ";
                }
            ?>
    <br>
    <input type="text" name="nazwa" id="name" required placeholder="Podaj nazwe " >
    <br>
    <input type="number" name="cena" id="price" required step="0.01" placeholder="Podaj cene" ><br>
    <button>Wyślij</button>
    </form>

    </section>

    <section class="right">
    <h2>Nasze ceny są najniższe</h2>
        <div class="blockContainer">
            <?php
                foreach($ceny as $cena){
                    echo"<div class='block'><p>{$cena['nazwa']} {$cena['srednia_cena']} zł </p></div>";
                }
            ?>
        </div>
    </section>

</body>
</html>

<?php
$conn->close();
?>