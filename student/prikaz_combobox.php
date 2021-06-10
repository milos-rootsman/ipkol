<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikaz</title>
</head>
<body>
<select name="studenti" id="studenti">
<?php

    require './DAO.php';
    $dao = new DAO();

    $result = $dao->studenti();


    foreach($result as $student)
        echo '<option value="'.$student['ime'].'">'.$student['ime'].'</option>';

?>
</select>
</body>
</html>