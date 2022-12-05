<?php
    include("../data_base.php");
?>

<?php
    $asunto = $_POST['Asunto'];
    $dni = $_POST[''];
    $name = $_POST['FirstName'];
    $phone = $_POST['Phone'];
    $mail = $_POST['Email'];
    $hour = date("h:i:sa");
    $date = date("Y-m-d");


    $sql = "INSERT INTO solicitud(Asunto,DNI_cliente,Nombre_cl,Telefono,Email,Hora,Fecha) 
            VALUE($asunto,$dni,$name,$phone,$mail,$hour,$date)";

    mysqli_query($conn, $sql);
?>