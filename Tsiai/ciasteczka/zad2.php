<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        setcookie("imie", "", time() - 60);
        setcookie("licznik", "", time() - 60);
        echo "Ciasteczka zostały usunięte";
    ?>
</body>
</html>