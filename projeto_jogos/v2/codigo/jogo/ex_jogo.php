<?php
require_once "../conexao.php";

$id_jogo = $_GET['id_jogo'];

$sql = "DELETE FROM jogo WHERE id_jogo = '$id_jogo'";

mysqli_query($conexao, $sql);

header("Location: list_jogo.php");
exit;
?>