<?php
session_start();

if (isset($_SESSION['id_cli'])) {
    echo " <script src='View/js/usuarioLogado.js'>

</script>
";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

    <title>Portfolio Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="view/css/style.css" />

    <link href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">
    <title>index</title>
</head>

<body>
    <header>
        <nav>
            <div class="container">
                <div class="logo">
                    <img src="https://logosmarcas.net/wp-content/uploads/2020/04/Apple-Emblema.png" alt="logo">
                </div>

                <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Achar fornecedores">
                    <a href="#" class="search-btn">
                        <img src="view/img/loupe.png" class="loup" alt="Lupa">
                    </a>
                </div>

                <div class="links">
                    <ul>
                        <li>
                            <a href="">home</a>
                        </li>
                        <li>
                            <a href="">plano</a>
                        </li>
                        <li>
                            <a href="View/alterarDadosCli.php">Dados</a>
                        </li>
                        <!-- Lembrete: O Sair/logout vai ficar no lugar do botao Login dinamicamente com o Js quando o usuario estiver logado   -->
                        <li>
                            <a href="controller/logout.php">Sair</a>
                        </li>
                        <li>
                            <a id="loginUsu" href="view/loginCli.php" class="active">Login</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="header-content">
                <div class="container grid-2">
                    <div class="column-1">
                        <h1 class="header-tittle">Ache fornecedores</h1>
                        <p class="text">Lorem ipsum
                            dolor sit amet consectetur adipisicing elit. Totam magni sit
                            hic!
                        </p>

                        <a href="view/cadastrarCli.php" class="btn"> Cadastrar</a>

                    </div>

                    <div class="column-2 image">
                        <img class="img-element" src="view/img/img.jpg" alt="mulher negra">
                    </div>
                </div>
            </div>

        </nav>
    </header>

    <main>

        <section class="services section">
            <div id="container">
                <div class="section-header">
                    <h3 class="title" data-title="What I Do">O que há na Microstart?</h3>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Architecto eligendi, commodi nesciunt, vel officia quam tenetur quae repudiandae ex molestiae rerum consequuntur.
                    </p>

                </div>

                <div class="cards">
                    <div class="card-wrap">
                        <div class="card">
                            <div class="card-content">
                                <img class="icon" src="https://www.des1gnon.com/wp-content/uploads/2020/03/Pexels-Banco-de-Imagens-gratis-Des1gnON.jpg" alt="">
                                <h3 class="tiitle-sm">Web design</h3>
                                <p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia dolor soluta numquam cupiditate ad natus, repellendus blanditiis labore animi eius, in laborum corrupti
                                    nemo a, consequatur vel. Et, dolore sed.</p>
                                <a href="" class="btn small">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrap"></div>
                    <div class="card" data-card="Code">
                        <div id="center" class="card-content  z-index">
                            <img src="View/img/img.jpg" class="icon" alt="" />
                            <h3 class="title-sm">Web Development</h3>
                            <p class="text">
                                >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia dolor soluta numquam cupiditate ad natus, repellendus blanditiis labore animi eius, in laborum corrupti
                                nemo a, consequatur vel. Et, dolore sed
                            </p>
                            <a href="#" class="btn small">Read more</a>
                        </div>
                    </div>
                    <div class="card-wrap">
                        <div class="card" data-card="Code">
                            <div class="card-content z-index">
                                <img src="View/img/img.jpg" class="icon" alt="" />
                                <h3 class="title-sm">Web Development</h3>
                                <p class="text">
                                    >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia dolor soluta numquam cupiditate ad natus, repellendus blanditiis labore animi eius, in laborum corrupti
                                    nemo a, consequatur vel. Et, dolore sed
                                </p>
                                <a href="#" class="btn small">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>

</body>

</html>