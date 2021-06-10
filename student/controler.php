<?php

require_once './DAO.php';

$dao = new DAO();

if ($_SERVER['REQUEST_METHOD']==="POST"){
    $id = isset($_POST["id"])? test_input($_POST["id"]) : ""; 
    $ime = isset($_POST["ime"])? test_input($_POST["ime"]) : ""; 
    $prezime = isset($_POST["prezime"])? test_input($_POST["prezime"]) : ""; 
    $brIndexa = isset($_POST["brIndexa"])? test_input($_POST["brIndexa"]) : ""; 
    if (!$dao->update($ime, $prezime, $brIndexa, $id)) {
        $greska = 'Ne postoji student sa tim id-om';
        include_once 'index.php';
    } else {
        session_start();
        $_SESSION['student']['ime'] = $ime;
        $_SESSION['student']['prezime'] = $prezime;
        $_SESSION['student']['brIndexa'] = $brIndexa;
        $_SESSION['student']['id'] = $id;
        header('Location: prikaz.php');
    }

} elseif ($_SERVER['REQUEST_METHOD']==="GET"){
    session_start();
    session_unset();
    session_destroy();
    header('Location: index.php');
}

//funkcija za preradu unetih podataka
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>