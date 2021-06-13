<?php

    $para = $_POST["email"];

    $conexao = new mysqli ("localhost", "root", "", "cineworld");

    $sql = "SELECT c.senha FROM cliente c
    WHERE c.email LIKE '%$para%';";

    $resultado = $conexao->query ($sql);

    if ($resultado->num_rows > 0) {

        $linha = $resultado->fetch_assoc ();

        $senha = $linha["senha"];

        $assunto = "Recuperacao de senha";

        $mensagem = "Ola, uma recuperacao de senha associada a conta foi realizada!\n
        Email: $para\n
        Senha: $senha\n";

        $header = "MIME-Version: 1.0\r\n";
        $header .= "from: Cineworld <filipinudi@hotmail.com>";

        mail ($para, $assunto, $mensagem, $header);

        $conexao->close ();

        return true;
    }
?>