<?php

$nome = $_GET['nome'];
$usuario = $_GET['usuario'];
$senha = $_GET['senha'];

$sql = "INSERT INTO cliente (nome, usuario , senha) VALUES ('$nome', '$usuario', '$senha')";

require_once "../conexao.php";
mysqli_query($conexao, $sql);



header("location:cad_cliente.php");


?>