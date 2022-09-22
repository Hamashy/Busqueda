<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>

    <form action="" method="get">
        <input type="text" name="busqueda" id="">
        <input type="submit" name="enviar" value="Buscar">
    </form>
    <br><br><br>

    <?php

    if (isset($_GET['enviar'])) {
        $busqueda = $_GET['busqueda'];

        $consulta = $con->query("SELECT * FROM badges WHERE porque LIKE '%$busqueda%'");

        while ($row = $consulta->fetch_array()) {
            echo $row['porque'] . '<br>';
        }
    }

    ?>




</body>

</html>