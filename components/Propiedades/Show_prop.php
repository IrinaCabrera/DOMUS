<?php 
    include('./data_base.php');
?>

<?php
   /* $sql = "SELECT propiedad.Esta_disponible, propiedad.Antiguedad, propiedad.Precio,
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
    }*/
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
    echo "Código <br>";
    echo "Tipo<br>";
    echo "Ubicacion<br>";
    echo "Baño - Dormitorio - Suites <br>";
    echo "Antiguedad <br>";
    echo "Espacios con cuenta <br>";
    echo "Artefactos con cuenta <br>";
    echo "Servicios adheridos Luz, Agua, Internet <br>";
    echo "Servicios adheridos Luz, Agua, Internet <br>";
    echo "Artefactos con Cuenta <hr> Precio";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
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
    echo "Código <br>";
    echo "Tipo<br>";
    echo "Ubicacion<br>";
    echo "Baño - Dormitorio - Suites <br>";
    echo "Antiguedad <br>";
    echo "Espacios con cuenta <br>";
    echo "Artefactos con cuenta <br>";
    echo "Servicios adheridos Luz, Agua, Internet <br>";
    echo "Servicios adheridos Luz, Agua, Internet <br>";
    echo "Artefactos con Cuenta <hr> Precio";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
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
    echo "Código <br>";
    echo "Tipo<br>";
    echo "Ubicacion<br>";
    echo "Baño - Dormitorio - Suites <br>";
    echo "Antiguedad <br>";
    echo "Espacios con cuenta <br>";
    echo "Artefactos con cuenta <br>";
    echo "Servicios adheridos Luz, Agua, Internet <br>";
    echo "Servicios adheridos Luz, Agua, Internet <br>";
    echo "Artefactos con Cuenta <hr> Precio";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
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
    echo "Código <br>";
    echo "Tipo<br>";
    echo "Ubicacion<br>";
    echo "Baño - Dormitorio - Suites <br>";
    echo "Antiguedad <br>";
    echo "Espacios con cuenta <br>";
    echo "Artefactos con cuenta <br>";
    echo "Servicios adheridos Luz, Agua, Internet <br>";
    echo "Servicios adheridos Luz, Agua, Internet <br>";
    echo "Artefactos con Cuenta <hr> Precio";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";


    /*
<div class="col-xl-3 col-lg-4 col-md-6 mb-4 ">
                    <div class="bg-white rounded shadow-sm"><img src="https://media.istockphoto.com/id/1269776313/es/foto/casa-suburbana.jpg?s=612x612&w=0&k=20&c=yOBiwMIAZFThHgU21NMXLwKBnd2k64AF7zb7EyKrFXA=" alt="" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> tituloPropiedad</h5>
                            <p class="small text-muted mb-0">descripcionPropiedad</p>
                            <p class="small  mb-0">disponible</p>
                        </div>
                        <button style="margin-bottom:6%;margin-left:6%;" class="btn btn-primary btnGeneral" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Mas info
                        </button>
                        </p>
                        <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            Código <br>
                            Tipo<br>
                            Ubicacion<br>
                            Baño - Dormitorio - Suites <br>
                            Antiguedad <br>
                            Espacios con cuenta <br>
                            Artefactos con cuenta <br>
                            Servicios adheridos Luz, Agua, Internet <br>
                            Artefactos con Cuenta <hr> Precio
                        </div> 
                        </div>
                    </div>
                </div>
    */
?>