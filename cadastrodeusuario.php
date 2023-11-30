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

     <h2>Cadastre-se já</h2><br><br>

     <form action="assets/db/cadastro/insert.php" method="POST">
        <label for="nome">Nome do Produto</label><br><br>
        <input type="text" name="nome"><br><br>
        <label for="valorunitario">E-mail</label><br><br>
        <input type="valorunitario" name="valorunitario"><br><br>
        <label for="descrição">Descrição</label><br><br>
        <input type="descrição" name="descrição" minlength="3"><br><br>
        <label for="qtdemestoque">Quantidade em Estoque</label><br><br>
        <input type="text" name="qtdemestoque"><br><br>
        <label for="categoria">Categoria</label><br><br>
        <input type="text" name="categoria"><br><br>
        <input type="submit" value="Enviar"><br><br>

    </form>

    <?php
    ?>
</body>
</html>