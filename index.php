<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta name="description" content="">
  <title>MicroStart</title>
  <!--CSS bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="view/css/nicepage.css" media="screen">
  <link rel="stylesheet" href="view/css/Página-Inicial.css" media="screen">
  <!-- JS -->
  <script class="u-script" type="text/javascript" src="view/js/nicepage.js" defer=""></script>
  <!-- Fonts -->
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro:100,200,300,400,500,600,700|Cambay:400,400i,700,700i">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- Ajax -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <!-- JS Javascript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "logo": "images/default-logo.png"
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Página Inicial">
  <meta property="og:type" content="website">
</head>

<body>
<<<<<<< HEAD
<header>
=======
  <header>
>>>>>>> 06a9cd7c860f6e7f24dd13403004e968112b3285
<?php
session_start();
  if(!isset($_SESSION['id'])) {

?>
    <nav class="navbar navbar-expand-dk navbar-light bg-light">
<<<<<<< HEAD
        <a class="navbar-brand" href="index.php">
            <img src="view/img/logoMS.png" width="50" height="50" alt="">
        </a>
=======
        <a class="navbar-brand" href="#">
            <img src="" width="30" height="30" alt="">
          </a>
>>>>>>> 06a9cd7c860f6e7f24dd13403004e968112b3285
        <a class="navbar-brand" href="#">MicroStart</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="view/loginCli.php">Entrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/cadastrarCli.php">Cadastrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/produtos.php">Produtos</a>
            </li>
<<<<<<< HEAD
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Novidades em Breve...</a>
=======
            <!-- Plano empresarial -->
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Novidades em breve...</a>
>>>>>>> 06a9cd7c860f6e7f24dd13403004e968112b3285
            </li>
          </ul>
        </div>
      </nav>
<?php
  }
  else {
?>
  <nav class="navbar navbar-expand-dk navbar-light bg-light">
<<<<<<< HEAD
        <a class="navbar-brand" href="index.php">
            <img src="view/img/logoMS.png" width="50" height="50" alt="">
        </a>
=======
        <a class="navbar-brand" href="#">
            <img src="" width="30" height="30" alt="">
          </a>
>>>>>>> 06a9cd7c860f6e7f24dd13403004e968112b3285
        <a class="navbar-brand" href="#">MicroStart</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
<<<<<<< HEAD
              <a class="nav-link" href="view/alterarDadosCli.php">Usuarios</a>
=======
              <a class="nav-link" href="view/alterarDadosCli.php">Usuario</a>
>>>>>>> 06a9cd7c860f6e7f24dd13403004e968112b3285
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/produtos.php">Produtos</a>
            </li>
            <li class="nav-item">
<<<<<<< HEAD
              <a class="nav-link" href="controller/cadProduto.php">Cadastrar Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="controller/logout.php">Sair</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Novidades em Breve...</a>
=======
              <a class="nav-link" href="controller/logout.php">Sair</a>
            </li>
            <!-- Plano empresarial -->
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Novidades em breve...</a>
>>>>>>> 06a9cd7c860f6e7f24dd13403004e968112b3285
            </li>
          </ul>
        </div>
      </nav>
<?php
  }
?>
  </header>

  <section class="u-clearfix u-palette-1-base u-section-1" id="carousel_e8ba">
    <div class="u-clearfix u-sheet u-valign-middle-xl u-sheet-1">
<<<<<<< HEAD
      <div class="u-expanded-width-xs u-shape u-shape-svg u-text-palette-3-base u-shape-1" >
=======
      <div class="u-expanded-width-xs u-shape u-shape-svg u-text-palette-3-base u-shape-1">
>>>>>>> 06a9cd7c860f6e7f24dd13403004e968112b3285
        <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 140" style="">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1b2f"></use>
        </svg>
        <svg class="u-svg-content" viewBox="0 0 160 140" x="0px" y="0px" id="svg-1b2f">
          <g>
            <g>
              <path d="M138.9,102.2c-9.5,10.1-24.4,20.2-41.2,27.4C63.2,144.5,21,147.1,3.1,112.4c-9.9-19.1,6.5-28.8,11.8-45.7
			c5.3-16.9-11.4-32.3-5.1-49.9c1.8-4.9,4.9-9,8.9-11.9C24,1,30.8-0.8,37.8,0.3C43.6,1.2,49,3.5,54.3,5.7c8.8,3.7,17.4,7.1,26.3,9.8
			c15.7,4.7,31.3,3.7,47.1,7.2c8.5,1.9,16.7,5.6,22.6,11.8C170.3,55.7,155.8,84.1,138.9,102.2z"></path>
            </g>
          </g>
        </svg>
      </div>
<<<<<<< HEAD
      <img src="view/img/Business.png" class="u-align-left u-image u-image-contain u-image-1" data-image-width="2941" data-image-height="1576"  style=" width: 50%; top: 60px; left:150px;">
      <div style=" top: -190px; margin-right: 40px; " class="u-align-left u-container-style u-expanded-width-xs u-group u-palette-1-light-3 u-radius-10 u-shape-round u-group-1">
        <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-1">
          <h1 class="u-custom-font u-text u-text-palette-1-light-1 u-text-1">MicroStart</h1>
=======
      <img src="images/14-min.png" class="u-align-left u-image u-image-contain u-image-1" data-image-width="2941" data-image-height="1576">
      <div class="u-align-left u-container-style u-expanded-width-xs u-group u-palette-1-light-3 u-radius-10 u-shape-round u-group-1">
        <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-1">
          <h1 class="u-custom-font u-text u-text-palette-1-light-1 u-text-1"> MicroStart</h1>
>>>>>>> 06a9cd7c860f6e7f24dd13403004e968112b3285
          <p class="u-text u-text-2">A MicroStart é uma companhia que busca conectar pequenos empreendedores com fornecedores nacionais de forma rápida e fácil, impulsionando o seu próprio negócio!</p>
          <a href="" class="u-active-palette-1-light-1 u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-text-active-white u-text-body-alt-color u-text-hover-white u-btn-2">Empreenda conosco!</a>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-palette-1-light-3 u-valign-middle u-section-3" id="carousel_00a7">
    <h2 class="u-text u-text-default u-text-1">Com o que trabalhamos?</h2>
    <p class="u-text u-text-default-lg u-text-default-xl u-text-2">Todos produtos são anunciados em lotes por outros fornecedores. Portanto nos encarregamos de realizar a comunicação e atendimento entre o vendedor e comprador, garantindo segurança e confiança desde a compra até a entrega!</p>
    <div class="u-expanded-width u-palette-3-base u-shape u-shape-rectangle u-shape-1"></div>
    <div class="u-list u-list-1">
      <div class="u-repeater u-repeater-1">
        <div class="u-align-center u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-1">
          <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
<<<<<<< HEAD
            <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-1" data-image-width="700" data-image-height="500" src="view/img/produtos/Meias.jpg">
=======
            <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-1" data-image-width="700" data-image-height="500" src="images/11.png">
>>>>>>> 06a9cd7c860f6e7f24dd13403004e968112b3285
            <h4 class="u-text u-text-default u-text-palette-1-base u-text-3">Meias</h4>
            <p class="u-text u-text-4">50 Meias por apenas R$70,00!</p>
            <a href="view/produtos.php" class="u-active-palette-1-light-2 u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-3-base u-radius-6 u-text-active-palette-1-base u-text-body-alt-color u-text-hover-palette-1-base u-btn-3">Compre aqui!</a>
          </div>
        </div>
        <div class="u-align-center u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-2">
          <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-2">
<<<<<<< HEAD
            <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-2" data-image-width="700" data-image-height="500" src="view/img/produtos/smartwacth.jpg">
=======
            <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-2" data-image-width="700" data-image-height="500" src="images/2.png">
>>>>>>> 06a9cd7c860f6e7f24dd13403004e968112b3285
            <h4 class="u-text u-text-default u-text-palette-1-base u-text-5">Smart Watch</h4>
            <p class="u-text u-text-6">10 SmartWatches por apenas $300,00!</p>
            <a href="view/produtos.php" class="u-active-palette-1-light-2 u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-3-base u-radius-6 u-text-active-palette-1-base u-text-body-alt-color u-text-hover-palette-1-base u-btn-3">Compre aqui!</a>

          </div>
        </div>
        <div class="u-align-center u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-3">
          <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3">
<<<<<<< HEAD
            <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-3" data-image-width="700" data-image-height="500" src="view/img/produtos/DiscoVinil.jpg">
=======
            <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-3" data-image-width="700" data-image-height="500" src="images/6c7decbc-d9d3-4316-5906-19d76e6c84f3.png">
>>>>>>> 06a9cd7c860f6e7f24dd13403004e968112b3285
            <h4 class="u-text u-text-default u-text-palette-1-base u-text-7">Disco de Vinil</h4>
            <p class="u-text u-text-8">10 Discos de Vinil por apenas R$120,00! </p>
            <a href="view/produtos.php" class="u-active-palette-1-light-2 u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-3-base u-radius-6 u-text-active-palette-1-base u-text-body-alt-color u-text-hover-palette-1-base u-btn-3">Compre aqui!</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-align-left-xs u-clearfix u-palette-1-light-3 u-section-5" id="carousel_aebb">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h2 class="u-custom-font u-text u-text-default u-text-palette-1-base u-text-1"> O que garantimos?</h2>
      <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-left u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512.001 512.001" style="">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2afa"></use>
                </svg><svg class="u-svg-content" viewBox="0 0 512.001 512.001" id="svg-2afa">
                  <g>
                    <path d="m497.001 482.001h-15.125v-346.5c0-8.284-6.716-15-15-15h-60.25c-8.284 0-15 6.716-15 15v346.5h-30.25v-286.25c0-8.284-6.716-15-15-15h-60.25c-8.284 0-15 6.716-15 15v286.25h-30.25v-226c0-8.284-6.716-15-15-15h-60.25c-8.284 0-15 6.716-15 15v226h-30.25v-165.75c0-8.284-6.716-15-15-15h-60.25c-8.284 0-15 6.716-15 15v165.75h-15.125c-8.284 0-15 6.716-15 15s6.716 15 15 15h482c8.284 0 15-6.716 15-15s-6.716-15-15-15z"></path>
                    <path d="m14.983 210.752c.493 0 .992-.024 1.493-.074 76.631-7.574 148.46-21.938 213.49-42.696 52.234-16.673 100.248-37.492 142.708-61.88 36.106-20.738 62.038-40.508 79.201-55.404v24.553c0 8.284 6.716 15 15 15s15-6.716 15-15v-60.25c0-8.284-6.716-15-15-15h-60.25c-8.284 0-15 6.716-15 15s6.716 15 15 15h23.236c-16.167 13.787-40.426 32.025-73.849 51.071-63.828 36.373-175.058 83.205-342.486 99.751-8.244.815-14.267 8.158-13.452 16.402.765 7.744 7.288 13.527 14.909 13.527z"></path>
                  </g>
                </svg>


              </span>
              <h4 class="u-custom-font u-text u-text-palette-1-base u-text-3">Plano empresarial</h4>
              <ul class="u-custom-list u-text u-text-4">
                 <label> Adquira já o plano Premium da MicroStart!<br> Você ganha diversas vantagens como: </label>
                <li>
                  <div class="u-list-icon u-list-icon-2">
                    <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-5c29">
                      <g>
                        <g>
                          <polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
                        </g>
                      </g>
                    </svg>
                  </div>Frete grátis
                </li>
                <li>
                  <div class="u-list-icon u-list-icon-3">
                    <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-5c29">
                      <g>
                        <g>
                          <polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
                        </g>
                      </g>
                    </svg>
                  </div>Descontos exclusivos
                </li>
                <li>
                  <div class="u-list-icon u-list-icon-4">
                    <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-5c29">
                      <g>
                        <g>
                          <polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
                        </g>
                      </g>
                    </svg>
                  </div>Entregas rápidas
                </li>
                <li>
                  <div class="u-list-icon u-list-icon-5">
                    <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-5c29">
                      <g>
                        <g>
                          <polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
                        </g>
                      </g>
                    </svg>
                  </div>Taxa adicional por apenas 7%
                </li>
              </ul>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 469.341 469.341" style="">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-16f1"></use>
                </svg><svg class="u-svg-content" viewBox="0 0 469.341 469.341" x="0px" y="0px" id="svg-16f1" style="enable-background:new 0 0 469.341 469.341;">
                  <g>
                    <g>
                      <g>
                        <path d="M437.337,384.007H362.67c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333h74.667     c5.896,0,10.667-4.771,10.667-10.667v-32c0-22.368-17.35-40.559-39.271-42.323l-61.26-107     c-5.677-9.896-14.844-16.969-25.813-19.906c-10.917-2.917-22.333-1.385-32.104,4.302L79.553,128.007H42.67     c-23.531,0-42.667,19.135-42.667,42.667v256c0,23.531,19.135,42.667,42.667,42.667h362.667c23.531,0,42.667-19.135,42.667-42.667     v-32C448.004,388.778,443.233,384.007,437.337,384.007z M360.702,87.411l23.242,40.596h-92.971L360.702,87.411z M121.953,128.007     L300.295,24.184c4.823-2.823,10.458-3.573,15.844-2.135c5.448,1.458,9.99,4.979,12.813,9.906l0.022,0.039l-164.91,96.013H121.953     z"></path>
                        <path d="M437.337,234.674H362.67c-35.292,0-64,28.708-64,64c0,35.292,28.708,64,64,64h74.667c17.646,0,32-14.354,32-32v-64     C469.337,249.028,454.983,234.674,437.337,234.674z M362.67,320.007c-11.76,0-21.333-9.573-21.333-21.333     c0-11.76,9.573-21.333,21.333-21.333c11.76,0,21.333,9.573,21.333,21.333C384.004,310.434,374.431,320.007,362.67,320.007z"></path>
                      </g>
                    </g>
                  </g>
                </svg>


              </span>
              <h4 class="u-custom-font u-text u-text-palette-1-base u-text-5">Garantia de pagamento</h4>
              <ul class="u-custom-list u-text u-text-6">
              
                
              
                <li>
                  <div class="u-list-icon u-list-icon-8">
                    <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-55e9">
                      <g>
                        <g>
                          <polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
                        </g>
                      </g>
                    </svg>
                  </div>Suas compras passam por diversas políticas que garantem o recebimento e qualidade dos produtos
                </li>
                <li>
                  <div class="u-list-icon u-list-icon-6">
                    <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-55e9">
                      <g>
                        <g>
                          <polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
                        </g>
                      </g>
                    </svg>
                  </div> Temos uma diversidade de formas de pagamento e transportadoras
                </li>
                <li>
                  <div class="u-list-icon u-list-icon-9">
                    <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-55e9">
                      <g>
                        <g>
                          <polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
                        </g>
                      </g>
                    </svg>
                  </div>Caso ocorra algum problema com a compra é possível contatar o fornecedor para resolver o ocorrido
                </li>

                
                <li>
                  <div class="u-list-icon u-list-icon-10">
                    <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-55e9">
                      <g>
                        <g>
                          <polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
                        </g>
                      </g>
                    </svg>
                  </div>Asseguramos reembolso em caso de contratempos
                </li>
              </ul>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style="">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e648"></use>
                </svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-e648">
                  <g>
                    <circle cx="166" cy="300" r="15"></circle>
                    <g>
                      <path d="m246 277c0-24.813 20.187-45 45-45 7.632 0 14.226-4.075 17.639-10.901l2.112-4.224c1.273-2.546 2.777-4.915 4.449-7.124-6.291-6.032-14.817-9.751-24.2-9.751h-250c-19.299 0-35 15.701-35 35v160c0 19.299 15.701 35 35 35h217.629c-8.324-21.279-12.629-44.017-12.629-67.403zm-65 65.42v17.58c0 8.284-6.716 15-15 15s-15-6.716-15-15v-17.58c-17.459-6.192-30-22.865-30-42.42 0-24.813 20.187-45 45-45s45 20.187 45 45c0 19.555-12.541 36.228-30 42.42z"></path>
                    </g>
                    <g>
                      <path d="m491 262c-18.955 0-35.996-10.532-44.472-27.484l-2.111-4.223c-2.541-5.083-7.735-8.293-13.417-8.293h-80c-5.682 0-10.876 3.21-13.417 8.292l-2.111 4.222c-8.476 16.954-25.517 27.486-44.472 27.486-8.284 0-15 6.716-15 15v85.597c0 33.654 10.619 65.715 30.708 92.716 20.089 27 47.747 46.384 79.982 56.054 1.406.422 2.858.633 4.31.633s2.904-.211 4.31-.633c32.235-9.67 59.893-29.054 79.982-56.054 20.089-27.001 30.708-59.062 30.708-92.716v-85.597c0-8.284-6.716-15-15-15zm-46.967 87.322-56.568 56.568c-2.929 2.929-6.768 4.394-10.606 4.394s-7.678-1.464-10.606-4.394l-28.284-28.284c-5.858-5.858-5.858-15.355 0-21.213 5.857-5.858 15.355-5.858 21.213 0l17.678 17.677 45.962-45.961c5.857-5.858 15.355-5.858 21.213 0 5.856 5.858 5.856 15.355-.002 21.213z"></path>
                    </g>
                    <g>
                      <path d="m106 120c0-33.137 26.863-60 60-60 33.137 0 60 26.863 60 60v50h60v-50c0-66.274-53.726-120-120-120-66.274 0-120 53.726-120 120v50h60z"></path>
                    </g>
                  </g>
                </svg>


              </span>
              <h4 class="u-custom-font u-text u-text-palette-1-base u-text-7">Segurança</h4>
              <ul class="u-custom-list u-text u-text-8">
                <li>
                  <div class="u-list-icon u-list-icon-11">
                    <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-ef89">
                      <g>
                        <g>
                          <polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
                        </g>
                      </g>
                    </svg>
                  </div>Seus dados pessoais e financeiros são protegidos e passam por diversas técnicas de encriptação de alto padrão de segurança
                </li>
                <li>
                  <div class="u-list-icon u-list-icon-12">
                    <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-ef89">
                      <g>
                        <g>
                          <polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
                        </g>
                      </g>
                    </svg>
                  </div>Com a nossa parceria com o Mercado Pago seu pagamento é garantido e protegido sem riscos de perda
                </li>
                <li>
                  <div class="u-list-icon u-list-icon-13">
                    <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-ef89">
                      <g>
                        <g>
                          <polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
                        </g>
                      </g>
                    </svg>
                  </div>
                </li>
                <li>
                  <div class="u-list-icon u-list-icon-14">
                    <svg class="u-svg-content" viewBox="0 0 372.09 372.09" x="0px" y="0px" id="svg-ef89">
                      <g>
                        <g>
                          <polygon points="339.719,27.855 120.922,282.666 29.143,196.838 0,228.001 124.293,344.235 372.09,55.65   "></polygon>
                        </g>
                      </g>
                    </svg>
                  </div>Suas informações são divulgadas apenas para terceiros responsáveis pelas entregas, ninguém mais tem acesso a seus dados pessoais!
                </li>
                
              </ul>

  </section>
  <section class="u-clearfix u-palette-1-base u-section-8" id="carousel_2ad0">
<<<<<<< HEAD
    <div class="u-list u-list-1">
      <div class="u-repeater u-repeater-1">
        <div class="u-align-center u-container-style u-list-item u-palette-5-light-3 u-radius-10 u-repeater-item u-shape-round u-list-item-1">
=======
    <div class="u-shape u-shape-rectangle u-white u-shape-1"></div>
    <div class="u-list u-list-1">
      <div class="u-repeater u-repeater-1">
        <div class="u-align-center u-container-style u-list-item u-palette-1-light-3 u-radius-10 u-repeater-item u-shape-round u-list-item-1">
>>>>>>> 06a9cd7c860f6e7f24dd13403004e968112b3285
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 52 52" style="">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-077e"></use>
              </svg><svg class="u-svg-content" viewBox="0 0 52 52" x="0px" y="0px" id="svg-077e" style="enable-background:new 0 0 52 52;">
                <path style="fill:currentColor;" d="M38.853,5.324L38.853,5.324c-7.098-7.098-18.607-7.098-25.706,0h0
	C6.751,11.72,6.031,23.763,11.459,31L26,52l14.541-21C45.969,23.763,45.249,11.72,38.853,5.324z M26.177,24c-3.314,0-6-2.686-6-6
	s2.686-6,6-6s6,2.686,6,6S29.491,24,26.177,24z"></path>
              </svg></span>
            <h5 class="u-text u-text-default u-text-palette-1-base u-text-1">Onde nos encotrar?</h5>
            <p class="u-text u-text-2">Etec de Guarulhos - SP</p>
          </div>
        </div>
<<<<<<< HEAD
        <div class="u-align-center u-container-style u-list-item u-palette-5-light-3 u-radius-10 u-repeater-item u-shape-round u-list-item-2">
=======
        <div class="u-align-center u-container-style u-list-item u-palette-1-light-3 u-radius-10 u-repeater-item u-shape-round u-list-item-2">
>>>>>>> 06a9cd7c860f6e7f24dd13403004e968112b3285
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 513.64 513.64" style="">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9786"></use>
              </svg><svg class="u-svg-content" viewBox="0 0 513.64 513.64" x="0px" y="0px" id="svg-9786" style="enable-background:new 0 0 513.64 513.64;">
                <g>
                  <g>
                    <path d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72    c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68    c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44    l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z"></path>
                  </g>
                </g>
              </svg></span>
            <h5 class="u-text u-text-default u-text-palette-1-base u-text-3">Telefone</h5>
            <p class="u-text u-text-4">(00) 1234-5678 <br>(00) 8765-4321
            </p>
          </div>
        </div>
<<<<<<< HEAD
        <div class="u-align-center u-container-style u-list-item u-palette-5-light-3 u-radius-10 u-repeater-item u-shape-round u-list-item-3">
=======
        <div class="u-align-center u-container-style u-list-item u-palette-1-light-3 u-radius-10 u-repeater-item u-shape-round u-list-item-3">
>>>>>>> 06a9cd7c860f6e7f24dd13403004e968112b3285
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style="">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d01e"></use>
              </svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-d01e">
                <path d="m201 12.714v184.286h267v-184.286c0-7.022-5.692-12.714-12.714-12.714h-241.572c-7.022 0-12.714 5.692-12.714 12.714zm63.89 33.131h70.271c8.284 0 15 6.716 15 15s-6.716 15-15 15h-70.271c-8.284 0-15-6.716-15-15s6.715-15 15-15zm0 75.142h139.22c8.284 0 15 6.716 15 15s-6.716 15-15 15h-139.22c-8.284 0-15-6.716-15-15s6.715-15 15-15z"></path>
                <path d="m472 227h-275c-22.091 0-40 17.909-40 40v205c0 22.091 17.909 40 40 40h275c22.091 0 40-17.909 40-40v-205c0-22.091-17.909-40-40-40zm-207.5 217.5h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm80 120h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm80 120h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-60h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15z"></path>
                <path d="m87 227h-47c-22.091 0-40 17.909-40 40v205c0 22.091 17.909 40 40 40h47c22.091 0 40-17.909 40-40v-205c0-22.091-17.909-40-40-40z"></path>
              </svg></span>
            <h5 class="u-text u-text-default u-text-palette-1-base u-text-5">Nosso Propósito</h5>
            <p class="u-text u-text-6">Auxiliar e impulsionar o próprio negócio de iniciantes e pequenos empreendedores!</p>
          </div>
        </div>
<<<<<<< HEAD
        <div class="u-align-center u-container-style u-list-item u-palette-5-light-3 u-radius-10 u-repeater-item u-shape-round u-list-item-4">
=======
        <div class="u-align-center u-container-style u-list-item u-palette-1-light-3 u-radius-10 u-repeater-item u-shape-round u-list-item-4">
>>>>>>> 06a9cd7c860f6e7f24dd13403004e968112b3285
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style="">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9f82"></use>
              </svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-9f82" style="enable-background:new 0 0 512 512;">
                <g>
                  <g>
                    <path d="M507.49,101.721L352.211,256L507.49,410.279c2.807-5.867,4.51-12.353,4.51-19.279V121    C512,114.073,510.297,107.588,507.49,101.721z"></path>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M467,76H45c-6.927,0-13.412,1.703-19.279,4.51l198.463,197.463c17.548,17.548,46.084,17.548,63.632,0L486.279,80.51    C480.412,77.703,473.927,76,467,76z"></path>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M4.51,101.721C1.703,107.588,0,114.073,0,121v270c0,6.927,1.703,13.413,4.51,19.279L159.789,256L4.51,101.721z"></path>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M331,277.211l-21.973,21.973c-29.239,29.239-76.816,29.239-106.055,0L181,277.211L25.721,431.49    C31.588,434.297,38.073,436,45,436h422c6.927,0,13.412-1.703,19.279-4.51L331,277.211z"></path>
                  </g>
                </g>
              </svg></span>
            <h5 class="u-text u-text-default u-text-palette-1-base u-text-7">Email</h5>
            <p class="u-text u-text-8">
              <a href="mailto:microstart.email@gmail.com" class="u-active-none u-border-1 u-border-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1">microstart.email@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
            <div class="u-container-layout u-container-layout-5">
              <h3 class="u-text u-text-default u-text-9">Fala diretamente com a gente!</h3>
              <h6 class="u-custom-font u-text u-text-font u-text-10">Em caso de dúvida ou sugestão contate-nos por e-mail ou envie uma mensagem!</h6>
              <p class="u-text u-text-11">Nos encontre também em outros canais:</p>
              <div class="u-social-icons u-spacing-20 u-social-icons-1">
                <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-5">
                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f107"></use>
                    </svg>
                    <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-f107" class="u-svg-content">
                      <path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path>
                    </svg>
                  </span>
                </a>
                <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-6">
                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e140"></use>
                    </svg>
                    <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-e140" class="u-svg-content">
                      <path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path>
                    </svg>
                  </span>
                </a>
                <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-7">
                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4718"></use>
                    </svg>
                    <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-4718" class="u-svg-content">
                      <path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path>
                      <path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path>
                      <path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path>
                    </svg>
                  </span>
                </a>
                <a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-icon u-social-linkedin u-icon-8">
                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-438b"></use>
                    </svg>
                    <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-438b" class="u-svg-content">
                      <path d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"></path>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
            <div class="u-container-layout u-valign-top u-container-layout-6">
              <div class="u-form u-form-1">
                <form action="#" method="POST" class="u-clearfix u-form-spacing-30 u-form-vertical u-inner-form" style="padding: 10px" source="email" name="form">
                  <div class="u-form-email u-form-group u-form-partition-factor-2 u-form-group-1">
                    <label for="email-319a" class="u-label u-text-body-alt-color u-label-1">Email</label>
                    <input type="email" placeholder="Insira seu email" id="email-319a" name="email" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle" required="">
                  </div>
                  <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-2">
                    <label for="name-319a" class="u-label u-text-body-alt-color u-label-2">Nome</label>
                    <input type="text" placeholder="Insira seu nome" id="name-319a" name="name" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle" required="">
                  </div>
                  <div class="u-form-group u-form-message u-form-group-3">
                    <label for="message-319a" class="u-label u-text-body-alt-color u-label-3">Mensagem</label>
                    <textarea placeholder="Insira sua mensagem" rows="4" cols="50" id="message-319a" name="message" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle" required=""></textarea>
                  </div>
                  <div class="u-align-left u-form-group u-form-submit u-form-group-4">
                    <a href="#" class="u-active-palette-1-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-1-light-3 u-text-palette-1-base u-white u-btn-2">Enviar</a>
                    <input type="submit" value="submit" class="u-form-control-hidden">
                  </div>
                  <div class="u-form-send-message u-form-send-success"> texto </div>
                  <div class="u-form-send-error u-form-send-message"> texto </div>
                  <input type="hidden" value="" name="recaptchaResponse">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>