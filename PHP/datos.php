<?php
// Llamamos a la conexión de la base de datos
include "conexionBD.php";

//Creacion de las variables que reciben los datos del formulario
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$ciudad = $_POST['ciudad'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

echo $nombres;
echo $apellidos;
echo $edad;
echo $genero;
echo $ciudad;
echo $login;
echo $email;
echo $password;
?>