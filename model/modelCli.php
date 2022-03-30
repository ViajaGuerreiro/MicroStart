<?php

function cadastrarCli($conexao,$nome, $sobrenome, $data_nasc, $cnpj, $email, $senha){

    $opcao = ['cost' => 8];

    $senhaCrypto = password_hash($senha, PASSWORD_BCRYPT, $opcao);

    $query = "insert into cliente(email, senha, nome, sobrenome, data_nasc, cnpj ) values('{$email}', '{$senhaCrypto}', '$nome', '$sobrenome', '$data_nasc', '$cnpj')";
    mysqli_query($conexao, $query);

}

function alterarDadosCli($conexao,$nome, $sobrenome, $data_nasc, $cnpj, $email, $senha) {

    $opcao = ['cost' => 8];

    $senhaCrypto = password_hash($senha, PASSWORD_BCRYPT, $opcao);

    $query = "update cliente set nome = '{$nome}', sobrenome = '{$sobrenome}', data_nasc = '{$data_nasc}', cnpj ='{$cnpj}', $email = '{$email}', senha = '{$senhaCrypto}' where cod_cli = '{$_SESSION['id_cli']}' ";

    $resultado = mysqli_query($conexao,$query);
return $resultado;
}

function mostrarDadosCli($conexao) {
    session_start();

    $query = "select nome as 'nome_cli', sobrenome as 'sobrenome_cli', date_format(data_nasc, '%d/%m/%Y') as 'nascimento_cli', cnpj as 'cnpj_cli', email as 'email_cli' from cliente where cod_cli = '{$_SESSION['id_cli']}'";

    $resultado = mysqli_query($conexao, $query);

    $dadosCli = mysqli_fetch_assoc($resultado);
return $dadosCli;
}
?>