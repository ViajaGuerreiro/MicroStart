<?php
<<<<<<< HEAD
session_start();
include_once '../controller/verificaLogado.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

=======
    session_start();
    include_once '../controller/verificaLogado.php'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
>>>>>>> 06a9cd7c860f6e7f24dd13403004e968112b3285
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="../view/css/cadCli.css">
    <title>cadastro</title>
</head>

<body style="background: -webkit-linear-gradient(to left, rgb(153, 206, 255), rgb( 233, 243, 250));

background: linear-gradient(to left,rgb(153, 206, 255), rgb( 233, 243, 250));">
    <main>
        <div class="container" id="container">
            <div class="form-container">
                <div id="form-cadastro">
                    <div class="cadUsu">
                        <h1>Cadastrar Usuário</h1>
                        <form action="../controller/cadastrarCli.php" method="post">
                            <div id="form-cadastro-nome">
                                <label for="cxNome">Nome:</label>
                                <input required type="text" name="nome" id="cxNome">
                            </div>

                            <div id="form-cadastro-sobrenome">
                                <label for="cxSobrenome">Sobrenome:</label>
                                <input required type="text" name="sobrenome" id="cxSobrenome">
                            </div>

                            <div id="form-cadastro-data_nasc">
                                <label for="cxData_nasc">Data de Nascimento:</label>
                                <input required type="date" name="data_nasc" id="cxData_nasc">
                            </div>

                            <div id="form-cadastro-ddd1">
                                <label for="cxDdd1">DDD</label>
                                <input maxlength="2" required type="text" name="ddd1" id="cxDdd1">
                            </div>

                            <div id="form-cadastro-tel1">
                                <label for="cxTel1">Celular</label>
                                <input maxlength="10" required type="text" name="tel1" id="cxTel1">
                            </div>

                            <div id="form-cadastro-ddd2">
                                <Strong>Opcional</Strong>
                                <label for="cxDdd1">DDD</label>
                                <input maxlength="2" type="text" name="ddd2" id="cxDdd2">
                            </div>

                            <div id="form-cadastro-tel2">
                                <Strong>Opcional</Strong>
                                <label for="cxTel2">Celular</label>
                                <input maxlength="10" type="text" name="tel2" id="cxTel2">
                            </div>

                            <div id="form-cadastro-cnpj">
                                <label for="cxCNPJ">CNPJ:</label>
                                <input maxlength="18" required type="text" name="cnpj" id="cxCNPJ">
                            </div>

                            <div id="form-cadastro-email">
                                <label for="cxEmail">Email</label>
                                <input required type="email" name="email" id="cxEmail">
                            </div>

                            <div id="form-cadastro-senha">
                                <label for="cxSenha">Senha:</label>
                                <input required type="password" name="senha" id="cxSenha">
                            </div>
                    </div>
                    <div class="cadEnder">
                        <h1>Cadastrar endereço</h1>
                        <div id="form-cadastro-cep">
                            <label for="cxCep">CEP:</label>
                            <input maxlength="8" required type="text" name="cep" id="cxCep">
                        </div>

                        <div id="form-cadastro-rua">
                            <label for="cxRua">Rua:</label>
                            <input readonly type="text" id="cxRua">
                        </div>

                        <div id="form-cadastro-numero">
                            <label for="cxNumero">N°:</label>
                            <input required maxlength="5" type="number" name="numero" id="cxNumero">
                        </div>

                        <div id="form-cadastro-complemento">
                            <label for="cxComplemento">complemento:</label>
                            <input type="text" name="complemento" id="cxComplemento">
                        </div>

                        <div id="form-cadastro-cidade">
                            <label for="cxCidade">Cidade:</label>
                            <input readonly type="text" id="cxCidade">
                        </div>

                        <div id="form-cadastro-bairro">
                            <label for="cxBairro">Bairro:</label>
                            <input readonly type="text" id="cxBairro">
                        </div>

                        <div id="form-cadastro-UF">
                            <label for="cxUF">UF:</label>
                            <input readonly type="text" id="cxUF">
                        </div>

                        <div id="form-cadastro-pais">
                            <label for="cxPais">País:</label>
                            <input readonly type="text" id="cxPais">
                        </div>
                    </div>
                    <button type="submit">Cadastrar</button>
                    <button><a href="../index.php" style="color: white;">Voltar</a></button>
                    </form>
                </div>



            </div>
        </div>

    </main>
</body>

=======
    <title>cadastro</title>
</head>
<body>
    <main>
        <h1>Cadastrar Usuario</h1>
        <div id="form-cadastro">
            <form action="../controller/cadastrarCli.php" method="post">
                <div id="form-cadastro-nome">
                    <label for="cxNome">Nome:</label>
                    <input required type="text" name="nome" id="cxNome">
                </div>
                
                <div id="form-cadastro-sobrenome">
                    <label for="cxSobrenome">Sobrenome:</label>
                    <input required type="text" name="sobrenome" id="cxSobrenome">
                </div>
                
                <div id="form-cadastro-data_nasc">
                    <label for="cxData_nasc">Data de Nascimento:</label>
                    <input required type="date" name="data_nasc" id="cxData_nasc">
                </div>

                <div id="form-cadastro-ddd1">
                    <label for="cxDdd1">DDD</label>
                    <input maxlength="2" required type="text" name="ddd1" id="cxDdd1">
                </div>

                <div id="form-cadastro-tel1">
                    <label for="cxTel1">Celular</label>
                    <input maxlength="10" required type="text" name="tel1" id="cxTel1">
                </div>

                <div id="form-cadastro-ddd2">
                    <Strong>Opcional</Strong>
                    <label for="cxDdd1">DDD</label>
                    <input maxlength="2" type="text" name="ddd2" id="cxDdd2">
                </div>

                <div id="form-cadastro-tel2">
                    <label for="cxTel2">Celular</label>
                    <input maxlength="10" type="text" name="tel2" id="cxTel2">
                </div>

                <div id="form-cadastro-cnpj">
                    <label for="cxCNPJ">CNPJ:</label>
                    <input maxlength="18" required type="text" name="cnpj" id="cxCNPJ">
                </div>

                <div id="form-cadastro-email">
                    <label for="cxEmail">Email</label>
                    <input required type="email" name="email" id="cxEmail">
                </div>

                <div id="form-cadastro-senha">
                    <label for="cxSenha">Senha:</label>
                    <input required type="password" name="senha" id="cxSenha">
                </div>

                <h2>Cadastrar endereço</h2>

                <div id="form-cadastro-cep">
                    <label for="cxCep">CEP:</label>
                    <input maxlength="8" required type="text" name="cep" id="cxCep">
                </div>

                <div id="form-cadastro-rua">
                    <label for="cxRua">Rua:</label>
                    <input readonly type="text" id="cxRua">
                </div>

                <div id="form-cadastro-numero">
                    <label for="cxNumero">N°:</label>
                    <input required maxlength="5" type="number" name="numero" id="cxNumero">
                </div>

                <div id="form-cadastro-complemento">
                    <label for="cxComplemento">complemento:</label>
                    <input type="text" name="complemento" id="cxComplemento">
                </div>

                <div id="form-cadastro-cidade">
                    <label for="cxCidade">Cidade:</label>
                    <input readonly type="text" id="cxCidade">
                </div>

                <div id="form-cadastro-bairro">
                    <label for="cxBairro">Bairro:</label>
                    <input readonly type="text" id="cxBairro">
                </div>

                <div id="form-cadastro-UF">
                    <label for="cxUF">UF:</label>
                    <input readonly type="text" id="cxUF">
                </div>

                <div id="form-cadastro-pais">
                    <label for="cxPais">País:</label>
                    <input readonly type="text" id="cxPais">
                </div>

                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </main>
</body>
>>>>>>> 06a9cd7c860f6e7f24dd13403004e968112b3285
</html>