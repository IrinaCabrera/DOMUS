<?php 
    include('../data_base.php');
?>

<?php
    $sql = "SELECT propiedad.Esta_disponible, propiedad.Antiguedad, propiedad.Precio,
                    propiedad.Tipo, propiedad.Cant_baño, propiedad.Cant_dormitorio, propiedad.Cant_suite,
                    propiedad.Artefacto, propiedad.Espacio, ubicacion.Pais, ubicacion.Provincia,
                    ubicacion.Localidad, ubicacion.Direccion, ubicacion.Zona, ubicacion.Piso, imagen.Dir_imagen
            FROM propiedad, ubicacion, imagen
            WHERE propiedad.Cod_propiedad = ubicacion.Cod_propiedad AND propiedad.Esta_disponible = 1";

    //hay que ver como mostrar la imagen

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    for($i = 0; $i < $rows; $i++){
        echo $rows['propiedad.Esta_disponible'] . " " . $rows['propiedad.Antiguedad'] . " " .
        $rows['propiedad.Precio'] . " " . $rows['propiedad.Tipo'] . " " . $rows['propiedad.Cant_baño'] . " " .
        $rows['propiedad.Cant_dormitorio'] . " " . $rows['propiedad.Cant_suite'] . " " . $rows['propiedad.Artefacto'] . " " .
        $rows['propiedad.Espacio'] . " " . $rows['ubicacion.Pais'] . " " . $rows['ubicacion.Provincia'] . " " .
        $rows['ubicacion.Localidad'] . " " . $rows['ubicacion.Direccion'] . " " . $rows['ubicacion.Zona'] . " " . 
        $rows['ubicacion.Piso'];
    }
?>