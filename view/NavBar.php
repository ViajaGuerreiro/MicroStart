<!DOCTYPE html>
<html>
<head>
   <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="style/style.css">

   <title>MicroStart Home</title>

</head>
<body>
    <header><!--início do cabeçalho-->

      <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">
       <div class="container-fluid">

          <!--Logo-->

         <a href="../index.php" class="navbar-brand">
            <img src="" width="142"> MicroStart
         </a>
         <!--Menu Hamburguer-->
          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>


          <!-- Formulário -->
          
            <form class="form-inline">
               <span class="lupinha">
                <i class="fa fa-search form-control-icon"></i>  
               </span>
               

                <input type="text" class="form-control" placeholder="pesquisar produtos...">
                
            </form>


          <!--Aqui vou colocar os itens da navbar--->
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto ">
              
              <li class="nav-item">
                <a href="" class="nav-link active">Fornecedores</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link active">Produtos</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link active">Quem somos</a>
              </li>
              <li class="nav-item">
                <a href="LoginCadastro.php" class="btn  btn-outline-dark ml-4">Entrar</a>
              </li class="nav-item">
              <li class="nav-item">
                  <a href="#" class="navbar-brand">
              <i  class="fas fa-cart-plus ml-4" ></i>
                  </a>
              </li>
             

            </ul>
         
      </nav>
    </header><!--/fim Cabecalho -->


    <section><!-- Início seção home -->
      <div class="boxizinhos">
       </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex"><!-- Textos da seção -->
            <div class="align-center">
              <h1 class="display-4">Ache fornecedores</h1>
              <p>
               Já pensou em empreender? Essa é sua chance. Ache fornecedores de graça e sem sair de casa.
            </p>
            <p>
               É só se cadastrar e começar 
              </p>

              <form class="mt-4 mb-4">
                <div class="input-group input-group-lg">
                  
                  <div class="input-group-append">
                    <button type="button" class="btn btn-primary">Cadastre-se</button>
                  </div>
                </div>
              </form>

              <p>Disponível para
                <a href="" class="btn btn-outline-dark">
                  <i class="fab fa-android fa-lg"></i>
                </a>
                <a href="" class="btn btn-outline-dark">
                  <i class="fab fa-apple"></i>
                </a>
              </p>

            </div>
          </div><!--/fim textos da seção -->
          <div class="col-md-6 d-none d-md-block">
            <img src="Imagens/capa-mulher.png">
          </div>
        </div>
      </div>
    </section><!--/fim seção home -->

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>