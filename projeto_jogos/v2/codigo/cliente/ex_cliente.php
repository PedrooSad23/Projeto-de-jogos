<?php
require_once "../conexao.php";

$id_cliente = $_GET['id_cliente'];

$sql = "DELETE FROM cliente WHERE id_cliente = '$id_cliente'";

mysqli_query($conexao, $sql);

header("Location: list_cliente.php");
exit;
