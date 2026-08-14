<?php 

require_once "../conexao.php";

$forma_pagamento = $_GET['forma_pagamento'];
$id_cliente = $_GET['id_cliente'];
$id_jogo = $_GET['id_jogo'];

$sql = "INSERT INTO compra (forma_pagamento, id_cliente, id_jogo)VALUES ('$forma_pagamento', '$id_cliente', '$id_jogo');";

mysqli_query($conexao, $sql);

header("Location:cad_compra.php")
?>

<br><br>

<a href="../index.php">Início</a> <br><br>