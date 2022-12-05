<?php
    require('./data_base.php');
?>

<?php
    $data = $_POST['trip-start'];

    $sql = 0;

    if(!empty($data)){
        try{
            $sql = "SELECT Estado, Fecha, Hora, Titulo FROM evento";
    
            $result = mysqli_query($conn, $sql);
        } catch (mysqli_sql_exception $e) { 
            var_dump($e);
            exit; 
        }
    }

    include("./agenda.php");
?>