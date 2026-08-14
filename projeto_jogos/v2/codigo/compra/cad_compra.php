<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Cadastro de Compra</h3>

    <form action="salvar_compra.php" method="GET">

        Forma de Pagamento: <br> 
        <select name="forma_pagamento" required>
            <option value="pix">Pix</option>
            <option value="dinheiro">Dinheiro</option>
            <option value="crédito">Cartão de Credito</option>
            <option value="débito">Cartão de Débito</option>
        </select>
        <br>

        Cliente: <br>
        <select name="id_cliente">
            <?php
            require_once "../conexao.php";

            $sql = "SELECT * FROM cliente";
            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id_cliente = $linha['id_cliente'];
                $nome = $linha['nome'];

                echo "<option value='$id_cliente'>$nome</option>";
            }
            ?>
        </select> <br>

        Jogo: <br>
        <select name="id_jogo">
            <?php
            require_once "../conexao.php";

            $sql = "SELECT * FROM jogo";
            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id_jogo = $linha['id_jogo'];
                $nome = $linha['nome'];

                echo "<option value='$id_jogo'>$nome</option>";
            }
            ?>
        </select> <br>

        <input type="submit" value="Cadastrar">

    </form>

    <br>

    <a href="../index.php">Menu</a>

</body>

</html>