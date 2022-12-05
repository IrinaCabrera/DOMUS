<?php
    include("./data_base.php");
?>

<?php
    $dni = $_POST[''];
    $mail = $_POST[''];
    $name = $_POST[''];
    $lastname = $_POST[''];
    $pwd = $_POST[''];
    $phone = $_POST[''];

    $type = $_POST[''];
    $hour_reg = $_POST[''];
    $date_reg = $_POST[''];
    $rs = $_POST[''];
    $birthday = $_POST[''];
    $cod_user = $_POST[''];
    $cuil = $_POST[''];
    $adress = $_POST[''];
    $agent = $_POST[''];

    $sql = "INSERT INTO usuario (DNI,Email,Nombre,Apellido,Contraseña,Telefono)
            VALUE($dni,$mail,$name,$lastname,$pwd,$phone)";
    
    mysqli_query($conn, $sql);

    $sql = "INSERT INTO cliente (DNI,Direccion,Cuit_cuil,Cod_usuario,Fecha_nacimiento,Fecha_registro,Hora_registro,
                                Razon_social,Agente,Tipo)
            VALUE($dni,$adress,$cuil,$cod_user,$birthday,$date_reg,$hour_reg,$rs,$agent,$type)";
    
    mysqli_query($conn, $sql);
?>