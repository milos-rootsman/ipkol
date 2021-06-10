<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikaz</title>
</head>
<body>
<?php

    require './DAO.php';
    $dao = new DAO();

    $result = $dao->studenti();


    foreach($result as $student)
        if ($student['check']){
            echo '<label class="container">'.$student['ime'].
            '<input type="checkbox" checked="checked">'.
            '<span class="checkmark"></span>'.
        '</label>';
        } else {
            echo '<label class="container">'.$student['ime'].
            '<input type="checkbox">'.
            '<span class="checkmark"></span>'.
        '</label>';
        }
?>

</body>
</html>


