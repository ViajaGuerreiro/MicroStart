<?php
session_start();
include_once '../controller/verificaLogin.php';
include_once '../model/ProdutoDao.php';
include_once 'nav.php';
include_once 'navSair.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        
        <h1>Produtos</h1>

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
                        <button class="btnComprar"><a class="vermais" href="produto.php?nome=<?= $linha['produto'] ?>">
                                <p class="txtComprar">Ver mais</p>
                        </button>
                    </div>
                </div>

            ?>
        </section>
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
    </main>

    <style>
        .sec {
            display: flex;
            align-items: center;
            align-content: center;
            justify-content: space-evenly;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .txtComprar {
            justify-content: center;
            margin-top: 18px;
        }

        .containerCard {
            padding: 15px;
            margin-top: 10px;
            border-radius: 20px;
            background-color: whitesmoke;
            display: flex;
            align-items: center;
            align-content: center;
            justify-content: center;
            width: 300px;
            height: 500px;
            box-shadow: 4px 4px 3px 2px rgba(0, 0, 0, 0.2);
        }

        .vermais {
            text-decoration: none;
            color: white;
        }

        vermais:hover {
            text-decoration: underline;
            color: cornflowerblue;
        }

        .filtro {
            float: right;
            margin: 25px;
            font-family: Arial;
            font-size: 20px;
            font-weight: bold;
        }


        .contCard {
            display: flex;
            align-items: center;
            align-content: center;
            justify-content: center;
            flex-direction: column;
            font-family: Arial;
        }

        .imgProduto {
            border-style: solid;
            border-radius: 10px;
            border-width: 3px;
            border-color: #4a4a4d;
        }

        .textoProduto {
            display: flex;
            text-align: justify;
            flex-direction: column;
        }

        .nomeProd {
            font-weight: 900;
            color: #104E8B;
            margin-bottom: -5px;
            text-transform: uppercase;
            font-family: arial;
            align-items: center;
            align-content: center;
            justify-content: center;
            text-align: center;
        }

        .valorlote {
            font-size: 20pt;
            font-weight: bolder;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif, Times, serif, monospace;
            color: #00EE00;
            text-align: left;
            justify-items: right;
            justify-content: right;
            align-items: flex-end;
            align-content: flex-end;
            display: block;
        }

        .descProd {
            font-size: 15pt;
            font-weight: bold;
            font-family: Arial;
            color: black;
            align-items: center;
            align-content: center;
            justify-content: center;
            text-align: justify;
        }

        .btnComprar {

            transition-duration: 0.4s;
            background-color: #FFD700;
            border: none;
            height: 50px;
            width: 200px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            align-content: center;
            justify-content: center;
            color: white;
            font-size: 16pt;
            text-shadow: 0 0 3px #555555, 0 0 5px #4a4a4d;

        }

        .btnComprar:hover {
            background-color: rgb(106, 208, 241);
            color: cornflowerblue;
            text-shadow: 0 0 0;
            transform: scale(1.2);

        }
    </style>
</body>
</html>


