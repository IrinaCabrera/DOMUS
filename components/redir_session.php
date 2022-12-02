<?php 
    function verify_session($conn,$row,$user_ver){
        try{
            $aux = $row['DNI'];
            $sql = "SELECT DNI FROM $user_ver WHERE DNI = '$aux'";
    
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_array($result);
        } catch (mysqli_sql_exception $e) { 
            var_dump($e);
            exit; 
        }

        $aux = ucfirst($user_ver);

        if(!empty($row['DNI'])){
            header("Location: http://localhost/DOMUS/components/index$aux.php");
            exit;
        }
    }
?>

<?php
    require("./data_base.php");
?>

<?php
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
        $rs = array("secretario","agente_inmobiliario","cliente");
        for($i = 0; $i < count($rs); $i++){
            verify_session($conn,$row,$rs[$i]);
        }
    }else{
        header("Location: http://localhost/DOMUS/components/");
    }
?>