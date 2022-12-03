<?php
    include("../data_base.php");
?>

<?php
    $asunto = $_POST[''];
    $dni = $_POST[''];
    $name = $_POST[''];
    $phone = $_POST[''];
    $mail = $_POST[''];
    $hour = $_POST[''];
    $date = $_POST['']; 


    $sql = "INSERT INTO solicitud(Asunto,DNI_cliente,Nombre_cl,Telefono,Email,Hora,Fecha) 
            VALUE($asunto,$dni,$name,$phone,$mail,$hour,$date)";

    mysqli_query($conn, $sql);
?>