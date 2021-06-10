<?php

    if (!isset($_COOKIE['dolazak'])) {
        setcookie('dolazak', 'Dobrodosli');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pocetna</title>
</head>
<body>
    <?php
    echo isset($_COOKIE['dolazak'])? $_COOKIE['dolazak']:'';
    ?>

    <form action="./controler.php" method="post">
        <p>id</p>
        <input id="id" name="id" type="text">
        <p>ime</p>
        <input id="ime" name="ime" type="text">
        <p>prezime</p>
        <input id="prezime" name="prezime" type="text">
        <p>brIndexa</p>
        <input id="brIndexa" name="brIndexa" type="text">
        <button type="submit">
            Submit
        </button>
    </form>
    <?php echo isset($greska)?$greska:''; ?>
    <a href="./controler.php">Obrisi sesisju</a><br>
    <a href="./prikaz.php">Prikaz studenta</a>
</body>
</html>