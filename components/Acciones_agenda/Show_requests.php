<?php
    require("./data_base.php");
?>

<?php
    $sql = "SELECT Asunto, DNI_cliente, Nombre_cl, Telefono, Email, Hora, Fecha
            FROM solicitud";
            
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){

        echo"<tr>";
        echo"<th scope='row'>".$row['Asunto']." "."</th>";
        echo"<td>".$row['DNI_cliente'].$row['Nombre_cl'].$row['Telefono'].$row['Email'].$row['Hora'].$row['Fecha']."</td>";
        echo"<td><button type='button' class='btn btn-primary'>Realizar Cita</button>"." ";
        echo("<button type='button' class='btn btn-primary'><a href='./Delete_requests.php'>Eliminar</a></button></td>");
        echo"</tr>";
    }
        
?>
