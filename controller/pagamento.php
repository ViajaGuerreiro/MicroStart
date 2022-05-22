<?php
session_start();
extract($_REQUEST, EXTR_OVERWRITE);

require_once 'pagamento/vendor/autoload.php';


if ($nomeProduto != "" && $precoLote != "" && $quantidadeComprar != "" && $tipoEnvio != "" && $idProduto != "") {

    require_once "../model/Produto.php";
    require_once "../model/ProdutoDao.php";

    $access_token = "TEST-2311180941663868-052216-e6d12bd3555c35b60a50e555c8184c8d-1128372940";

    MercadoPago\SDK::setAccessToken($access_token);

    $prefences = new MercadoPago\Preference();

    $produtoCom = new MercadoPago\Item();

    $produtoCom->title = $nomeProduto;

    $produtoCom->quantity = $quantidadeComprar;

    $produtoCom->unit_price = (float)$precoLote;

    $prefences->items = array($produtoCom);

    $prefences->back_urls = array(
        "success" => 'localhost/microstart/View/pagSucesso.php',
        "failure" => 'localhost/microstart/View/pagFalha.php',
        "pending" => 'localhost/microstart/View/pagPendente.php'
    );

    $prefences->notification_url = 'localhost/microstart/View/notificacao.php';

    $ref = rand(1, 9999);

    $prefences->external_reference = $ref;
    $prefences->save();

    $link = $prefences->sandbox_init_point;
    
    $produto = new Produto();

    $produto->setIdTrans($tipoEnvio);
    $produto->setIdProd($idProduto);
    $produto->setQtdComprar($quantidadeComprar);
    $produto->setRef($ref);
    $produto->setPrecoLote($precoLote);
    $produto->setStatusPag('pendente');

    $comprar = new ProdutoDao();

    $comprar->comprarProd($_SESSION['id'],$produto);

    header('Location: ' . $link);
}
