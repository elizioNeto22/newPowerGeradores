<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Automação - New Power Grupos Geradores</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Whatsapp css -->
  <link rel="stylesheet" href="assets/css/whatsapp.css" rel="stylesheet"/>  
</head>

<body>

   <!-- ======= Mobile nav toggle button ======= -->
  <style type="text/css">

    body{
      background: #fff;
    }

    .mobile-nav-toggle i {
      color: #222c3a;
  }
  .mobile-nav-active .mobile-nav-toggle i {
      color: #182135;
  }
  #header .profile img {
      margin: 15px 0!important;
      display: block;
      width: 179px;
      border: 0;
  }
  .mobile-nav-toggle {     
    right: 24px;
    top: 26px;
  }
  </style>
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <style type="text/css">
    #header {     
      -webkit-box-shadow: 3px 0px 3px 0px rgba(0,0,0,0.31);
      -moz-box-shadow: 3px 0px 3px 0px rgba(0,0,0,0.31);
      box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);

          background-size: 100%;
          background: #ffffff;  
    background-position: bottom;
    background-image: url(assets/img/bg-footer2.png);
    background-repeat: no-repeat;
  }
    #header .profile img {
      margin: 15px auto;
      display: block;
      width: 220px;
      border: 0;
  }

  #header {     
          
  }

  .profile-mobile img{
    width: 230px;
  }

  #nav-box{
    position: relative;
      top: 21px;
  }

  @media (max-width: 768px) {
  .profile-mobile {         
      z-index: 111;
      width: 100%;
      position: fixed;
      top: 0px;
      left: 0px;
      background: #ffffff;

      -webkit-box-shadow: 0px 3px 3px 0px rgba(0,0,0,0.31);
    -moz-box-shadow: 0px 3px 3px 0px rgba(0,0,0,0.31);
    box-shadow: 0px 3px 3px 0px rgba(0,0,0,0.31);
    }

    .profile-mobile img {
        width: 180px!important;
    }
    #nav-box{
      position: relative;
        top: 83px!important;
    }
  }

  section.border-bottom{
    border-bottom: 1px solid #e21d2438;
  }
  </style>
  <header id="header" style="overflow: hidden;">
    <div class="d-flex flex-column" id="nav-box">

      <div class="profile-mobile">
        <a href="index.php">
        <img src="assets/img/logo1.jpg" alt="" class="img-fluid ml-3 my-2">
        </a>        
      </div>

      <style type="text/css">
        .nav-menu a {
        color: #182135;    
    }
    
    .nav-menu a i {       
        color: #d71a1f8f;
    }
    .nav-menu a:hover i, .nav-menu .active > a i, .nav-menu li:hover > a i {
        color: #d11f24;
    }
    .nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
        text-decoration: none;
        color: #d91f24;
    }

    .card {     
        border: 0!important;        
    }
    .card-header {
        background-color: transparent!important;        
    }

    .nav-menu {
        padding-top: 9px;
    }
      </style>
      <nav class="nav-menu">
        <ul>
          <li><a href="index.php"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="index.php#sobre"><i class='bx bxs-user-badge'></i> <span>Sobre</span></a></li>
          
          <div class="accordion d-lg-block d-none" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <a id="button" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 <i class="icofont-gears"></i> Serviços <i id="icone" class="icofont-rounded-down pl-1"></i>

                 <script>
                    var clique = document.getElementById("button");
                    var icon = document.getElementById("icone");
                  
                  clique.onclick = function (e) {
                      e.preventDefault();
                      icon.classList.toggle('icofont-rounded-up');
                  };
                  </script>
                </a>
              </h5>
            </div>

            <style type="text/css">
              #collapseOne {
                  /*box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);*/
              }
            </style>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body ml-4 ml-lg-4">
                <div class="row">
                  <div class="col-aut">
                    <img  style="float: left;" src="assets/img/icon-submenu.png" class="" width="50">
                  </div>
                  <div class="col">
                    <li><a href="manutencao.php" class="py-2 mb-0 pl-0"><i class='bx bx-wrench'></i> <span>Manutenção</span></a></li>
                  </div>
                </div>
                <div class="row">
                  <div class="col-aut">
                    <img  style="float: left;" src="assets/img/icon-submenu.png" class="" width="50">
                  </div>
                  <div class="col">
                    <li class="active"><a href="#" class="py-2 mb-0 pl-0"><i class="icofont-gears"></i> <span>Automação</span></a></li>
                  </div>
                </div>
                <div class="row">
                  <div class="col-aut">
                    <img  style="float: left;" src="assets/img/icon-submenu.png" class="" width="50">
                  </div>
                  <div class="col">
                    <li><a href="quadro-de-comando.php" class="py-2 mb-0 pl-0"><i class="icofont-server"></i> <span>Quadro de Comando</span></a></li>
                  </div>
                </div>
                <div class="row">
                  <div class="col-aut">
                    <img  style="float: left;" src="assets/img/icon-submenu2.png" class="" width="50">
                  </div>
                  <div class="col">
                    <li><a href="instalacao.php" class="py-2 mb-0 pl-0"><i class="icofont-tools-alt-2"></i> <span>Instalação</span></a></li>
                  </div>
                </div>                                          
              </div>
            </div>

          </div>
                    
        </div>

        <div class="accordion d-lg-none d-block" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <a id="button" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 <i class="icofont-gears"></i> Serviços <i id="icone" class="icofont-rounded-down pl-1"></i>

                 <script>
                    var clique = document.getElementById("button");
                    var icon = document.getElementById("icone");
                  
                  clique.onclick = function (e) {
                      e.preventDefault();
                      icon.classList.toggle('icofont-rounded-up');
                  };
                  </script>
                </a>
              </h5>
            </div>

            <style type="text/css">
              #collapseOne {
                  /*box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);*/
              }
            </style>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body ml-4 ml-lg-4">
                <div class="row">
                  <div class="col-aut">
                    <img  style="float: left;" src="assets/img/icon-submenu.png" class="" width="50">
                  </div>
                  <div class="col">
                    <li><a href="manutencao.php" class="py-2 mb-0 pl-0"><i class='bx bx-wrench'></i> <span>Manutenção</span></a></li>
                  </div>
                </div>
                <div class="row">
                  <div class="col-aut">
                    <img  style="float: left;" src="assets/img/icon-submenu.png" class="" width="50">
                  </div>
                  <div class="col">
                    <li class="active"><a href="#" class="py-2 mb-0 pl-0"><i class="icofont-gears"></i> <span>Automação</span></a></li>
                  </div>
                </div>
                <div class="row">
                  <div class="col-aut">
                    <img  style="float: left;" src="assets/img/icon-submenu.png" class="" width="50">
                  </div>
                  <div class="col">
                    <li><a href="quadro-de-comando.php" class="py-2 mb-0 pl-0"><i class="icofont-server"></i> <span>Quadro de Comando</span></a></li>
                  </div>
                </div>
                <div class="row">
                  <div class="col-aut">
                    <img  style="float: left;" src="assets/img/icon-submenu2.png" class="" width="50">
                  </div>
                  <div class="col">
                    <li><a href="instalacao.php" class="py-2 mb-0 pl-0"><i class="icofont-tools-alt-2"></i> <span>Instalação</span></a></li>
                  </div>
                </div>                                          
              </div>
            </div>

          </div>
                    
        </div>

        

        

          <li><a href="index.php#projetos"><i class="icofont-image"></i> <span>Projetos</span></a></li>          
          <li><a href="produtos.php"><i class="icofont-listine-dots"></i> <span>Produtos</span></a></li>          
          <li><a href="index.php#acoes"><i class='bx bx-donate-heart'></i> <span>Ações</span></a></li>          

          <li><a href="#" data-toggle="modal" data-target="#modal-orcamento"><i class="icofont-tasks"></i> Orçamento</a></li>
          
          <li><a href="index.php#contato"><i class="bx bx-envelope"></i> Contato</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  
<style type="text/css">
  @media (max-width: 1199px){
    #main {
          margin-left: 0;
          margin-top: 58px;
      }
    }

    #main .section-title h2 {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 0px;
        padding-bottom: 20px;
        position: relative;
        color: #182135;
    }

    .about .content h3 {       
        color: #182135!important;
    }

    .section-title {
        padding-bottom: 0;
    }
    a {
        color: #173b6c;
    }
    a:hover {
        color: #e21d24;
        text-decoration: none;
    }
</style>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs px-3 px-lg-5 pt-lg-5">
      <div class="container pt-4 pt-lg-0">

        <div class="d-flex justify-content-between align-items-center">
           <div class="section-title">
            <h2>Automação</h2>                    
          </div>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Automação</li>
          </ol>
        </div>

      </div>

    </section><!-- End Breadcrumbs -->


    <section id="produtos" class="about px-3 px-lg-5 pt-2 pt-lg-0 border-bottom">
      <div class="container pt-2 pt-lg-3">

        <div class="section-title">         
          <p class="text-justify">O procedimento da automação de grupos geradores funciona como um mecanismo de monitoramento da rede elétrica do estabelecimento, fazendo com que os mesmos comecem a funcionar de forma automática, dentro de segundos após a interrupção na rede de energia elétrica, ou seja, será dispensada a intervenção humana para que os grupos geradores comecem a funcionar.</p>          
        </div>


        <div class="row">
          <div class="col-12 pt-3" data-aos="fade-right">            

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/produtos/produtos-5.jpg" alt="Primeiro Slide" style="border-radius: 11px;">
                  </div>
                  <!-- <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/produtos/produtos-2.jpg" alt="Segundo Slide" style="border-radius: 11px;">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/produtos/produtos-4.jpg" alt="Terceiro Slide" style="border-radius: 11px;">
                  </div>
                </div> -->
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Próximo</span>
                </a>
              </div>  

          </div>

          <section id="cta" class="cta mt-4 w-100" data-aos="fade-right">
              <div class="container aos-init aos-animate" data-aos="zoom-in">
                <div class="text-center">
                  <h3>Somos revendedores de todas as marcas de Grupo Gerador
                  </p>                  
                </div>
              </div>
          </section>

          <div class="col-12 mt-4 pt-lg-0 content" data-aos="fade-left">
            
            <p class="font-italic text-justify">
                Isso traria otimização à sua empresa de tal forma que o abastecimento de energia se manteria de maneira contínua até o restabelecimento da rede elétrica, não havendo, desta forma, danos em aparelhos ou pausas na produção da sua empresa.
            </p>
            <p class="text-justify">
                Uma automação no grupo de geradores tira o risco do e interrompimento do funcionamento do seu negócio e empresa, fazendo com que você perca um dia produtivo e de grandes resultados.
            </p>
            <p class="text-justify">
                Nós, da New Power, trabalhamos para que isso não ocorra na sua empresa, fazemos a automação de grupo de gerador de modo que ele não precise de funcionário da empresa para acioná-lo.
            </p>                    
            
        </div>

        <style>
        #cta {
            /* background: #182135; */
            border: 1px solid #ddd;
        }
        .cta a {
            background: #050d18;
            border: 0;
            padding: 10px 24px;
            color: #fff;
            transition: 0.4s;
            border-radius: 4px;
        }
        .cta a:hover {
            background: #e21d24;
        }
        </style>
        <section id="cta" class="cta mt-4" data-aos="fade-right">
            <div class="container aos-init aos-animate" data-aos="zoom-in">
              <div class="text-center">
                <h3>Atendimento personalizado de alto nível desde o primeiro contato.</h3>
                <p>Nossa equipe está pronta para realizar manutenções em geradores de todas as marcas, com
excelente custo/benefício. Como também assumimos a intermediação na aquisição de peças e
suprimentos.
                </p>
                <a class="cta-btn" href="orcamento.php">Solicitar Orçamento</a>
              </div>
            </div>
          </section>

      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <style type="text/css">
    #footer {
     
      font-size: 11px;
      position: fixed;
      left: 0;
      bottom: 0;
      width: 300px;
      height: 122px;
      z-index: 11111;
     
      
  }
  #footer .credits {
      
      font-size: 11px;
      color: #ffffff;
  }
  .section-title h2 {     
      color: #182135;
  }
  .section-title h2::after {      
      background: #e21d24;      
  }
  footer a {
      color: #162035;
  }

  @media (max-width: 768px) { 
    #footer {
      position: relative;
      width: 100%;
      z-index: 0;
    }
  }

  #footer .bx {    
    font-size: 27px;
    
    padding: 0 10px;
  }
    .social-links{
      height: 77px;
    }
  </style>
  <footer id="footer">
    <div class="container">
      <div class="social-links mt-3 text-center d-flex align-items-end justify-content-center">          
        <a target="_blank" href="https://www.facebook.com/New-Power-Grupos-Geradores-101461828493405" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a target="_blank" href="https://www.instagram.com/manutencaodegeradores/" class="instagram"><i class="bx bxl-instagram"></i></a>        
        <!--<a target="_blank" href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
        </div>
    </div>
  </footer><!-- End  Footer -->

  <style type="text/css">
    .back-to-top {
      background: #050d18;
    }
    .back-to-top:hover {
      background: #e21d24;
  }
  </style>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <a class="wa" href="#" data-toggle="modal" data-target="#modalZap"><img src="assets/img/ico-whatsapp.png" alt="WhatsApp"></a>


<!-- ======= Modals ======= -->
<?php include "modals.php"; ?> 

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
