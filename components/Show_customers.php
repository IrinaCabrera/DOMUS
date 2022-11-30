<?php
    require('./data_base.php');
?>

<?php
    $sql = "SELECT cliente.DNI, cliente.Cod_usuario, cliente.Razon_social, cliente.Tipo, cliente.Cuit_cuil, usuario.Nombre, usuario.Apellido
            FROM cliente, usuario
            WHERE usuario.DNI = cliente.DNI";

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
        echo $row['DNI'] . " " . $row['Nombre'];
    }
?>