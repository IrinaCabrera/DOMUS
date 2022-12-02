<?php
    require('./data_base.php');
?>

<?php
    $sql = "SELECT Asunto, DNI_cliente FROM solicitud";

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){

        echo"<tr>";
        echo"<th scope='row'>".$row['Asunto']."</th>";
        echo"<td>".$row['DNI_cliente']."</td>";
        echo"</tr>";
    }

    echo"<tr>";
    echo"<th scope='row'>xczczczczxczczczxczxczczxczxzcxzxczxczxczcxzczczxczxczxczxczczxczxczxczxczczcz</th>";
    echo"<td>44444444</td>";
    echo"<td><button type='button' class='btn btn-primary'>Realizar Cita</button></td>";
    echo"<td><button type='button' class='btn btn-primary'>Eliminar</button></td>";
    echo"</tr>";
    echo"<tr>";
    echo"<th scope='row'>xczczczczxczczczxczxczczxczxzcxzxczxczxczcxzczczxczxczxczxczczxczxczxczxczczcz</th>";
    echo"<td>44444444</td>";
    echo"<td><button type='button' class='btn btn-primary'>Realizar Cita</button></td>";
    echo"<td><button type='button' class='btn btn-primary'>Eliminar</button></td>";
    echo"</tr>";
    echo"<tr>";
    echo"<th scope='row'>xczczczczxczczczxczxczczxczxzcxzxczxczxczcxzczczxczxczxczxczczxczxczxczxczczcz</th>";
    echo"<td>44444444</td>";
    echo"<td><button type='button' class='btn btn-primary'>Realizar Cita</button></td>";
    echo"<td><button type='button' class='btn btn-primary'>Eliminar</button></td>";
    echo"</tr>";
    echo"<tr>";
    echo"<th scope='row'>xczczczczxczczczxczxczczxczxzcxzxczxczxczcxzczczxczxczxczxczczxczxczxczxczczcz</th>";
    echo"<td>44444444</td>";
    echo"<td><button type='button' class='btn btn-primary'>Realizar Cita</button></td>";
    echo"<td><button type='button' class='btn btn-primary'>Eliminar</button></td>";
    echo"</tr>";
    echo"<tr>";
    echo"<th scope='row'>xczczczczxczczczxczxczczxczxzcxzxczxczxczcxzczczxczxczxczxczczxczxczxczxczczcz</th>";
    echo"<td>44444444</td>";
    echo"<td><button type='button' class='btn btn-primary'>Realizar Cita</button></td>";
    echo"<td><button type='button' class='btn btn-primary'>Eliminar</button></td>";
    echo"</tr>";
    echo"<tr>";
    echo"<th scope='row'>xczczczczxczczczxczxczczxczxzcxzxczxczxczcxzczczxczxczxczxczczxczxczxczxczczcz</th>";
    echo"<td>44444444</td>";
    echo"<td><button type='button' class='btn btn-primary'>Realizar Cita</button></td>";
    echo"<td><button type='button' class='btn btn-primary'>Eliminar</button></td>";
    echo"</tr>";
        
?>
