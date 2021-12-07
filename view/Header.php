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

   <title>MicroStart</title>

</head>
<body>
 <header><!--início do cabeçalho-->
      <nav class="navbar navbar-expand-sm navbar-dark fixed-top "  style="background-image: linear-gradient(315deg, #ff4e00 0%, #ec9f05 74%);"> 
       <div class="container-fluid">
          <!--Logo-->
         <a href="index.php" class="navbar-brand">
            <img src="imagens/logo.png"  width="300" heigth="200"> 
         </a>
         <!--Menu Hamburguer-->
          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Formulário -->
          
            <form class="form-inline input-group w-auto my-auto">
                <input autocomplete="off" type="search" class="form-control rounded" placeholder="Pesquisar produtos..."
            style="width: 500px"  />
          <span class="input-group-text border-0 d-none d-md-flex"><i class="fas fa-search"></i></span>
               
               
                
            </form>
          <!--Aqui vou colocar os itens da navbar--->
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto ">
              
              

              <!--carrinho-->
              <li class="nav-item me-3 me-lg-0">
          <a class="nav-link active" href="#">
            <span class="btn-outline-dark"><i class="fa fa-shopping-cart"></i></span>
            <span class="badge rounded-pill badge-notification bg-danger">1</span>
          </a>
        </li>

              <li class="nav-item">
                <a href="Anunciar.php" class="btn btn-outline-dark ml-4">Anunciar</a>
              </li>

        
              <li class="nav-item">
                <a href="FornecedorCliente.php" class="btn  btn-outline-dark ml-4">Entrar</a>
              </li class="nav-item">

              
        
             
            </ul>
         
      </nav>
    </header><!--/fim Cabecalho -->







  <!----
 >
  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" style="background-color:  #0000ff;">
    <div class="container-fluid justify-content-center justify-content-md-between">
      <div class="d-flex my-2 my-sm-0">
        <a class="navbar-brand me-2 mb-1 d-flex justify-content-center" href="#">
          <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="20" alt=""
            loading="lazy" />
        </a>

        
        <form class="d-flex input-group w-auto my-auto">
          <input autocomplete="off" type="search" class="form-control rounded" placeholder="Search"
            style="min-width: 125px" />
          <span class="input-group-text border-0 d-none d-md-flex"><i class="fas fa-search"></i></span>
        </form>
      </div>

      <ul class="navbar-nav flex-row">
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#" role="button" data-mdb-toggle="sidenav" data-mdb-target="#sidenav-1"
            class="btn shadow-0 p-0 me-3" aria-controls="#sidenav-1" aria-haspopup="true">
            <i class="fas fa-bars me-1"></i>
            <span>Categories</span>
          </a>
        </li>
       
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#">
            <span><i class="fas fa-shopping-cart"></i></span>
            <span class="badge rounded-pill badge-notification bg-danger">1</span>
          </a>
        </li>
        wn -
        <li class="nav-item dropdown me-3 me-lg-0">
          <a class="nav-link dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button"
            data-mdb-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-bell"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Some news</a></li>
            <li><a class="dropdown-item" href="#">Another news</a></li>
            <li>
              <a class="dropdown-item" href="#">Something else here</a>
            </li>
          </ul>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#">
            <span class="d-none d-lg-inline-block">Contact</span>
            <i class="fas fa-envelope d-inline-block d-lg-none"></i>
          </a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#">
            <span class="d-none d-lg-inline-block">Shop</span>
            <i class="fas fa-shopping-bag d-inline-block d-lg-none"></i>
          </a>
        </li>
        <!-- Avatar 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink"
            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="22"
              alt="" loading="lazy" />
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">My profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar -->
