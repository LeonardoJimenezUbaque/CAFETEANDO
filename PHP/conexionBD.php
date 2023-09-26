<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

//Creamos la conexión con los parametros definidosanteriormente
$conexion = mysqli_connect($servername, $username, $password, $dbname);

//Revisamos si la conexión fue exitosa
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
else{
    echo "Conexión exitosa";
}
?>