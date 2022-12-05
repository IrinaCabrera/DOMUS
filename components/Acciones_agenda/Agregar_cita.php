<?php
    require('../data_base.php');
?>

<?php
    $name_customer = $_POST['data_name'];
    $phone_customer = $_POST['data_phone'];

    $status = "pendiente";
    $date = $_POST['date_start'];
    $secr = $_SESSION['Nombre'];
    $time = $_POST['time_start'];
    //$title = $_POST[''];
    //$asunto = $_POST[''];
    //$dni = $_POST[''];

    $agent = $_POST['exampleFormControlSelect1'];
    $prop = $_POST['data_prop'];

    //save a event
    $sql = "INSERT INTO evento (Id_evento, Estado, DNI_cliente, Fecha, Hora, Titulo, Asunto) 
            VALUES (NULL, $status, $date, $dni, $time, $title, $Asunto)";

    mysqli_query($conn, $sql);

    //save a appointment
    $sql = "SELECT Id_evento 
            FROM evento 
            WHERE Estado = $status, Fecha = $date, Hora = $time, Titulo = $title";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);
    $aux_row = $row['Id_evento']

    $sql = "INSERT INTO cita (Id_evento, Cod_propiedad) VALUES($aux_row, $prop)";

    mysqli_query($conn, $sql);

    //save a assignment
    $sql = "INSERT INTO asignacion (DNI_secretario, DNI_agente, Id_evento) 
            VALUE($secr, $agent, $aux_row)";

    mysqli_query($conn, $sql);

    if(mysqli_query($conn, $sql) === TRUE){
        echo "Cita guardada";
    }else{
        echo "error al guardar";
    }
?>