<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Jogo</h1>
    <form action="salvar_jogo.php">
    
     Nome do Jogo: <br>
    <input type="text" name="nome" > <br>

    Descrição: <br>
    <input type="text" name="descricao"><br>

    Preço do Jogo: <br> 
    <input type="text" name="preco"><br>

    Genêro do Jogo: <br>
    <input type="text" name="genero"><br>

    Foto do Jogo: <br>
    <input type="file" name="foto"><br>

    Desenvolvedor: <br>
    <select name="id_desenvolvedor">
            <?php
            require_once "../conexao.php";

            $sql = "SELECT * FROM desenvolvedor";
            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id_desenvolvedor = $linha ['id_desenvolvedor'];
                $nome = $linha['nome'];

                echo "<option value='$id_desenvolvedor'>$nome</option>";
            }
            ?>

    </select>
    <input type="submit" value="Cadastrar">
    </form>

</body>
</html>