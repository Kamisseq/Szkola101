<?php

    $conn = new mysqli("localhost", "root", "", "rzeki");
        
        $sqlEverything = "SELECT nazwa, rzeka, stanOstrzegawczy, stanAlarmowy, stanWody
        from wodowskazy
        JOIN pomiary ON wodowskazy_ID = wodowskazy.id
        WHERE dataPomiaru = '2022-05-05'";

        // $result = $conn->query($sqlEverything);
        // $everything = $result->fetch_all(1);



        $sqlWarning = "SELECT nazwa, rzeka, stanOstrzegawczy, stanAlarmowy, stanWody
        from wodowskazy
        JOIN pomiary ON wodowskazy_ID = wodowskazy.id
        WHERE dataPomiaru = '2022-05-05' AND stanWody > stanOstrzegawczy";

        // $result = $conn->query($sql)
        // $aboveWarning = $result->fetch_all(1);



        $sqlAlarm = "SELECT nazwa, rzeka, stanOstrzegawczy, stanAlarmowy, stanWody
        from wodowskazy
        JOIN pomiary ON wodowskazy_ID = wodowskazy.id
        WHERE dataPomiaru = '2022-05-05' AND stanWody > stanAlarmowy";

        // $result = $conn->query($sqlAlarm)
        // $aboveAlarm = $result->fetch_all(1);

        $waterLevels = [];

        if(!empty($_POST['filtr'])){
            $filtr = $_POST['filtr'];
            if($filtr == "wszystkie"){
                $result = $conn->query($sqlEverything);
            } elseif ($filtr == "ostrzegawczy"){
                $result = $conn->query($sqlWarning);
            } elseif ($filtr == "alarmowy"){
                $result = $conn->query($sqlAlarm);
            }
            $waterLevels = $result->fetch_all(1);
        }


        $sqlAverageWaterLevel = "SELECT dataPomiaru, AVG(stanWody) as Srednistanwody
        from pomiary
        group by dataPomiaru";

        $result = $conn->query($sqlAverageWaterLevel);
        $averageWaterLevels = $result->fetch_all(1);


?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poziomy rzek</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    
    <header>
        <div>
            <img src="obraz1.png" alt="Mapa Polski">
        </div>
        <div>
            <h1>Rzeki w województwie dolnośląskim</h1>
        </div>
    </header>

    <section class = "menu">
        <form action="poziomRzek.php" method="post">
            <label>
                <input type="radio" name="filtr" value="wszystkie" class="option"> Wszystkie
            </label>
            <label>
                <input type="radio" name="filtr" value="ostrzegawczy" class="option"> Ponad stan ostrzegawczy
            </label>
            <label>
                <input type="radio" name="filtr" value="alarmowy" class="option"> Ponad stan alarmowy
            </label>
            <button type="submit">Pokaż</button>
        </form>
    </section>

    
    <main>
        
        <section class = "leftblock">
            <h3>Stany na dzień 2022-05-05</h3>
            <table>
                
                    <tr>
                        <th>Wodomierz</th>
                        <th>Rzeka</th>
                        <th>Ostrzegawczy</th>
                        <th>Alarmowy</th>
                        <th>Aktualny</th>
                    </tr>
               

              
                    <!-- SKRYPT -->
                    <?php
                   
                        foreach($waterLevels as $waterLevel){
                            echo "<tr>
                                    <td>{$waterLevel['nazwa']}</td>
                                    <td>{$waterLevel['rzeka']}</td>
                                    <td>{$waterLevel['stanOstrzegawczy']}</td>
                                    <td>{$waterLevel['stanAlarmowy']}</td>
                                    <td>{$waterLevel['stanWody']}</td>
                                </tr>";
                        }
                    
                    ?>
               
            </table>
        </section>

        
        <section class = "rightblock">
            <h3>Informacje</h3>
            <ul>
                <li>Brak ostrzeżeń o burzach z gradem</li>
                <li>Smog w mieście Wrocław</li>
                <li>Silny wiatr w Karkonoszach</li>
            </ul>
            <h3>Średnie stany wód</h3>

                <?php

                    foreach($averageWaterLevels as $averageWaterLevel){
                        echo "<p>{$averageWaterLevel['dataPomiaru']}: {$averageWaterLevel['Srednistanwody']}</p>";
                    }

                ?>

            <a href="https://komunikaty.pl">Dowiedz się więcej</a>
            <img src="obraz2.jpg" alt="rzeka">
        </section>

    </main>

    
    <footer>
        <p>Stronę wykonał: 123456</p>
    </footer>
</body>
</html>

<?php

    $conn->close();

?>