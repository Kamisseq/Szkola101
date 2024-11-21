

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal społecznościowy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>

    <header>
        <section id="leftbanner">
            <h2>Nasze osiedle</h2>
        </section>
        <section id="rightbanner">
            <!-- SKRYPT 1 -->
            <?php
                $conn = new mysqli("localhost", "root", "", "portal");
                    $result = $conn->query("SELECT COUNT(*) as ilosc
                    from dane;");
                    $row = $result->fetch_assoc();
                    echo "<h5> Liczba użytkowników portalu: {$row['ilosc']} </h5>";
                $conn->close();
            ?>
        </section>
    </header>

    <main>

        <section id="leftblock">
            <h3>Logowanie</h3>
                <form action="" method="post">
                    <label for="">Login</label><br>
                    <input type="text" name="login" id="" required><br>
                    <label for="">Hasło</label><br>
                    <input type="password" name="password" id="" required><br>
                    <button type="submit">Zaloguj</button>
                </form>
        </section>
        

        <section id="rightblock">
            <h3>Wizytówka</h3>
                <div id="businesscard">
                    <!-- SKRYPT 2 -->
                    <?php
                        if (!empty($_POST['login']) && !empty($_POST['password'])){
                            $conn = new mysqli("localhost", "root", "", "portal");
                            $login = $_POST['login'];
                            $password = $_POST['password'];

                                $sql = "SELECT haslo
                                FROM uzytkownicy
                                WHERE login = '$login'";

                                $result = $conn->query($sql);
                                if ($result->num_rows > 0){
                                    $row = $result->fetch_assoc();
                                    $password_from_database = $row['haslo'];
                                    if ($password_from_database == sha1($password)){
                                        
                                        $sql = "SELECT uzytkownicy.login, dane.rok_urodz, dane.przyjaciol, dane.hobby, dane.zdjecie
                                        FROM uzytkownicy
                                        JOIN dane ON uzytkownicy.id = dane.id
                                        WHERE uzytkownicy.login = '$login';";

                                        $result = $conn->query($sql);
                                        $row = $result->fetch_assoc();

                                        $wiek = date("Y") - $row['rok_urodz'];

                                        echo "
                                            <img src='{$row['zdjecie']}' alt='osoba'>
                                            <h4> {$row['login']} ($wiek)</h4>
                                            <p>Hobby: {$row['hobby']} </p>
                                            <h1><img src='icon-on.png' alt=''>{$row['przyjaciol']}</h1>
                                            <button><a href='dane.html'></a></button>
                                        ";

                                    }
                                    else {
                                        echo "<p>Hasło nieprawdiłowe</p>";
                                    }
                                }
                                else{
                                    echo "<p>Login nie istnieje</p>";
                                }

                            $conn->close();
                        }
                    ?>
                </div>
        </section>

    </main>

    <footer>
        Stronę wykonał: 000000000000000000000
    </footer>
</body>
</html>