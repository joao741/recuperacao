<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        include_once("../conn.php");

        $nome = $_REQUEST['nome'];
        $valorunitario = $_REQUEST['valorunitario'];
        $descrição = $_REQUEST['descrição'];
        $qtdemestoque = $_REQUEST['qtdemestoque'];
        $categoria = $_REQUEST['categoria'];

        $sql = "INSERT INTO produtos (nome, valorunitario, descrição, qtdemestoque, categoria) VALUES ('$nome', '$valorunitario', ' $descrição', '$qtdemestoque', '$categoria')";

        if ($conn->query($sql) == TRUE)
        {
            echo "<p>Cadastro realizado.</p>";
        }
        else
        {
            echo "<p>Erro.</p>";
        }

        $conn->close();


    ?>

 <a href="../../../index.php">Voltar ao início</a>
    
</body>
</html>