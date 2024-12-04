<?php

    $conn = new mysqli("localhost", "root", "", "dane2");

    $sql = "SELECT nazwa, ilosc, opis, cena, zdjecie
    FROM Produkty
    WHERE rodzaje_id IN (1, 2)";
    $result = $conn->query($sql);
    $blocks = $result->fetch_all(1);

    // $sql2 = "INSERT INTO PRODUKTY (rodzaje_id, producenci_id, nazwa, ilosc, opis, cena, zdjecie)
    // VALUES ( 1, 4, 'owoc1', 10, '', 9.99, 'owoce.jpg')";
    // $result = $conn->query($sql2);

    if (!empty($_POST['nazwa']) && isset($_POST['cena'])){
        $nazwa = htmlspecialchars($_POST['nazwa']);
        $cena = $_POST['cena'];

        $sql2 = "INSERT INTO PRODUKTY (rodzaje_id, producenci_id, nazwa, ilosc, opis, cena, zdjecie)
        VALUES ( 1, 4, '$nazwa', 10, '', $cena, 'owoce.jpg')";
        $result = $conn->query($sql2);
    }

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warzywniak</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <section class="left">
            <h1>Internetowy sklep z eko-warzywami</h1>
        </section>
        <section class="right">
            <ol>
                <li>Warzywa</li>
                <li>Owoce</li>
                <li><a href="https://terapiasokami.pl/" target="_blank">Soki</a></li>
            </ol>
        </section>
    </header>

     <main>
            
            <div class="product">
            <img src="arbuz.jpg" alt="warzywniak">
            <h5>NAZWA</h5>
            <p>opis: OPIS</p>
            <p>na stanie: ILOSC</p>
            <h2>CENA zł</h2>
            </div>


        <!-- SKRYPT 1 -->

        <?php

            foreach($blocks as $block){
                echo"
                <div class='product'>
                <img src='{$block['zdjecie']}' alt='warzywniak'>
                <h5>{$block['nazwa']}</h5>
                <p>opis: {$block['opis']}</p>
                <p>na stanie: {$block['ilosc']}</p>
                <h2>{$block['cena']} zł</h2>
                </div>
                ";
            }

        ?>

     </main>

     <footer>

        <form action="sklep.php" method="post">
            <label for="nazwa">Nazwa:</label>
            <input type="text" name="nazwa" id="nazwa">
            <label for="cena">Cena:</label>
            <input type="text" name="cena" id="cena">
            <button type="submit">Dodaj produkt</button>
        </form>

        <p>Stronę wykonał: 000000000000000000000000000</p>

     </footer>
</body>
</html>


<?php

    $conn->close();

?>