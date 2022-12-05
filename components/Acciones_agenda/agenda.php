<?php
    require('../data_base.php');
?>

<?php
    if(empty($_POST['date_name'])){
        try{
            $sql = "SELECT Estado, Fecha, Hora, Titulo FROM evento";

            $result = mysqli_query($conn, $sql);

        } catch (mysqli_sql_exception $e) { 
            var_dump($e);
            exit; 
        }
    }else{
        try{
            $date = $_POST['date_name'];
            $sql = "SELECT Estado, Fecha, Hora, Titulo 
                    FROM evento
                    WHERE Fecha = $date";

            $result = mysqli_query($conn, $sql);

        } catch (mysqli_sql_exception $e) { 
            var_dump($e);
            exit; 
        }
    }
    

    while($row = mysqli_fetch_assoc($result)){
        echo"<div class='texto'>";
            echo "<div class='' style='width: 100%;'>";
    
            echo "<button class='btn btnDropDawnAgenda' type='button' data-bs-toggle='dropdown' aria-expanded='false' style='width: 100%;'>";
            echo "<div class='container-fluid'>";
            echo "<div class='row'>";
            echo "<div class='col-5' >";
            echo "<p>".$row['Titulo']."</p>";
            echo "</div>";
            echo "<div class='col-6' >";
            echo "<p>especificacion (actividad)</p>";
            echo "</div>";
            echo "<div class='col-1' style='width:20px, padding-top: 3px;'>";
            echo "<img class='imgFlecha' src='https://cdn.pixabay.com/photo/2012/04/24/13/58/arrow-40168_960_720.png'>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</button>";
    
    
            echo "<ul class='dropdown-menu dropdawnmenu'>";
            echo "<li style='padding-bottom:30px'>";
            echo "<div class='container-fluid' style='text-align:center;'>";
            echo "<div class='row' style='width: 100%'>";
            echo "<div class='col'>Fecha</div>";
            echo "<div class='col'>Hora</div>";
            echo "<div class='col'>Agente</div>";
            echo "<div class='col'>Propiedad</div>";
            echo "<div class='col'>Estado</div>";
            echo "</div>";
            echo "</div>"; 
            echo "</li>";
    
    
            echo "<li style='padding-bottom:30px'>";
            echo "<div class='container-fluid' style='text-align:center;'>";
            echo "<div class='row' style='width: 100%;'>";
            echo "<div class='col'>".$row['Fecha']."</div>";
            echo "<div class='col'>".$row['Hora']."</div>";
            echo "<div class='col'>Agente</div>";
            echo "<div class='col'>Propiedad</div>";
            echo "<div class='col'>".$row['Estado']."</div>";
            echo "</div>";
            echo "</div>";
            echo "</li>";
    
            echo "<li style='padding-bottom:10px'>";
            echo "<div class='container-fluid' style='text-align:center;'>";
            echo "<div class='row' style='width: 100%;'>";
            echo "<div class='col-6'></div>";
            //puedo enviar un get y simular una ventana emergente, para editar los datos.
            //al aceptar la ventana, se realiza la consulta, envia un alert que ya se actualizo correctamente y volver a este link.
            echo "<div class='col-3'><button class='btn'><a href=''>EDITAR</a></button></div>";
            
            echo "<div class='col-3'><button class='btn'><a href=''>ELIMINAR</a></button></div>";//elimina y da un alert();
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</li>";
            echo "</ul>";
            echo "</div>";
            echo "</div>";
    }


?>



            