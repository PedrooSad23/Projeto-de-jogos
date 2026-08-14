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
            <td>Usuario</td>
            <td>Data de Criação</td>
            <td>Senha</td>
            <td>Descrição</td>
            <td>Preço</td>
            <td>Foto</td>
            <td>Id do Dev</td>
            <td>Ação</td>
        </tr>

        <?php
        require_once "../conexao.php";

        $sql = "SELECT * FROM jogo";

        $resultados = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            $id_jogo = $linha['id_jogo'];
            $nome = $linha['nome'];
            $descricao = $linha['descricao'];
            $data_lancamento = $linha['data_lancamento'];
            $preco = $linha['preco'];
            $genero = $linha['genero'];
            $foto = $linha['foto'];
            $id_desenvolvedor = $linha['id_desenvolvedor'];

            $preco = $linha['preco'];

        echo "<tr>";
        echo "<td>$id_jogo</td>";
        echo "<td>$nome</td>";
        echo "<td>$descricao</td>";
        echo "<td>$data_lancamento</td>";
        echo "<td>$descricao</td>";
        echo "<td>R$ " . number_format($preco, 2, ',', '.') . "</td>";
        echo "<td>$foto</td>";
        echo "<td>$id_desenvolvedor</td>";
        echo "<td><a href='ex_jogo.php?id_jogo=$id_jogo'><img class='lixo' src='../imagens/lixeira.png'></a></td>";
echo "</tr>";
        }


        ?>
    </table>

<br>

<a href="../index.php">Menu</a>
</body>

</html>