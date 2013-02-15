<?php

$sitepath = "http://localhost/design-junkie"; 


// Database Connection

$username = 'root';

$password = 'root';

try{
    $db_connection = new PDO('mysql:host=localhost;dbname=design_junkie', $username, $password);
    $db_connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'ERROR: '.$e -> getMessage();
}

?>
