<?php

    $codCliente = $_POST["cliente"];
    $sessao = $_POST["sessao"];

    $conexao = new mysqli ("localhost", "root", "", "cineworld");

    $sql = "DELETE FROM carrinho
    WHERE sessionID LIKE '%$sessao%' AND codigoCliente=$codCliente;";

    $conexao->query ($sql);
    $conexao->close ();

    return true;
?>