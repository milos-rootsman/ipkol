<?php
require 'flight/Flight.php';
require '../student/DAO.php';


Flight::route('/', function(){
    $dao = new DAO();
    $result = $dao->studenti();

    echo json_encode($result);
});


Flight::route('/@name', function($name){
    echo "hello, $name !";
});

Flight::start();
