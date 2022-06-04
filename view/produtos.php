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

    <title>Produtos</title>
</head>
<body>
    <main>
        <nav>
            <a href="">Moda</a>
            <a href="">Tecnologia</a>
            <a href="">Eletrodomésticos</a>
            <a href="">Construção</a>
            <a href="">Outros</a>
            <a href="../index.php">home</a>
        </nav>
        <!-- Carousel-->

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
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

<?php
        $produtoDao = new ProdutoDao();
        $linhas = $produtoDao->read_prod($_SESSION['id']);

        if(!$linhas == null) {
            foreach($linhas as $linha) {
?>
     
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
    } 
    else {
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