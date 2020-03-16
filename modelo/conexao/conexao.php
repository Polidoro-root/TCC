<?php

$servidor = "127.0.0.1"; //localhost
$usuario = "root";
$senha = "";
$database = "TCC";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database) or die(mysqli_error());
?>