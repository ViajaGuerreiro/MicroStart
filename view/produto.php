<?php
session_start();
include_once '../model/ProdutoDao.php';
include_once "../model/ClienteDao.php";
$nomeProduto = $_GET['nome'];
if ($nomeProduto == null) {
  header('location: produtos.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/styleDetalhe.css">
  <!-- CSS bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title><?= $nomeProduto ?></title>
</head>


<body class="u-body u-xl-mode">
  <!-- Carousel-->
  <div style="margin: 15px;">
    <a href="./produtos.php">
      <button type="button" class="btn" style="border-radius:5px; width: 90px; background-color:rgb(71,138,201); color: white;">
        <h4>Voltar</h4>
      </button>
    </a>
  </div>

  <header class="u-clearfix u-header u-header" id="sec-7c5f">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">


      <?php
      $clienteDao = new ClienteDao();
      if(!isset($_SESSION['id'])) {
        $linhasCli = $clienteDao->read(null);
        $taxa = "um valor minino";
        $frete = "Preços imperdiveis";
      } else {
        $linhasCli = $clienteDao->read($_SESSION['id']);
        foreach ($linhasCli as $linhaCli) {
          if ($linhaCli['plano_atual'] == "G") {
            $taxa = "14%";
            $frete = "Frete R$50";
          } elseif ($linhaCli['plano_atual'] == "P") {
            $taxa = "7%";
            $frete = "Frete Gratis";
          }
        }
      }

      $produtoDao = new ProdutoDao();
      $linhas = $produtoDao->read_prod_nome($nomeProduto);
      foreach ($linhas as $linha) {
      ?>

        <div id="detalhesProd">
          <form action="../controller/pagamento.php" method="post">
            <section class="u-align-center u-clearfix u-section-1" id="sec-4496">
              <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                <div class="u-container-style u-expanded-width u-product u-product-1">
                  <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-valign-top-sm u-valign-top-xs u-container-layout-1">
                    <!--product_image-->
<<<<<<< HEAD
                    <img alt="" class="u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-product-control u-image-1" src="../img/produtos/<?=$linha['imagem']?>.jpg">
=======
                    <img alt="" class="u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-product-control u-image-1" src="./img/produtos/teste.jpg">
>>>>>>> 06a9cd7c860f6e7f24dd13403004e968112b3285
                    <!--/product_image-->
                    <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1" style="">
                      <div class="u-container-layout u-valign-middle u-container-layout-2">
                        <h2 style="color:rgb(66, 136, 187); font-family: candara;text-transform: uppercase; font-weight: bolder; text-align: center;">
                          <?= $nomeProduto ?>
                        </h2>
                        <!-- não mexer -->
                        <input type="hidden" value="<?=$linha['idProduto']?>" name="idProduto">
                        <input type="hidden" value="<?=$nomeProduto?>" name="nomeProduto">
                        <div class="u-custom-font u-font-merriweather u-product-control u-product-price u-product-price-1">
                          <div class="u-price-wrapper u-spacing-10">
                            <div class="u-price u-text-palette-4-base" style="color: green; font-family: calibri; font-size: x-large; font-weight: bold;">$<?= $linha['Preco'] ?></div>
                            <!-- não mexer -->
                            <input type="hidden" value="<?= $linha['Preco']?>" name="precoLote">
                          </div>
                        </div>
                        <div style="font-family: calibri; font-size: x-large; font-weight: bold; color: black;">
                          <p> <?= $linha['Descricao'] ?></p>
                        </div>
                        <div style="font-family: calibri; font-size: larger; font-weight: bold; color: black;">
                          <h4 style="color:rgb(66, 136, 187); font-family: calibri;text-transform: uppercase; font-weight: bolder;">
                            Detalhes:
                          </h4>
                          <p for="cxTaxa">Taxa adicional de <?= $taxa ?></br>
                            Quantidade de itens por lote: <?= $linha['Quantidade'] ?> </br>
                            Tamanhos: <?= $linha['Tamanho'] ?></br>
                            Disponíveis: <?= $linha['Disponivel'] ?></br>
                            Descrição: <?= $linha['Descricao'] ?></br>
                          </p>
                        </div>
                        </br>
                        <div>
                          <label for="cxDisponivel" style="font-family: calibri; font-size: x-large; font-weight: bold; color: rgb(66, 136, 187);">
                            Escolha quantos lotes deseja:
                          </label>
                          <input required min="1" max="<?= $linha['Disponivel'] ?>" type="number" name="quantidadeComprar" id="cxDisponivel" style="border-style: groove; border-radius: 5px; border-color: rgba(255, 255, 255, 0.422);">
                        </div>
                        <div style="font-family: calibri; font-size: large; ">
                          <p> <label for="envio" style="color:rgb(66, 136, 187); font-family: calibri;font-weight: bolder; font-size: x-large;">
                              Método de envio:
                            </label>
                            <select required name="tipoEnvio" id="envio" style="border-style: groove; border-radius: 5px; border-color: grey;">
                              <option disabled selected>Selecione...</option>
                              <option value="1">Sedex (<?= $frete ?>)</option>
                              <option value="2">Pac (<?= $frete ?>)</option>
                              <option value="3">JetLog (<?= $frete ?>)</option>
                              <option value="4">Retirada</option>
                            </select>
                          </p>
                        </div>
                        </br>
                        <?php
                        if (isset($_SESSION['id'])) {
                        ?>
                          <button class="u-btn u-button-style u-hover-grey-75 u-palette-4-base u-product-control u-btn-1" style="background-color:rgb(66, 136, 187); border-radius: 5px; color:white; font-weight: bold; margin-left: 100px;">
                            Comprar
                          </button>

                        <?php
                        } else {
                        ?>
                          <a href="loginCli.php">Faça login</a>
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            </br>


          </form>
        </div>
    </div>
  </header>
<?php
      }
?>
</body>

</html>