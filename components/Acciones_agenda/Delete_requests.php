<?php
    require('./data_base.php');
?>

<?php
    $sql = "DELETE FROM solicitud
            WHERE Asunto = $matter AND DNI_cliente = $dni AND Nombre_cl = $name AND
            Telefono = $phone AND Email = $mail AND Hora = $hour AND Fecha = $date";
    
    mysqli_query($conn, $sql);

    header('Location: http://localhost/DOMUS/components/indexSecretario.php');
?>