<?php
$conn = new mysqli("localhost", "root", "", "terminarz");
$query = "SELECT DISTINCT wpis
FROM zadania
WHERE dataZadania BETWEEN '2020-07-01' AND '2020-07-07'
    AND WPIS IS NOT NULL
    AND WPIS != '';";
    $result = $conn->query($query);
    $tasks = $result->fetch_all(1);

    $query = "SELECT dataZadania, wpis
    from zadania
    WHERE miesiac = 'lipiec';";
    $result = $conn->query($query);
    $tasks2 = $result->fetch_all(1);
    ?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania na Lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header>
        <section class="first">
            <img src="logo1.png" alt="lipiec">
        </section>
        <section class="second">
            <h1>TERMINARZ</h1>
            <p>
                najbliższe działania:
                    <?php
                        foreach($tasks as $task){
                            echo "{$task['wpis']}; ";
                        }
                    ?>
            </p>
        </section>
    </header>

    <main>
         <?php
            foreach($tasks2 as $task){
                echo "<div class='calendar'>
                    <h6> {$task['dataZadania']} </h6>
                    <p> {$task['wpis']} </p>
                </div>";
            }
         ?>               
    </main>
    <footer>
        <a href="sierpien.html">Terminarz na sierpień</a>
        <p>Stronę wykonał: 00000000000000</p>
    </footer>
</body>
</html>

<?php
 $conn->close();
?>