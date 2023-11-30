<?php

    if ( isset($_REQUEST["email"]) && isset($_REQUEST["senha"]))
    {
        include_once("assets/db/conn.php");

        $email = $_REQUEST["email"];
        $senha = md5($_REQUEST["senha"]);
    
        $sql = "SELECT * FROM produtos WHERE email = '$email' AND senha = '$senha'";
        
        $result = $conn->query($sql); //executando a busca no banco de dados e armazenando o retorno na variável result
    
        if ($result-> num_rows > 0) //se o número de linhas de resultado for maior do que zero
        {
          
            $linha = $result->fetch_assoc(); //pegar a próxima linha de dados

            //iniciar uma sessão
            session_start();
             $_SESSION["nome"] = $linha["nomecompleto"];
            header('Location: arearestrita.php');
    
        }
        else
        {
            echo "<p>Usuário ou senha inválido.</p>";
        }
    
        $conn->close();
    }
   

?>