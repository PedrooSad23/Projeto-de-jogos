<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/   style.css">
</head>

<body>
    <h3>Cadastro de Aluno</h3>

    <form action="salvar_cliente.php" method="GET">

        Nome: <br>
        <input type="text" name="nome">
        <br>

        Data de Nascimento: <br>
        <input type="date" name="data_nascimento">
        <br>

        Email: <br>
        <input type="text" name="email">
        <br>

        Turma: <br>
        <input type="text" name="turma">
        <br>

        <input type="submit" value="Cadastrar">

    </form>

    <br>

    <a href="../index.php">Menu</a>

</body>

</html>