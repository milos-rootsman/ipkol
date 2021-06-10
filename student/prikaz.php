<?php
session_start();

if (!isset($_SESSION['student']))
    header('Location: index.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikaz</title>
</head>
<body>

<p>ime: <?php echo $_SESSION['student']['ime'] ?></p>
<p>prezime: <?php echo $_SESSION['student']['prezime'] ?></p>
<p>brIndexa: <?php echo $_SESSION['student']['brIndexa'] ?></p>
<p>id: <?php echo $_SESSION['student']['id'] ?></p>
    
</body>
</html>