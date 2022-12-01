<?php
    require('../data_base.php');
?>

<?php
    $sql = "SELECT Asunto, DNI_cliente FROM solicitud";

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
        echo $row['Asunto']," ",$row['DNI_cliente'];
    }
?>