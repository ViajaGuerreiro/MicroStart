<?php

session_start();
Include_once '../controller/verificaLogado.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Entrar</title>
</head>

<body style="background: -webkit-linear-gradient(to left, rgb(153, 206, 255), rgb( 233, 243, 250));

background: linear-gradient(to left,rgb(153, 206, 255), rgb( 233, 243, 250));">
    <main>
        <div class="container" id="container">

            <div class="form-container sign-in-container">
                <form action="../controller/login_cli.php" method="post">
                    <h1 class="titulo">MicroStart</h1>
                    <div id="form-login-email">
                        <label for="cxEmail">Email</label>
                        <input required type="email" name="email" id="cxEmail">
                    </div>
                    <div id="form-login-senha">
                        <label for="cxSenha">Senha:</label>
                        <input required type="password" name="senha" id="cxSenha">
                    </div>
                    <button type="submit">Entrar</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">
                        <h1>Seja Bem-Vindo!</h1>
                        <p>Caso ainda não tenha uma conte, crie aqui!</p>
                        <a href="../view/cadastrarCli.php"><button class="ghost" id="signUp">Cadastrar</button></a>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>

</html>

<style>
        
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');


    body {
        background: #f6f5f7;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-family: 'Montserrat', sans-serif;
        height: 100vh;
        margin: -20px 0 50px;
    }

    h1 {
        font-weight: bold;
        margin: 0;
    }

    h1.titulo{

    }

    h2 {
        text-align: center;
    }

    p {
        font-size: 14px;
        font-weight: 100;
        line-height: 20px;
        letter-spacing: 0.5px;
        margin: 20px 0 30px;
    }

    span {
        font-size: 12px;
    }

    a {
        color: #333;
        font-size: 14px;
        text-decoration: none;
        margin: 15px 0;
    }

    button {
        border-radius: 20px;
        border: 1px solid rgb( 71, 138, 201);
        background-color: rgb( 71, 138, 201);
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;
    }

    button:active {
        transform: scale(0.95);
    }

    button:hover {
        border: 2px solid rgb( 100, 187, 250);
        box-shadow: 2px 5px 8px rgba(0,0,0,0.25);
    }

    button:focus {
        outline: none;
    }

    button.ghost {
        background-color: transparent;
        border-color: #FFFFFF;
    }

    form {
        background-color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 50px;
        height: 100%;
        text-align: center;
    }

    input {
        background-color: #eee;
        border: none;
        padding: 12px 15px;
        margin: 8px 0;
        border-radius: 20px;
        width: 100%;
    }

    .container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
                0 10px 10px rgba(0,0,0,0.22);
        position: relative;
        overflow: hidden;
        width: 768px;
        max-width: 100%;
        min-height: 480px;
    }

    .form-container {
        position: absolute;
        top: 0;
        height: 100%;
        transition: all 0.6s ease-in-out;
    }

    .sign-in-container {
        left: 0;
        width: 50%;
        z-index: 2;
    }

    .sign-up-container {
        left: 0;
        width: 50%;
        opacity: 0;
        z-index: 1;
    }

    .overlay-container {
        position: absolute;
        top: 0;
        left: 50%;
        width: 50%;
        height: 100%;
        overflow: hidden;
        transition: transform 0.6s ease-in-out;
        z-index: 100;
    }

    .overlay {
        background: rgb( 71, 138, 201);
        background: -webkit-linear-gradient(to left, rgb( 71, 138, 201), rgb( 233, 243, 250));
        background: linear-gradient(to left, rgb( 71, 138, 201), rgb( 233, 243, 250));
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 0 0;
        color: #FFFFFF;
        position: relative;
        left: -100%;
        height: 100%;
        width: 200%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .overlay-panel {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 40px;
        text-align: center;
        top: 0;
        height: 100%;
        width: 42%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .overlay-right {
        right: 0;
        transform: translateX(0);
    }

</style>