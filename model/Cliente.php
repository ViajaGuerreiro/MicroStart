<?php

class Cliente
{

//tabela telefone
   /* public int $ddd;
    public int $telefone;

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

}