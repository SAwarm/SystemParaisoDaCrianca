<?php 

$hostname = "localhost";
$usuario = "root";
$senha = "";
$bd = "bd";

$mysqli = new mysqli ($hostname, $usuario, $senha, $bd);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (". $mysqli->connect_errno .")" .$mysqli->connect_error; 
};
?>

