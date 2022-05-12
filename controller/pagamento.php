<?php
    session_start();
    extract($_REQUEST, EXTR_OVERWRITE);

    require_once 'pagamento/vendor/autoload.php';

    

    $access_token = "";

    MercadoPago\SDK::setAccessToken($access_token);

    $prefences = new MercadoPago\Preference();

    $produto = new MercadoPago\Item();

    $produto->title = $nomeProduto;

    $produto->quantity = $quantidadeComprar;

    $produto->unit_price = (double)$precoLote;

    $prefences->items = array($produto);

    $prefences->back_urls = array (
        "success" => '../View/pagSucesso.php',
        "failure" => '../View/pagFalha.php',
        "pending" => '../View/pagPendente.php'
    );

    $prefences->notification_url = '../View/notificacao.php';
    $prefences->external_reference = 4545;
    $prefences->save();

    $link = $prefences->init_point;

    echo $link;

