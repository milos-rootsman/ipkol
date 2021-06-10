<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikaz</title>
</head>
<body>
<ul>
<?php

    require './DAO.php';
    $dao = new DAO();

    $result = $dao->studenti();


    foreach($result as $student)
        echo '<li>'.$student['id'].' - '.$student['ime'].$student['prezime'].$student['brIndexa'].'</li>';
?>


</ul>
</body>
</html>