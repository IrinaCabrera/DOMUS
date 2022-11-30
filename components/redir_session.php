<?php 
    function verify_session($conn,$row,$user_ver){
        try{
            $aux = $row['DNI'];
            $sql = "SELECT DNI FROM $user_ver WHERE DNI = '$aux'";
    
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_array($result);
        } catch (mysqli_sql_exception $e) { 
            var_dump($e);
            return 0;
            exit; 
        }

        $aux = ucfirst($user_ver);

        if(!empty($row['DNI'])){
            include("./index$aux.php");
        }else{
            include("./index.php"); 
        }

        return 1;
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
        $rs = verify_session($conn ,$row,'secretario');
        if($rs = 0) $rs = verify_session($conn ,$row,'agente_inmobiliario');
        if($rs = 0) $rs = verify_session($conn ,$row,'cliente');
    }
?>