  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  ?><!DOCTYPE html>
  <html lang="en">

    <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Evolution Fitness </title>

    <!-- CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/resume.min.css');?>" rel="stylesheet">

    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">

    </head>

   <body id="page-top">

      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <span class="d-block d-lg-none">Evolution Fitness</span>
          <img src="https://uploaddeimagens.com.br/images/001/787/787/full/15391201_675640959270945_499002719872594017_n.jpg?1545192073" class="rounded navbar-brand img-profile">
        </a>

        <h2 class="navheadere">Evolution
              <span class="navheaderf">Fitness</span>
        </h2>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <div>
                <!-- <a class="nav-link js-scroll-trigger" href="">Página Inicial</a> -->
                <a class="nav-link js-scroll-trigger" href="<?php echo base_url('listStudents'); ?>">Alunos</a>
                <!-- <a class="nav-link js-scroll-trigger" href="">Relatórios</a> -->
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid p-0">

        <section class="resume-section p-3 p-lg-5" id="about">
          <div class="my-auto">       
            <?php echo $contents; ?>
          </div>
        </section>
        


        <hr class="m-0">

      </div>

    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.easing.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/resume.min.js');?>"></script>

    </body>


  </html>
