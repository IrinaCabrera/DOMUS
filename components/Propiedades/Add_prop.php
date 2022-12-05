<?php
    include("../data_base.php");
?>

<?php
    if(!empty($_POST[''])){
        $dni_alq = $_POST[''];
    }else{
        $dni_alq = NULL;
    }
    $dni_propietario = $_POST[''];
    $esta_disponible = $_POST[''];
    $nombre = $_POST[''];
    $descripcion = $_POST[''];
    $antiguedad = $_POST[''];
    $precio = $_POST[''];
    $tipo = $_POST[''];
    $cant_bano = $_POST[''];
    $cant_suite = $_POST[''];
    $cant_dormitorio = $_POST[''];
    $tipo_contrato = $_POST[''];
    $artefacto = $_POST[''];
    $espacio = $_POST[''];
    
    $sql = "INSERT INTO propiedad (Cod_propiedad,DNI_alq,DNI_propietario,Esta_disponible,Nombre,Descripcion,
            Antiguedad,Precio,Tipo,Cant_baño,Cant_suite,Cant_dormitorio,Tipo_contrato,Artefacto,Espacio)
            VALUE(NULL,$dni_alq,$dni_propietario,$esta_disponible,$nombre,$descripcion,$antiguedad,$precio,$tipo,$cant_bano,
            $cant_suite,$cant_dormitorio,$tipo_contrato,$artefacto,$espacio)";

    mysqli_query($conn, $sql);
?>