<?php



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
            <a href="https://komunikaty.pl">Dowiedz się więcej</a>
            <img src="obraz2.jpg" alt="rzeka">
        </section>

    </main>

    
    <footer>
        <p>Stronę wykonał: 123456</p>
    </footer>
</body>
</html>