<?php

    $conn = new mysqli('localhost', 'root', '', 'motory');

    $sql = "SELECT nazwa, opis, poczatek, zrodlo
    FROM wycieczki
    JOIN zdjecia ON wycieczki.zdjecia_id = zdjecia.id";

    $result = $conn->query($sql);
    $trips = $result->fetch_all(1);

    $sql = "SELECT COUNT(*) as liczba_wycieczek
    FROM wycieczki;";

    $result = $conn->query($sql);
    $numberOfTrips = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motocykle</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

    <header>
        <h1>Motocykle - moja pasja</h1>
    </header>

   
        <img src="motor.png" alt="motocykl">
 

    <main>

        <section id="leftblock">
            <h2>Gdzie pojechać?</h2>
            <dl>

                <!-- <dt>NAZWA rozpoczyna się w POCZATEK, 
                    <a href='ZRODLO.jpg'>zobacz zdjecie</a></dt>

                <dd>OPIS</dd>; -->
                

                <?php
                    foreach($trips as $trip){

                        echo "
                            <dt>{$trip['nazwa']}, rozpoczyna się w {$trip['poczatek']},
                            <a href='{$trip['zrodlo']}.jpg'>zobacz zdjecie</a></dt>
                    
                            <dd>{$trip['opis']}</dd>
                            ";
                    }
                    
                       

                 ?>
            </dl>
        </section>

       <aside>

        <section id="firstrightblock">
            <h2>Co kupić?</h2>
            <ol>
                <li>Honda CBR125R</li>
                <li>Yamaha YBR125</li>
                <li>Honda VFR800i</li>
                <li>Honda CBR1100XX</li>
                <li>BMW R1200GS LC</li>
            </ol>
        </section>


        <section id="secondrightblock">
            <h2>Statystyki</h2>
            <p>Wpisanych wycieczek: 
                
            <?php 
            
                    echo $numberOfTrips['liczba_wycieczek']
            
            ?> 

            </p>
            <p>Użytkowników forum: 200</p>
            <p>Przesłanych zdjęć: 1300</p>
        </section>

        </aside>

    </main>

    <footer>
        <p>Stronę wykonał: 123456</p>
    </footer>
</body>
</html>

<?php

    $conn->close();

?>