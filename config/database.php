<?php
    // declaration des  variables
    $servername = 'localhost';
    $username = 'root';
    $userpassword = 'NeverGiveUp92';
    $dbname = 'inssurance';

    // connection a la base de donnee
    $db = mysqli_connect($servername,$username,$userpassword,$dbname);

    if(!$db){
        die("Failed to connect database ".mysqli_connect_error());
    }
?>