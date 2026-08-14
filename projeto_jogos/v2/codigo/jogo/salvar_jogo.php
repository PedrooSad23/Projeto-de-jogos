<?php 

require_once "../conexao.php";

$nome = $_GET['nome'];
$descricao = $_GET['descricao'];
$preco = $_GET['preco'];
$genero = $_GET['genero'];
$foto = $_GET['foto'];
$id_desenvolvedor = $_GET['id_desenvolvedor'];

$sql = "INSERT INTO jogo 
(nome, descricao, preco, genero, foto, id_desenvolvedor) 
VALUES 
('$nome', '$descricao', '$preco', '$genero', '$foto', '$id_desenvolvedor')";

mysqli_query($conexao, $sql);

header("Location: cad_jogo.php");

?>