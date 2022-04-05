<?php

class Cliente
{

/*
//tabela conexão do endereço
    public int $num_casa;
    public int $complemento_casa;*/

//tabela cliente
    private $cod, $nome, $sobrenome, $cnpj, $dataNasc, $email, $senha;

    public function getCod() {
        return $this->cod;
    }

    public function setCod($cod) {
        $this->cod = $cod;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function getDataNasc() {
        return $this->dataNasc;
    }

    public function setDataNasc($dataNasc) {
        $this->dataNasc = $dataNasc;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha() {
        $opcao = ['cost' => 8];

        $senhaCrypto = password_hash($this->senha, PASSWORD_BCRYPT, $opcao);
        return $senhaCrypto;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

     //tabela telefone
     private $telefone1, $ddd1, $telefone2, $ddd2;

     public function setTelefone1($telefone1){
         $this -> telefone1 = $telefone1;
     }
 
     public function getTelefone1(){
         return $this -> telefone1;
     }
 
     public function setDDD1($ddd1){
         $this -> ddd1 = $ddd1;
     }
 
     public function getDDD1(){
         return $this -> ddd1;
     }

     public function setTelefone2($telefone2){
         $this -> telefone2 = $telefone2;
     }
 
     public function getTelefone2(){
         return $this -> telefone2;
     }
 
     public function setDDD2($ddd2){
         $this -> ddd2 = $ddd2;
     }
 
     public function getDDD2(){
         return $this -> ddd2;
     }

     // tabela endereço

    private $rua, $cidade, $uf, $pais, $bairro, $cep;

    public function setRua($rua){
        $this -> rua = $rua;
    }

    public function getRua(){
        return $this -> rua;
    }

    public function setCidade($cidade){
        $this -> cidade = $cidade;
    }

    public function getCidade(){
        return $this -> cidade;
    }

    public function setUF($uf){
        $this -> uf = $uf;
    }

    public function getUF(){
        return $this -> uf;
    }

    public function setPais($pais){
        $this -> pais = $pais;
    }

    public function getPais(){
        return $this -> pais;
    }

    public function setBairro($bairro){
        $this -> bairro = $bairro;
    }

    public function getBairro(){
        return $this -> bairro;
    }

    public function setCep($cep){
        $this -> cep = $cep;
    }

    public function getCep(){
        return $this -> cep;
    }

}