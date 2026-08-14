<?php 

require_once "../conexao.php";

$nome = $_GET['nome'];
$descricao = $_GET['descricao'];
$preco = $_GET['preco'];
$genero = $_GET['genero'];
$foto = $_GET['foto'];

$sql = "INSERT INTO jogo (nome, descricao, preco, genero, foto) VALUES('$nome', '$descricao', '$preco', '$genero', '$foto');";

mysqli_query($conexao, $sql);

header("Location:cad_jogo.php");
?>

<br><br>

<a href="../index.php">Início</a> <br><br>