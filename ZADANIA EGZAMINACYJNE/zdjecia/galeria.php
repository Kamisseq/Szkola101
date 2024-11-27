<?php

    $conn = new mysqli("localhost", "root", "", "galeria") ;

    $sql = "SELECT plik, tytul, polubienia, imie, nazwisko
    FROM zdjecia
    JOIN autorzy ON zdjecia.autorzy_id = autorzy.id
    ORDER BY nazwisko ASC";

    $result = $conn->query($sql);
    $photos = $result->fetch_all(1);

    $sql = "SELECT tytul, plik
    FROM zdjecia
    WHERE polubienia >= 100";

    $result = $conn->query($sql);
    $pictures = $result->fetch_all(1);

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
    
    <header>
        <h1>Zdjęcia</h1>
    </header>

    <main>

        <section class="left">
        
            <h2>Najbardziej lubiane</h2>

            <ol>
                <li>Zwierzęta</li>
                <li>Krajobrazy</li>
                <li>Miasta</li>
                <li>Przyroda</li>
                <li>Samochody</li>
            </ol>

        </section>

        <section class="middle">
        
            <!-- <img src='ZWROT' alt='zdjęcie'>
            <div class='generatedBlock'>
            <h3>TYTUŁ</h3>
            IF > 40
            <p>Autor IMIE NAZWISKO. Wiele osób polubiło ten obraz</p><br>
            ELSE
            <p>Autor IMIE NAZWISKO</p>
            <a href="OBRAZ" download>Pobierz</a>
            </div> -->

            <!-- SKRYPT 1 -->
            <?php

            foreach ($photos as $photo) {
                echo "
                <div class='generatedBlock'>
                <img src='{$photo['plik']}' alt='zdjęcie'>
                <h3>{$photo['tytul']}</h3>";
                if ($photo['polubienia'] > 40){
                   echo "<p>Autor: {$photo['imie']} {$photo['nazwisko']}. <br> Wiele osób polubiło ten obraz</p>";
                }
                else {
                    echo  "<p>Autor {$photo['imie']} {$photo['nazwisko']}</p>";
                }
               
                echo 
                "<a href='{$photo['plik']}' download>Pobierz</a>
                </div>
                ";
            }

            ?>

        </section>

        <section class="right">

            <h2>Najbardziej lubiane</h2>

            <!-- SKRYPT 2 -->

            <!-- <img src='OBRAZ' alt='TYTUL'> -->

            <?php

            foreach ($pictures as $picture) {
                echo" <img src='{$picture['plik']}' alt='{$picture['tytul']}'>";
            }
                
            ?>

            <strong>Zobacz wszystkie nasze zdjęcia</strong>

        </section>

    </main>

    <footer>
    
        <h5>Stronę wykonał: 123456</h5>

    </footer>

</body>
</html>

<?php

    $conn->close();

?>