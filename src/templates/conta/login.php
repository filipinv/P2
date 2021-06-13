<?php

    if (isset ($_POST["btnEntrar"])) {

        $email = $_POST["email"];
        $senha =  $_POST["senha"];

        try {
            $conexao = new mysqli ("localhost", "root", "", "cineworld");

            $sql = "SELECT c.senha, c.nome, c.codigo FROM cliente c
            WHERE c.email LIKE '%$email%';";

            $resultado = $conexao->query ($sql);
            $linha = $resultado->fetch_assoc ();

            $senhaBanco = $linha["senha"];
            $nome = $linha["nome"];
            $codigo = $linha["codigo"];

            $conexao->close ();

            if ($senha == $senhaBanco) {

                session_start ();
                
                $_SESSION["cliente"] = $nome;
                $_SESSION["codCliente"] = $codigo;

                header ('location: ../home.php');
            }
            else
                header ("location: ../home.php?cod=401");
        }
        catch (Exception $e) {
            echo $e->getMessage ();
        }
    }
?>