<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuario</title>
    <link  rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <?php
    ?>
     <form action="assets/db/cadastro/select.php">
        <h2>Buscar usuário</h2>
        <label>Descrição</label>
        <input type="text" name="nome">
        <input type="submit" value="buscar">

    </form>

    <section>
    <?php

        include_once("assets/db/cadastro/list.php");

    ?>

    <?php
    ?>

    
    </section>
</body>
</html>
   