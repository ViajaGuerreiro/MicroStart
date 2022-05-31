<?php
    session_start();
    include_once '../model/ProdutoDao.php';
    include_once '../model/ClienteDao.php';
    include_once 'nav.php';
    include_once 'navSair.php';
    $nomeProduto = $_GET['nome'];
    if($nomeProduto == null)
    {
        header('location: produtos.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nomeProduto ?></title>
</head>
<body>

<?php
    $clienteDao = new ClienteDao();
    $linhasCli = $clienteDao->read($_SESSION['id']);
    foreach($linhasCli as $linhaCli)
    {
        if($linhaCli['plano_atual'] == "G")
        {
            $taxa = "14%";
            $frete = "Frete R$50";
        }
        elseif($linhaCli['plano_atual'] == "P")
        {
            $taxa = "7%";
            $frete = "Frete Gratis";
        }
    }
    $produtoDao = new ProdutoDao();
    $linhas = $produtoDao->read_prod_nome($nomeProduto);
    foreach($linhas as $linha) {
        
?>

<section class="u-align-center u-clearfix u-section-1" id="sec-4496">
       <div id="detalhesProd">
            <form action="../controller/pagamento.php" method="post">
                <img src="" alt="">

                <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-expanded-width u-product u-product-1">
          <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-valign-top-sm u-valign-top-xs u-container-layout-1"><!--product_image-->
            <img alt="" class="u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-product-control u-image-1" src="./img/produtos/teste.jpg">
            <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <div class="u-border-3 u-border-palette-4-base u-line u-line-horizontal u-line-1"></div><!--product_title-->
                <h2 class="u-custom-font u-font-merriweather u-product-control u-text u-text-1" id="nomeprod">
                <?= $linha['Nome do Produto'] ?>
                </h2>
                <div class="u-custom-font u-font-merriweather u-product-control u-product-price u-product-price-1">
                  <div class="u-price-wrapper u-spacing-10">
                    <div class="u-price u-text-palette-4-base" id="preco">R$ <?= $linha['Preco'] ?>
                  </div>
                </div>
                <div class="u-product-control u-product-desc u-text u-text-default u-text-2" id="desc">
                  <p> <?=$linha['Descricao'] ?></p>
                </div>
                <div class="u-product-control u-product-desc u-text u-text-default u-text-2"id="desc" >
               <h3 class="details"> Detalhes </h3>
                     Tamanhos:  <?= $linha['Tamanho']?> <br>
                     Quantidade por lote (un): <?=$linha ['Quantidade']?>
                     label for="cxTaxa">Taxa adicional de <?= $taxa ?></label>


<label for="cxDisponivel">Escolha quantos lotes deseja</label>
<input required min="1" max="<?= $linha['Disponivel'] ?>" type="number" name="quantidadeComprar" id="cxDisponivel">

<h1>Metodo de envio</h1>

<label for="envio">Metodo de envio</label>
<select required name="tipoEnvio" id="envio">
    <option disabled selected>Selecione...</option>
    <option value="1">Sedex (<?= $frete ?>)</option>
    <option value="2">Pac (<?= $frete ?>)</option>
    <option value="3">JetLog (<?= $frete ?>)</option>
    <option value="4">Retirada</option>
</select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section> 

<?php
                if(isset($_SESSION['id'])) {
?>

<button id="comprar" class="u-btn u-button-style u-hover-grey-75 u-palette-4-base u-product-control u-btn-1">Comprar</button>

<?php
                }else {
?>
                    <a href="loginCli.php">Faça login</a>
<?php
                }
?>
        </form>
    </div>
<?php
            }
?>
</body>
</html>
