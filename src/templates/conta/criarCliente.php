<?php

    require ('../../classes/cliente.php');

    $cliente = new Cliente ($_POST["nome"], $_POST["email"], $_POST["senha"], $_POST["fone"]);
    
    try {
        
        $conexao = new mysqli ("localhost", "root", "", "cineworld");
        $sql = "INSERT INTO cliente(nome, email, senha, telefone) VALUES ('" . $cliente->getNome () . "','" . $cliente->getEmail () . "','" . $cliente->getSenha() . "','" . $cliente->getFone () . "');";

        $conexao->query($sql);

        $conexao->close ();
        header ('location: ../home.php?cod=200');
    }
    catch (Exception $e) {
        echo $e->getMessage ();
    }
?>