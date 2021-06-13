<?php

    session_start ();

    if (isset ($_SESSION["codCliente"])) {
        $cliente = $_SESSION["cliente"];
        $codigo = $_SESSION["codCliente"];
    }

    if (isset ($_GET["cod"])) {
       
        switch ($_GET["cod"]) {
            case 200: echo "<script>alert ('Usuário criado com sucesso!');</script>"; break;
            case 401: echo "<script>alert ('Informações de credenciais inválidas!');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="utf-8" />
        <title>Cine World</title>
	    <link rel="shortcut icon" href="../../assets/images/icons/logo_icone.svg" type="image/svg" />

        <meta name="description" content="Home do Cine Wolrd, o mundo do cinema como você nunca viu e na sua mão" />
        <meta name="keywords" content="filme livro série " />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../styles/estilos.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
        <!-- Inserção do Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
     <!-- Inclusão de fontes -->
        <!-- Lora -->
        <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">

    </head>

        <div class="container-fluid px-0">
            <header>
                <div id="cabecalho">
                    <div id="menu_superior_esquerda">
                        <a href="home.php">
                            <img src="../../assets/images/icons/logo_icone.svg" type="image/svg" alt="Logotipo" />
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
                    <p>Só para verdadeiros colecionadores!</p>
                    
                    <div id="carousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div id="op_box" style="position: relative;">
                                    <img src="../../assets/images/products/filmes/12.jpg" type="image/jpg" alt="Piratas do caribe - A Maldição do Pérola Negra">
                                    <div class="back_image">
                                        <div class="conteudo_image">
                                            <a target="new" href="produtos/detalhe.php?cod=12">Mais Detalhes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-none d-md-block">
                                    <br />
                                    <h5>Piratas do caribe - A Maldição do Pérola Negra</h5>
                                    <p>Se junte nessa aventura com o pirata mais amado dos sete mares!</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div id="op_box" style="position: relative;">
                                    <img src="../../assets/images/products/filmes/13.jpg" type="image/jpg" alt="Piratas do caribe - A Maldição do Pérola Negra">
                                    <div class="back_image">
                                        <div class="conteudo_image">
                                            <a target="new" href="produtos/detalhe.php?cod=13">Mais Detalhes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-none d-md-block">
                                    <br />
                                    <h5>Harry Potter e o Prisioneiro de Askaban</h5>
                                    <p>O nosso ano favorito em Hogwarts!</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div id="op_box" style="position: relative;">
                                    <img src="../../assets/images/products/séries/32.jpg" type="image/jpg" alt="Decorativo rei">
                                    <div class="back_image">
                                        <div class="conteudo_image">
                                            <a target="new" href="produtos/detalhe.php?cod=32">Mais Detalhes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-none d-md-block">
                                    <br />
                                    <h5>Game Of Thrones (8ª temporada)</h5>
                                    <p>Veja como termina a série mais aclamada e assistida de todos os tempos!</p>
                                </div> 
                            </div>

                            <div class="carousel-item">
                                <div id="op_box" style="position: relative;">
                                    <img src="../../assets/images/products/livros/21.jpg" type="image/jpg" alt="Chaveiro rei">
                                    <div class="back_image">
                                        <div class="conteudo_image">
                                            <a target="new" href="produtos/detalhe.php?cod=21">Mais Detalhes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-none d-md-block">
                                    <br />
                                    <h5>It - A Coisa</h5>
                                    <p>Aprecie uma das histórias mais bizarras e aterrorizantes do grande Stephen King</p>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>  
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            
                        </div>
                    </div>
                </div>
            </main>

            <footer>
                <div id="rodape" class="home_rodape">
                    <div id="conteudo_rodape">
                        <div id="p_col">
                              <ul>


                            </ul>
                        </div>
                        <div id="s_col">
                            <ul>
                               <li><a href="produtos/produtos.php?cod=1">Filmes</a></li>
                                <li><a href="produtos/produtos.php?cod=2">Livros</a></li>
                                <li><a href="produtos/produtos.php?cod=3">Séries</a></li>
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