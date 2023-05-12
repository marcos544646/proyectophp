<?php

include("conexion.php");

$sql = "INSERT INTO usuarios (Nombre, apellido, edad) VALUES (´migue´ , ´romero´ , ´21´)";

$res = $conexion->query($sql);

if($res){
    echo "insercion exitosa";
}else{
    echo "Fallo la insercion"
}

?>