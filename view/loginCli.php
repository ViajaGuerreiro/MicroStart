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
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <main>
        <h1>Login do Usuario</h1>
        <div id="form-login">
            <form action="../controller/login_cli.php" method="post">
                <div id="form-login-email">
                    <label for="cxEmail">Email</label>
                    <input required type="email" name="email" id="cxEmail">
                </div>

                <div id="form-login-senha">
                    <label for="cxSenha">Senha:</label>
                    <input required type="password" name="senha" id="cxSenha">
                </div>

                <button type="submit">Login</button>
            </form>
        </div>
    </main>
</body>

</html>
