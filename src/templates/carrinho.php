<?php

    session_start ();
    $sessID = session_id ();

    if (isset ($_SESSION["codCliente"])) {
        $cliente = $_SESSION["cliente"];
        $codigo = $_SESSION["codCliente"];
    }
    else {
        header ("location: home.php");
        exit ();
    }

    if (isset ($_GET["cod"])) {

        $codProd = $_GET["cod"];
        $qntd = $_GET["qtd"];

        try {
            $conexao = new mysqli ("localhost", "root", "", "cineworld");

            $sql = "SELECT p.valor FROM produto p WHERE p.codigo=$codProd;";

            $resultado = $conexao->query ($sql);
            $linha = $resultado->fetch_assoc ();

            $valUni = $linha["valor"];

            $sql = "INSERT INTO carrinho VALUES ('$sessID', $codigo, $codProd, $qntd, $valUni, $qntd * $valUni);";

            $resultado = $conexao->query ($sql);

            $conexao->close ();
        }
        catch (Exception $e) {
            echo $e->getMessage ();
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="utf-8" />
        <title>Cine World - Carrinho</title>
        <link rel="shortcut icon" href="../../assets/images/icons/logo_icone.svg" type="image/svg" />
        <meta name="description" content="Carrinho de produtos da Cine World" />
        <meta name="keywords" content="filmes funkos séries livro produtos carrinho" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../styles/estilos.css" />
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
        <!-- Inserção do Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <!-- Inclusão de fontes -->
        <!-- Lora -->
        <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
        <?php 
            echo "<script>
                var codCliente = $codigo;
                var sessao = '$sessID';
            </script>";
        ?>
    </head>

    <body id="topo">
        <div class="container-fluid px-0">
            <header>
                <div id="cabecalho">
                    <div id="menu_superior_esquerda">
                        <a href="home.php">
                            <img src="../../assets/images/icons/logo_icone.svg" type="image/svg" alt="Logomarca" />
                            Cine World
                        </a>
                    </div>
                    <div id="menu_superior_direita">
                        <span class="pesquisar_icon">
                            <form method="GET" action="produtos/busca.php">
                                <input name="q" id="pesquisar_input" type="text" placeholder="Busca" style="font-size: 20px; display: inline-table;" />
                            </form>
                            <img src="../../assets/images/icons/search_black_24dp.svg" type="image/svg" alt="Ícone de pesquisa" />
                        </span>
                        <a href="conta/entrar.php">
                            <img src="../../assets/images/icons/account_circle_black_24dp.svg" type="image/svg" alt="Ícone do usuário" />
                            <?php
                                if (isset ($codigo))
                                    echo $cliente;
                                else
                                    echo "Login";
                            ?>
                        </a>
                    </div>
                </div>
                <div id="menu_navegacao">
                    <ul class="nav justify-content-center">
                        <li id="link_home" class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li id="link_produtos" class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link btn dropdown-toggle" href="#" role="button" id="dropdownProdutos" data-bs-toggle="dropdown" aria-expanded="false">Produtos</a>

                                <ul id="lista_produtos" class="dropdown-menu" aria-labelledby="dropdownProdutos">
                                    <li><a class="dropdown-item" href="produtos/produtos.php?cod=1">Filmes</a></li>
                                    <li><a class="dropdown-item" href="produtos/produtos.php?cod=2">Livros</a></li>
                                    <li><a class="dropdown-item" href="produtos/produtos.php?cod=3">Séries</a></li>
                           </ul>
                         </div>
                        </li>
                        <li id="link_carrinho" class="nav-item">
                            <a class="nav-link" href="carrinho.php">Carrinho</a>
                        </li>
                        <li id="link_conta" class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link btn dropdown-toggle" href="#" role="button" id="dropdownConta" data-bs-toggle="dropdown" aria-expanded="false">Conta</a>
                                <ul id="lista_usuario" class="dropdown-menu" aria-labelledby="dropdownConta">
                                <?php 
                                    if (isset ($codigo))
                                        echo "<li><a class='dropdown-item' href='conta/logout.php'>Sair</a></li>";
                                    else
                                        echo "<li><a class='dropdown-item' href='conta/entrar.php'>Entrar</a></li>";

                                ?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>

            <main>
                <div id="conteudo">
                    <div id="lista_itens">
                            <?php 

                                $valorTotal = 0;

                                try {
                                    $conexao = new mysqli ("localhost", "root", "", "cineworld");

                                    $sql = "SELECT p.titulo, c.valorTotal, c.quantidade 
                                    FROM produto p INNER JOIN carrinho c ON c.codigoProduto=p.codigo
                                    WHERE c.sessionID LIKE '%$sessID%' AND c.codigoCliente=$codigo;";

                                    $resultado = $conexao->query ($sql);

                                    if ($resultado->num_rows > 0) {

                                        echo "<table class='table'>
                                            <thead>
                                                <tr>
                                                    <th scope='col'>Produto</th>
                                                    <th scope='col'>Preço</th>
                                                    <th scope='col'>Qto</th>
                                                </tr>
                                            </thead>
                                        <tbody>";

                                        while ($linha = $resultado->fetch_assoc ()) {

                                            $titulo = $linha["titulo"];
                                            $valUni = $linha["valorTotal"];
                                            $qntd = $linha["quantidade"];

                                            $valorTotal += $valUni;

                                            echo " <tr scope='row'>
                                                        <td>$titulo</td>
                                                        <td>R$ $valUni</td>
                                                        <td>$qntd</td>
                                                    </tr>
                                            ";
                                        }
                                        echo "</tbody>
                                        </table>";
                                    }
                                    else
                                        echo "<p>Nenhum produto no carrinho!</p>";
                                }
                                catch (Exception $e) {
                                    echo $e->getMessage ();
                                }
                            ?>
                    </div>
                    <div id="preco_total">
                        <div class="card">
                            <div class="card-header" style="background-color: #81b3ac;">
                                Compra 
                            </div>
                            <div class="card-body"> 
                                <p class="card-text" style="background-color: ##81b3ac;">Preço Total: R$ <?php echo $valorTotal; ?></p>
                                <button onclick="limpar(sessao, codCliente);" class="btn" style="background-color: red;">Limpar</button>
                                <a href="#" class="btn" style="background-color: yellow;">Finalizar</a>
                            </div>
                        </div>
                    </div>
            </main>

            <footer>
		        <div id="rodape" class="home_rodape">
                    <div id="conteudo_rodape">
                        <div id="p_col">
                              <ul></ul>
                        </div>
                        <div id="s_col">
                            <ul>
                               <li><a href="home.php">Home</a></li>
                                <li><a href="conta/entrar.php">Conta</a></li>
                                <li><a href="produtos/produtos.php?cod=2">Livros</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>

</html>

<script lang="javascript">
    

    $("#link_produtos").mouseenter( function () {
        $("#lista_produtos").toggle();
    });

    $("#link_produtos").mouseleave ( function () {
        $("#lista_produtos").toggle();
    });

    $("#link_conta").mouseenter ( function () {
        $("#lista_usuario").toggle();
    })

    $("#link_conta").mouseleave ( function () {
        $("#lista_usuario").toggle();
    })

    $(document).ready( function () {

        var busca = document.getElementById("pesquisar_input");
        busca.value = "";

        var largura_atual = $(window).width();

        if (largura_atual < 576) {
            $("#pesquisar_input").attr("size","2.5");
            return false;
        }

        if ((largura_atual >= 576 && largura_atual < 768)) {
            $("#pesquisar_input").attr("size","5");
            return false;
        }

        if ((largura_atual >= 768 && largura_atual < 992)) {
            $("#pesquisar_input").attr("size","7.5");
            return false;
        }

        if ((largura_atual >= 992 && largura_atual < 1200)) {
            $("#pesquisar_input").attr("size","10");
            return false;
        }

        if((largura_atual >= 1200)) {
            $("#pesquisar_input").attr("size","12.5");
            return false;
        }
    })

    $(window).on("resize", function () {

        $("#pesquisar_input").fadeOut(100);
        
        var largura_atual = $(window).width();

        if (largura_atual < 576) {
            $("#pesquisar_input").attr("size","2.5");
            return false;
        }

        if ((largura_atual >= 576 && largura_atual < 768)) {
            $("#pesquisar_input").attr("size","5");
            return false;
        }

        if ((largura_atual >= 768 && largura_atual < 992)) {
            $("#pesquisar_input").attr("size","7.5");
            return false;
        }

        if ((largura_atual >= 992 && largura_atual < 1200)) {
            $("#pesquisar_input").attr("size","10");
            return false;
        }

        if((largura_atual >= 1200)) {
            $("#pesquisar_input").attr("size","12.5");
            return false;
        }

    })

    $(".pesquisar_icon").click ( function () {
            var busca = document.getElementById("pesquisar_input");
            busca.value = "";
            $("#pesquisar_input").fadeIn(100);
            $("#pesquisar_input").focus();
    })

    $(document).on("click", function (event) {
        if(!$(event.target).closest(".pesquisar_icon").length) {
            $("#pesquisar_input").fadeOut(100);
            var busca = document.getElementById("pesquisar_input");
            busca.value = "";
        }
    })
</script>

<script lang="javascript">

    function pesquisar () {
        var busca = document.getElementById("pesquisar_input");

        alert(busca.value);
    }
</script>

<script lang="javascript">
    function limpar(sessao, cliente) {
        $.ajax ({
            method: "POST",
            url: "limpar.php",
            data: {
                cliente: cliente,
                sessao: sessao
            },
            async: false
        }).done (function (res) {
            window.location.href = window.location.href.split("?")[0];
        })
    }
</script>

<?php 
    $conexao->close ();
?>