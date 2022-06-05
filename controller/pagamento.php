<?php
session_start();
extract($_REQUEST, EXTR_OVERWRITE);

require_once 'pagamento/vendor/autoload.php';
require_once '../model/ClienteDao.php';
require_once "../model/Produto.php";
require_once "../model/ProdutoDao.php";

$produto = new Produto();
$comprar = new ProdutoDao();
$cliente = new ClienteDao();

$linhas = $cliente->read($_SESSION['id']);

foreach ($linhas as $linha) {
    if ($linha['plano_atual'] == "G") {
        $taxa = 0.14;
        $frete = 50;
        if ($tipoEnvio == 4) {
            $frete = 0;
        }
    } elseif ($linha['plano_atual'] == "P") {
        $taxa = 0.07;
        $frete = 0;
    }
}


if ($nomeProduto != "" && $precoLote != "" && $quantidadeComprar != "" && $tipoEnvio != "" && $idProduto != "") {

    $access_token = "TEST-2311180941663868-052216-e6d12bd3555c35b60a50e555c8184c8d-1128372940";

    MercadoPago\SDK::setAccessToken($access_token);

    $prefences = new MercadoPago\Preference();

    $produtoCom = new MercadoPago\Item();

    $produtoCom->title = $nomeProduto;

    $produtoCom->quantity = $quantidadeComprar;

    $produtoCom->unit_price = (float)$precoLote + ($precoLote * $taxa) + $frete;

    $prefences->items = array($produtoCom);

    $prefences->back_urls = array(
        "success" => 'localhost:8080/microstart/View/pagSucesso.php',
        "failure" => 'localhost:8080/microstart/View/pagFalha.php',
        "pending" => 'localhost:8080/microstart/View/pagPendente.php'
    );

    $prefences->notification_url = 'localhost/microstart/View/notificacao.php';

    $ref = rand(1, 9999);

    $prefences->external_reference = $ref;
    $prefences->save();

    $link = $prefences->sandbox_init_point;

    /*$produto->setIdTrans($tipoEnvio);
    $produto->setIdProd($idProduto);
    $produto->setQtdComprar($quantidadeComprar);
    $produto->setRef($ref);
    $produto->setPrecoLote($precoLote);
    $produto->setStatusPag('pendente');

    $comprar->comprarProd($_SESSION['id'], $produto);*/

    header('Location: ' . $link);
}
