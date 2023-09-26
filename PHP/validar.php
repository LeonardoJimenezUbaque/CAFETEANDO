<?php
$login = $_POST['login'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios
        WHERE login = '$login'
        AND password = '$password'";

?>