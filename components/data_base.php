<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "domus";

    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

    $email = $_POST['exampleInputEmail1'];
    $pwd = $_POST['exampleInputPassword1'];

    try{
        $sql = "SELECT Email, Contraseña FROM usuario WHERE Email = '$email' AND Contraseña = '$pwd' ";

        $result = mysqli_query($conn, $sql);
    } catch (mysqli_sql_exception $e) { 
        var_dump($e);
        exit; 
    }

    $row = mysqli_fetch_array($result);

    if(empty($row['Email']) && empty($row['Contraseña'])){
        include("./index.php");
    }else{
        include("./indexSecretaria.php");
    }
    
?>