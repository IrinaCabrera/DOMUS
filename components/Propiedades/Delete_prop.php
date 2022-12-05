<?php
    include("../data_base.php");
?>

<?php
    $pais = $_POST[''];
    $provincia = $_POST[''];
    $localidad = $_POST[''];
    $direccion = $_POST[''];

    //search Cod
    $sql = "SELECT Cod_propiedad
            FROM ubicacion
            WHERE Pais = $pais AND Provincia = $provincia AND Localidad = $localidad AND Direccion  = $direccion";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);

    //delete ubic
    $sql = "DELETE FROM ubicacion
            WHERE Cod_propiedad = $row";

    //delete prop
    $sql = "DELETE FROM propiedad
            WHERE Cod_propiedad = $row";

    //delete image
    $sql = "DELETE FROM imagen
            WHERE Cod_propiedad = $row";

    //delete video and servicio (first i have create them)
?>