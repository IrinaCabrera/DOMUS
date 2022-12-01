<?php
    include("../data_base.php");
?>

<?php
    $cod = $_POST[''];

    if(!empty($_POST[''])){
        $dni_alq = $_POST[''];

        $sql = "UPDATE propiedad SET DNI_alq SET = $dni_alq
                WHERE Cod_propiedd = $cod";

        mysqli_query($conn, $sql);
    }
    if(!empty($_POST[''])){
        $dni_prop = $_POST[''];

        $sql = "UPDATE propiedad SET DNI_propietario SET = $dni_prop
                WHERE Cod_propiedd = $cod";

        mysqli_query($conn, $sql);
    }
    if(!empty($_POST[''])){
        $esta_disponible = $_POST[''];

        $sql = "UPDATE propiedad SET Esta_disponible SET = $esta_disponible
                WHERE Cod_propiedd = $cod";

        mysqli_query($conn, $sql);
    }
    if(!empty($_POST[''])){
        $nombre = $_POST[''];

        $sql = "UPDATE propiedad SET Nombre SET = $nombre
                WHERE Cod_propiedd = $cod";

        mysqli_query($conn, $sql);
    }
    if(!empty($_POST[''])){
        $descripcion = $_POST[''];

        $sql = "UPDATE propiedad SET Descripcion SET = $descripcion
                WHERE Cod_propiedd = $cod";

        mysqli_query($conn, $sql);
    }
    if(!empty($_POST[''])){
        $precio = $_POST[''];

        $sql = "UPDATE propiedad SET Precio SET = $precio
                WHERE Cod_propiedd = $cod";

        mysqli_query($conn, $sql);
    }
    if(!empty($_POST[''])){
        $tipo = $_POST[''];

        $sql = "UPDATE propiedad SET Tipo SET = $tipo
                WHERE Cod_propiedd = $cod";

        mysqli_query($conn, $sql);
    }
    if(!empty($_POST[''])){
        $cant_bano = $_POST[''];

        $sql = "UPDATE propiedad SET Cant_baño SET = $cant_bano
                WHERE Cod_propiedd = $cod";

        mysqli_query($conn, $sql);
    }
    if(!empty($_POST[''])){
        $cant_suite = $_POST[''];

        $sql = "UPDATE propiedad SET Cant_suite SET = $cant_suite
                WHERE Cod_propiedd = $cod";

        mysqli_query($conn, $sql);
    }
    if(!empty($_POST[''])){
        $cant_dorm = $_POST[''];

        $sql = "UPDATE propiedad SET Cant_dormitorio SET = $cant_dorm
                WHERE Cod_propiedd = $cod";

        mysqli_query($conn, $sql);
    }
    if(!empty($_POST[''])){
        $tipo_con = $_POST[''];

        $sql = "UPDATE propiedad SET Tipo_contrato SET = $tipo_con
                WHERE Cod_propiedd = $cod";

        mysqli_query($conn, $sql);
    }
    if(!empty($_POST[''])){
        $art = $_POST[''];

        $sql = "UPDATE propiedad SET Artefacto SET = $art
                WHERE Cod_propiedd = $cod";

        mysqli_query($conn, $sql);
    }
    if(!empty($_POST[''])){
        $espacio = $_POST[''];

        $sql = "UPDATE propiedad SET Espacio SET = $espacio
                WHERE Cod_propiedd = $cod";

        mysqli_query($conn, $sql);
    }
?>