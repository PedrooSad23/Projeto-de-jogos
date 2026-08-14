<?php
require_once "../conexao.php";

$id_compra = $_GET['id_compra'];

$sql = "DELETE FROM compra WHERE id_compra = '$id_compra'";

mysqli_query($conexao, $sql);

header("Location: list_compra.php");
exit;
