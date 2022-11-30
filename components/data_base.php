<?php 
    function verify_secr($conn,$row,$user_ver){
        try{
            $aux = $row['DNI'];
            $sql = "SELECT DNI FROM $user_ver WHERE DNI = '$aux'";
    
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_array($result);
        } catch (mysqli_sql_exception $e) { 
            var_dump($e);
            exit; 
        }

        if(!empty($row['DNI'])){
            include("./indexSecretaria.php");
        }else{
            include("./index.php"); 
        }
    }
?>

<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "domus";

    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

    $email = $_POST['exampleInputEmail1'];
    $pwd = $_POST['exampleInputPassword1'];

    try{
        $sql = "SELECT Email, Contraseña, DNI FROM usuario WHERE Email = '$email' AND Contraseña = '$pwd' ";

        $result = mysqli_query($conn, $sql);
    } catch (mysqli_sql_exception $e) { 
        var_dump($e);
        exit; 
    }

    $row = mysqli_fetch_array($result);

    if(!empty($row['Email']) && !empty($row['Contraseña'])){
        verify_secr($conn ,$row,'secretario');
    }
?>