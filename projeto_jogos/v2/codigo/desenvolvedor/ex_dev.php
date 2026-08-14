<?php
require_once "../conexao.php";

$id_desenvolvedor = $_GET['id_desenvolvedor'];

$sql = "DELETE FROM desenvolvedor WHERE id_desenvolvedor = '$id_desenvolvedor'";

mysqli_query($conexao, $sql);

header("Location: list_dev.php");
exit;
