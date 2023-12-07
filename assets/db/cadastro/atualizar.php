<!DOCTYPE html>
<html>
<head>
    <title>Atualizar Dados do Produto por ID</title>
</head>
<body>
    <h2>Atualizar Dados do Produto por ID</h2>
    
    <?php
    // Verificar se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "produtos";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            // Configurar para lançar exceções em caso de erros
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Verificar se os campos do formulário foram enviados
            if (isset($_POST['idproduto']) && isset($_POST['nome']) && isset($_POST['valorunitario']) &&
                isset($_POST['descricao']) && isset($_POST['qtdemestoque']) && isset($_POST['categoria'])) {
                
                $idProduto = $_POST['idproduto'];
                $nome = $_POST['nome'];
                $valorUnitario = $_POST['valorunitario'];
                $descricao = $_POST['descricao'];
                $quantidadeEstoque = $_POST['qtdemestoque'];
                $categoria = $_POST['categoria'];

                // Preparar e executar a consulta SQL de atualização para um produto específico
                $sql = "UPDATE produtos SET nome=:nome, valorunitario=:valorunitario, descrição=:descricao, qtdemestoque=:qtdemestoque, categoria=:categoria WHERE idproduto=:id";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':valorunitario', $valorUnitario);
                $stmt->bindParam(':descricao', $descricao);
                $stmt->bindParam(':qtdemestoque', $quantidadeEstoque);
                $stmt->bindParam(':categoria', $categoria);
                $stmt->bindParam(':id', $idProduto);
                $stmt->execute();

                // Verificar se a atualização foi bem-sucedida
                $rowsAffected = $stmt->rowCount();
                if ($rowsAffected > 0) {
                    echo "<p>Dados do Produto ID $idProduto atualizados com sucesso!</p>";
                } else {
                    echo "<p>Nenhum registro foi atualizado para o Produto ID $idProduto.</p>";
                }
            }
        } catch(PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
        $conn = null; // Fechar a conexão
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="idproduto">ID do Produto:</label><br>
        <input type="text" id="idproduto" name="idproduto"><br><br>

        <label for="nome">Novo Nome:</label><br>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="valorunitario">Novo Valor Unitário:</label><br>
        <input type="text" id="valorunitario" name="valorunitario"><br><br>

        <label for="descricao">Nova Descrição:</label><br>
        <input type="text" id="descricao" name="descricao"><br><br>

        <label for="qtdemestoque">Nova Quantidade em Estoque:</label><br>
        <input type="text" id="qtdemestoque" name="qtdemestoque"><br><br>

        <label for="categoria">Nova Categoria:</label><br>
        <input type="text" id="categoria" name="categoria"><br><br>

        <input type="submit" value="Atualizar Dados do Produto">
    </form>
</body>
</html>