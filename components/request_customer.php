<?php
    require('./data_base.php');
?>

<?php
    $asunto = $_POST[''];
    $dni = $_POST[''];

    $sql = "INSERT INTO solicitud (Asunto, DNI_cliente)
            VALUE ($asunto, $dni)";

    mysqli_query($conn, $sql);
?>