<?php

class Produto{
    //tabela produto
    private $nome, $preco, $tamanho, $quantidade;

    public function setNomeProd($nomeprod){
        $this -> nomeprod = $nomeprod;
    }

    public function getNomeProd(){
        return $this -> nomeprod;
    }

    public function setPreco($preco){
        $this -> preco = $preco;
    }

    public function getPreco(){
        return $this -> preco;
    }

    public function setTamanho($tamanho){
        $this -> tamanho = $tamanho;
    }

    public function getTamanho(){
        return $this -> tamanho;
    }

    public function setQuantidade($quantidade){
        $this -> quantidade = $quantidade;
    }

    public function getQuantidade(){
        return $this -> quantidade;
    }

    //tabela marca

    private $nomeMarca;

    public function setNomeMarca($nomeMarca){
        $this -> nomeMarca = $nomeMarca;
    }

    public function getNomeMarca(){
        return this -> nomeMarca;
    }

    //tabela categoria

    private $tipo;

    public function setTipo($tipo){
        $this -> tipo = $tipo;
    }

    public function getTipo(){
        return this -> tipo;
    }
}
 
 ?>