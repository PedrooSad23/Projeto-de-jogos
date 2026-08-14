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
            <td>Nome</td>
            <td>Email</td>
            <td>Senha</td>
            <td>Data de Criação</td>
            <td>Ação</td>
        </tr>

        <?php
        require_once "../conexao.php";

        $sql = "SELECT * FROM desenvolvedor";

        $resultados = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            $id_desenvolvedor = $linha['id_desenvolvedor'];
            $nome = $linha['nome'];
            $email = $linha['email'];
            $senha = $linha['senha'];
            $data_criacao = $linha['data_criacao'];

            echo "<tr>";
            echo "<td>$id_desenvolvedor</td>";
            echo "<td>$nome</td>";
            echo "<td>$email</td>";
            echo "<td>$senha</td>";
            echo "<td>$data_criacao</td>";
            echo "<td><a href='ex_dev.php?id_desenvolvedor=$id_desenvolvedor'><img class='lixo' src='../imagens/lixeira.png'></a></td>";
            echo "</tr>";
        }


        ?>
    </table>

<br>

<a href="../index.php">Menu</a>
</body>

</html>