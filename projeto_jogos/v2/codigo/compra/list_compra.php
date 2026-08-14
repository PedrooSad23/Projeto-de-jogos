<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h2>Lista de Clientes</h2>

    <table>
        <tr>
            <td>Id</td>
            <td>Forma de Pagamento</td>
            <td>Data de Compra</td>
            <td>Id do Cliente</td>
            <td>Id do Jogo</td>
            <td>Ação</td>
        </tr>

        <?php
        require_once "../conexao.php";

        $sql = "SELECT * FROM compra";

        $resultados = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            $id_compra = $linha['id_compra'];
            $forma_pagamento = $linha['forma_pagamento'];
            $data_compra = $linha['data_compra'];
            $id_cliente = $linha['id_cliente'];
            $id_jogo = $linha['id_jogo'];

            echo "<tr>";
            echo "<td>$id_compra</td>";
            echo "<td>$forma_pagamento</td>";
            echo "<td>$data_compra</td>";
            echo "<td>$id_cliente</td>";
            echo "<td>$id_jogo</td>";
            echo "<td><a href='ex_compra.php?id_compra=$id_compra'><img class='lixo' src='../imagens/lixeira.png'></a></td>";
            echo "</tr>";
        }


        ?>
    </table>

<br>

<a href="../index.php">Menu</a>
</body>

</html>