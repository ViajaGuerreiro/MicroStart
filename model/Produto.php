<?php

class Produto{
    //tabela lote
    private $idProd, $produto, $precoLote, $Qil, $tamanho, $lotesDisponiveis, $descricao;

    public function setIdProd($idProd){
        $this -> idProd = $idProd;
    }

    public function getIdProd(){
        return $this -> idProd;
    }

    public function setProduto($produto){
        $this -> produto = $produto;
    }

    public function getProduto(){
        return $this -> produto;
    }

    public function setPrecoLote($precoLote){
        $this -> precoLote = $precoLote;
    }

    public function getPrecoLote(){
        return $this -> precoLote;
    }

    public function setQil($Qil){
        $this -> Qil = $Qil;
    }

    public function getQil(){
        return $this -> Qil;
    }

    public function setTamanho($tamanho){
        $this -> tamanho = $tamanho;
    }

    public function getTamanho(){
        return $this -> tamanho;
    }

    public function setLotesDisponiveis($lotesDisponiveis){
        $this -> lotesDisponiveis = $lotesDisponiveis;
    }

    public function getLotesDisponiveis(){
        return $this -> lotesDisponiveis;
    }

    public function setDescricao($descricao){
        $this -> descricao = $descricao;
    }

    public function getDescricao(){
        return $this -> descricao;
    }

    //tabela marca

    private $nomeMarca;

    public function setNomeMarca($nomeMarca){
        $this -> nomeMarca = $nomeMarca;
    }

    public function getNomeMarca(){
        return $this -> nomeMarca;
    }

    //tabela categoria

    private $categoria;

    public function setCategoria($categoria){
        $this -> categoria = $categoria;
    }

    public function getCategoria(){
        return $this -> categoria;
    }

    //tabela transportadora

    private $codTrans;

    public function setIdTrans($codTrans){
        $this -> codTrans = $codTrans;
    }

    public function getIdTrans(){
        return $this -> codTrans;
    }

    //tabela registro

    private $qtdComprar,$ref, $statusPag;

    public function setQtdComprar($qtdComprar){
        $this -> qtdComprar = $qtdComprar;
    }

    public function getQtdComprar(){
        return $this -> qtdComprar;
    }

    public function setRef($ref){
        $this -> ref = $ref;
    }

    public function getRef(){
        return $this -> ref;
    }

    public function setStatusPag($statusPag){
        $this -> statusPag = $statusPag;
    }

    public function getStatusPag(){
        return $this -> statusPag;
    }
}
 
 ?>