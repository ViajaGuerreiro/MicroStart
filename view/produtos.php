<?php
session_start();

include_once '../model/ProdutoDao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/css/styleProd.css">
    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Produtos</title>
</head>

<body>

    <?php
    $produtoDao = new ProdutoDao();
    $linhas = $produtoDao->read_prod($_SESSION['id']);

    if (!$linhas == null) {
        foreach ($linhas as $linha) {
    ?>
            <main>
            <nav class="navbar navbar-expand-dk navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="" width="30" height="30" alt="">
          </a>
        <a class="navbar-brand" href="../index.php">MicroStart</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="">Moda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Tecnologia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Eletrodomésticos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Construção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Outros</a>
            </li>
          </ul>
        </div>
      </nav>
                <!-- Carousel-->

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./img/BANNERS 2/periféricos.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/BANNERS 2/smartwatch.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/BANNERS 2/app.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- FILTRO-->
                <div class="filtro">
                    <select class="form-select form-select-lg mb-3 " style="width: 180px; justify-content:right;">
                        <option selected class="img">Filtrar </option>
                        <option value="1">Moda </option>
                        <option value="2">Tecnologia</option>
                        <option value="3">Eletrodomésticos</option>
                        <option value="4">Construção</option>
                        <option value="5">Outros</option>

                    </select>
                </div>
                <!-- FILTRO-->
                </br>
                </br>
                </br>
                </br>
                </br>

                <!-- Cards Produtos-->
                <section class="sec">

                    <div class="containerCard">
                        <div class="contCard">
                            <div class="textoProduto">
                                <h1 class="nomeProd"> <?= $linha['produto'] ?> </h1>
                                </br>
                                <p class="descProd">
                                    <?= $linha['descricao'] ?>
                                </p>
                                <p class="valorlote"> R$<?= $linha['preco_lote'] ?>

                                </p>
                            </div>
                            <a class="vermais" href="produto.php?nome=<?= $linha['produto'] ?>">
                                <button class="btnComprar">
                                    <p class="txtComprar">Ver mais</p>
                                </button>
                            </a>
                        </div>
                    </div>

            <?php
        }
    } else {
        echo " <script>
                            alert('Não há nenhum produto disponivel');

                            window.location.href = '../index.php';
                        </script>";
    }
            ?>
                </section>
            </main>
</body>

</html>