<?php
    require("../data_base.php");
?>

<?php
    $asunto = $_POST['Asunto'];
    /*if(!empty($_POST['dni_solicitud'])){
        $dni = $_POST['dni_solicitud'];
    }else{
        $dni = 0;
    }*/
    $dni = 0;
    $name = $_POST['FirstName'];
    $phone = $_POST['Phone'];
    $mail = $_POST['Email'];
    $hour = date("h:i:sa");
    $date = date("Y-m-d");


    $sql = "INSERT INTO solicitud(id, Asunto, DNI_cliente, Nombre_cl, Telefono, Email, Hora, Fecha) 
            VALUE(NULL, $asunto, $dni, $name, $phone, $mail, $hour, $date)";
    
    mysqli_query($conn, $sql);
    
    header("Location : http://localhost/DOMUS/components/index.php");
?>