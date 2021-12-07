<?php
include_once("Header.php");
?>
<style>
<?php include_once("css/style.css")?>
</style>

<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem-vindo de volta!</h2>
                <p class="description description-primary">Mantenha contato conosco!</p>
                <p class="description description-primary">Entre com suas informações pessoais</p>
                <button id="signin" class="btn btn-primary">Entrar</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Crie uma conta!</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>        
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- Redes Sociais -->
                <p class="description description-second">Ou use seu e-mail para se registrar:</p>
                <form class="form">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" placeholder="Nome">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="senha" placeholder="Senha">
                    </label>
                    
                    
                    <button class="btn btn-second">Cadastrar</button>        
                </form>
            </div><!-- Segunda Coluna -->
        </div><!-- Primeiro Conteúdo -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá, é bom ver você por aqui!</h2>
                <p class="description description-primary">Insira seus dados pessoais</p>
                <p class="description description-primary">E venha empreender conosco!</p>
                <button id="signup" class="btn btn-primary">Cadastrar</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Entre aqui!</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- Redes Sociais -->
                <p class="description description-second">Ou use seu e-mail para se registrar::</p>
                <form class="form">
                
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Password">
                    </label>
                
                    <a class="password" href="#">Esqueceu sua senha?</a>
                    <button class="btn btn-second">Entre aqui!</button>
                </form>
            </div><!-- segunda coluna -->
        </div><!-- segundo conteúdo -->
    </div>
    <script src="js/app.js"></script>
</body>
</html>
