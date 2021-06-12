<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="utf-8" />
        <title>Piratas Do Caribe - A Maldição Do Pérola Negra</title>
        <link rel="shortcut icon" href="../../../../assets/images/icons/logo_icone.svg" type="image/svg" />
        <meta name="description" content="Piratas Do Caribe - A Maldição Do Pérola Negra!" />
        <meta name="keywords" content="filmes loja piratas época disney johnny depp" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../../../styles/estrutura_produtos.css" />
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
        <!-- Inserção do Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <!-- Inclusão de fontes -->
        <!-- Conexão com o google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com"> 
        <!-- Lora -->
        <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    </head>

    <body id="topo">
        <div class="container-fluid px-0">
            <header>
                <div id="cabecalho">
                    <div id="menu_superior_esquerda">
                        <a href="../../home.php">
                            <img src="../../../../assets/images/icons/logo_icone.svg" type="image/svg" alt="Logomarca" />
                            Cine Wolrd
                        </a>
                    </div>
                    <div id="menu_superior_direita">
                        <span class="pesquisar_icon">
                            <form onsubmit="pesquisar ()">
                                <input onsubmit="pesquisar ();" id="pesquisar_input" type="text" placeholder="Busca" style="font-size: 20x; display: inline-table;" />
                            </form>
                            <img src="../../../../assets/images/icons/search_black_24dp.svg" type="image/svg" alt="Ícone de pesquisa" />
                        </span>
                        <a href="../../conta/entrar.php">
                            <img src="../../../../assets/images/icons/account_circle_black_24dp.svg" type="image/svg" alt="Ícone do usuário" />
                            Login
                        </a>
                    </div>
                </div>
                <div id="menu_navegacao">
                    <ul class="nav justify-content-center">
                        <li id="link_home" class="nav-item">
                            <a class="nav-link" href="../../home.php">Home</a>
                        </li>
                        <li id="link_produtos" class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link btn dropdown-toggle" href="#" role="button" id="dropdownProdutos" data-bs-toggle="dropdown" aria-expanded="false">Produtos</a>

                                <ul id="lista_produtos" class="dropdown-menu" aria-labelledby="dropdownProdutos">
                                    <li><a class="dropdown-item" href="../filmes.php">Filmes</a></li>
                                    <li><a class="dropdown-item" href="../livros.php">Livros</a></li>
                                    <li><a class="dropdown-item" href="../séries.php">Séries</a></li>
                                </ul>
                            </div>
                        </li>
                        <li id="link_carrinho" class="nav-item">
                            <a class="nav-link" href="../../carrinho.php">Carrinho</a>
                        </li>
                        <li id="link_conta" class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link btn dropdown-toggle" href="#" role="button" id="dropdownConta" data-bs-toggle="dropdown" aria-expanded="false">Conta</a>
                                <ul id="lista_usuario" class="dropdown-menu" aria-labelledby="dropdownConta">
                                    <li><a class="dropdown-item" href="../../conta/entrar.php">Entrar</a></li>
                                    <li><a class="dropdown-item" href="#">Sair</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>

            <main>
                <div id="conteudo">
                    <p style="text-align: center;"> Piratas Do Caribe - A Maldição Do Pérola Negra</p>
                    <div class="pri_col">
                        <img src="../../../../assets/images/products/filmes/piratas1.jpg" type="image/jpg" alt="Piratas Do Caribe - A Maldição Do Pérola Negra" />
                    </div>
                    <div class="seg_col">
                        <div class="card">
                            <div class="card-header">
                               Detalhes
                            </div>
                            <div class="card-body" style="background-color: #81b3ac;">
                                <h5 class="card-title">Preço: R$ 89,99</h5>
                                <form> 
                                      <label class="form-label" >Frete: Grátis </label><br />
				      <label class="form-label" for="qntdComprar">Quantidade: </label>
				      <input type="number" min="0" max="99" step="1" id="qntdComprar" /> <br />
				    <button type="submit" class="btn mt-3" style="background-color: yellow;">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="ter_col">
                        <table class="table caption-top table-striped table-hover">
                            <caption>Características principais</caption>
                            <tbody>
                                <tr scope="row">
                                    <td>Nome do filme</td>
                                    <td>Piratas Do Caribe - A Maldição Do Pérola Negra</td>
                                </tr>
                                <tr scope="row">
                                    <td>Diretor do filme</td>
                                    <td>gore verbinski</td>
                                </tr>
                                <tr scope="row">
                                    <td>Formato do filme</td>
                                    <td>DVD</td>
                                </tr>
                                <tr scope="row">
                                    <td>Resolução de vídeo</td>
                                    <td>Widescreen</td>
                                </tr>
                                <tr scope="row">
                                    <td>Quantidade de discos</td>
                                    <td>1</td>
                                </tr>
				<tr scope="row">
                                    <td>Marca</td>
                                    <td>Disney</td>
				</tr>
                                <tr scope="row">
                                    <td>Sinopse</td>
                                    <td>O pirata Jack Sparrow tem seu navio saqueado e roubado pelo capitão Barbossa e sua tripulação. Com o navio de Sparrow, Barbossa invade a cidade de Port Royal, levando consigo Elizabeth Swann, filha do governador. Para recuperar sua embarcação, Sparrow recebe a ajuda de Will Turner, um grande amigo de Elizabeth. Eles desbravam os mares em direção à misteriosa Ilha da Morte, tentando impedir que os piratas-esqueleto derramem o sangue de Elizabeth para desfazer a maldição que os assola. </td>
				</tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>

            <footer>
                <div id="rodape">
                    <div id="conteudo_rodape">
                        <div id="p_col">
                            <ul>
                                <li><a href="#topo">Topo</a></li>
                                <li><a href="../../home.php">Home</a></li>
                                <li><a href="../../conta/perfil.php">Conta</a></li>
                                <li><a href="../filmes.html">Filmes</a></li>
                            </ul>
                        </div>
                        <div id="s_col">
                            <ul>
                                <li><a href="../livros.html">Livros</a></li>
                                <li><a href="../séries.html">Séries</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>

</html>

<script lang="javascript">
    
    $(window).scroll(function () {
        
        var scroll = $(window).scrollTop();
        var cabecalhoOffset = $("#menu_navegacao").offset().top;

        if (scroll >= cabecalhoOffset)
            $("#menu_navegacao").css("position","fixed").css("top","0");

        if (cabecalhoOffset <= $("#cabecalho").offset().top)
            $("#menu_navegacao").css("position","relative").css("top","auto");
    });

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