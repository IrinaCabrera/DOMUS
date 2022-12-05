<?php 
    include('./data_base.php');
?>

<?php
   $sql = "SELECT propiedad.Cod_propiedad, propiedad.Esta_disponible, propiedad.Antiguedad, propiedad.Precio,
                    propiedad.Tipo, propiedad.Cant_baño, propiedad.Cant_dormitorio, propiedad.Cant_suite,
                    propiedad.Artefacto, propiedad.Espacio, ubicacion.Pais, ubicacion.Provincia,
                    ubicacion.Localidad, ubicacion.Direccion, ubicacion.Zona, ubicacion.Piso
            FROM propiedad, ubicacion
            WHERE propiedad.Cod_propiedad = ubicacion.Cod_propiedad AND propiedad.Esta_disponible = 1";

    //hay que ver como mostrar la imagen

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
        $cod = $row['Cod_propiedad'];
        $art = $row['Artefacto'];
        $type = $row['Tipo'];
        $address = $row['Direccion'];
        $bath = $row['Cant_baño'];
        $bed = $row['Cant_dormitorio'];
        $suite = $row['Cant_suite'];
        $antique = $row['Antiguedad'];
        $space = $row['Espacio'];
        $price = $row['Precio'];

        echo "<div class='col-xl-3 col-lg-4 col-md-6 mb-4 '>";
        echo "<div class='bg-white rounded shadow-sm'><img src='https://media.istockphoto.com/id/1269776313/es/foto/casa-suburbana.jpg?s=612x612&w=0&k=20&c=yOBiwMIAZFThHgU21NMXLwKBnd2k64AF7zb7EyKrFXA=' class='img-fluid card-img-top'>";
        echo "<div class='p-4'>";
        echo "<h5> tituloPropiedad</h5>";
        echo "<p class='small text-muted mb-0'>descripcionPropiedad</p>";
        echo "<p class='small  mb-0'>disponible</p>";
        echo "</div>";
        echo "<button style='margin-bottom:6%;margin-left:6%;' class='btn btn-primary btnGeneral' type='button' data-bs-toggle='collapse' data-bs-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample'>Mas info</button>";
        echo "</p>";
        echo "<div class='collapse' id='collapseExample'>";
        echo "<div class='card card-body'>";
        echo "$cod<br>";
        echo "$type<br>";
        echo "$address<br>";
        echo "$bath - $bed - $suite <br>";
        echo "$antique <br>";
        echo "$space con cuenta <br>";
        echo "$art con cuenta <br>";
        echo "Servicios adheridos Luz, Agua, Internet <br>";
        echo "Servicios adheridos Luz, Agua, Internet <br>";
        echo "$art con Cuenta <hr> $price";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
?>