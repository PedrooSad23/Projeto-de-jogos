<?php
//pegar as variáveis
$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];

$sql = "INSERT INTO desenvolvedor (nome , email, senha) VALUES ('$nome', '$email', '$senha')";

require_once "../conexao.php";
mysqli_query($conexao, $sql);



header("location:cad_dev.php");


?>