<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../../js/util.js"></script>
</head>
<body> -->
<?php

        include_once("assets/db/conn.php");

        $sql = "SELECT * FROM produtos";

        $result = $conn->query($sql); //executando a busca no banco de dados e armazenando o retorno na variável result

        if ($result-> num_rows > 0) //se o número de linhas de resultado for maior do que zero
        {
            echo "<table>"; //imprimir a abertura da tabela
            echo "<tr> <th>idprodutos</th> <th>nome</th> <th>valorunitario</th> <th>descrição</th> <th>qtdemestoque</th> <th>categoria</th> </tr>"; //imprimir o cabeçalho da tabela
            
            while ($linha = $result->fetch_assoc()) //pegar a próxima linha de dados
            {
                echo "<tr>"; //abrir a nova linha
                echo "<td>" . $linha["idproduto"] . "</td>";
                echo "<td>" . $linha["nome"] . "</td>";
                echo "<td>" . $linha["valorunitario"] . "</td>";
                echo "<td>" . $linha["descrição"] . "</td>";
                echo "<td>" . $linha["qtdemestoque"] . "</td>";
                echo "<td>" . $linha["categoria"] . "</td>";
                echo "<td> <a href='assets/db/cadastro/select.php?descrição=" . $linha["descrição"] . "'>Detalhes</a> </td>";
                echo "<td> <a href='assets/db/cadastro/delete.php?id=" . $linha["idproduto"] . "' onClick='return confirmar()' >Excluir</a> </td>";
                echo "</tr>"; //fechar a linha
            }    

            echo "</table>"; //fechar a tabela

        }
        else
        {
            echo "<p>Nenhum registro foi encontrado.</p>";
        }

        $conn->close();

?>
    
<!-- </body>
</html> -->