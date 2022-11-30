<?php
    include('./header.php');
    require('./data_base.php');
?>

<?php
    try{
        $sql = "SELECT Estado, Fecha, Hora, Título FROM evento";

        $result = mysqli_query($conn, $sql);
    } catch (mysqli_sql_exception $e) { 
        var_dump($e);
        exit; 
    }

    while($row = mysqli_fetch_assoc($result)){
        echo $row['Estado']," ", $row['Fecha']," ",$row['Hora']," ",$row['Título'];
        echo "<br>";
    }
?>