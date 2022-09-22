<?php
$Chost = "localhost:3307";
$Cuser = "root";
$Cpass = "";
$Cdb = "busqueda";

$con = new mysqli($Chost,$Cuser,$Cpass,$Cdb);

if ($con->connect_errno) {
    die("Ha ocurrido un error");
} else{
    echo "conectado";
}


?>