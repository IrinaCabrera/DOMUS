<?php
    require('./data_base.php');
?>

<?php
    $dni = $_POST[''];

    //get id events
    $sql = "SELECT Id_evento 
            FROM asignacion
            WHERE DNI_agente = $dni";
    
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    //get prop
    for($i = 0; $i < $rows; $i++){
        $id_event = $rows[$i]['Id_evento'];
        $sql =   "SELECT Cod_propiedad
                    FROM cita
                    WHERE Id_evento = $id_event";

        $result_props[] = mysqli_query($conn, $sql);
    }

    //get adress prop, events
    for($i = 0; $i < $result_props; $i++){
        $cod_prop = $result_props[$i]['Cod_propiedad'];
        $event_aux = $rows[$i]['Id_evento'];

        $sql =   "SELECT ubicacion.Direccion, evento.Fecha, evento.Hora, evento.Titulo, evento.Asunto
                    FROM ubicacion, evento
                    WHERE ubicacion.Cod_propiedad = $cod_prop AND evento.Id_evento = $event_aux";

        $final_result[] = mysqli_query($conn, $sql);
    }

    //show info
    for($i = 0; $i < $final_result; $i++){
        echo $final_result['ubicacion.Direccion'] . " " . 
                $final_result['evento.Fecha'] . " " . $final_result['evento.Hora'] . " " . 
                $final_result['evento.Titulo'] . " " . $final_result['evento.Asunto'];
    }
?>