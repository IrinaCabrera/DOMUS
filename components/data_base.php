<?php 
    session_start();
    
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "domus";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
?>