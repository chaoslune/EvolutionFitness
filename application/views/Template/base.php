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
  <title> <?php echo $title; ?></title>

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
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Alunos</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Evolution
            <span class="text-primary">Fitness</span>
          </h1>
          <div class="subheading mb-5">Rua Valêncio Manoel Floriano, 1000 - Vila São João, Torres, Rio Grande do Sul·
            <a>(51) 98122-3269</a>
          </div>
          
          <div class="my-auto">
          <h2 class="mb-5">Alunos</h2>

          <table class="table">
            <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Nome</th>
              <th scope="col">CPF</th>
              <th scope="col">Data de Nascimento</th>
              <th scope="col">Altura</th>
              <th scope="col">Peso</th>
              <th scope="col">Endereço</th>
              <th scope="col">Mensalidade</th>
              <th scope="col">Forma de Pagamento</th>
              <th scope="col">OBS</th>
            </tr>
            </thead> 
            <tbody>
            <?php if(!empty($students)): foreach ($students as $s): ?>
            
            <tr>
            <th scope="row"><?php echo $s->id; ?></th>
            <td><?php echo $s->nome; ?></td>
            <td><?php echo $s->cpf; ?></td>
            <td><?php echo $s->dataNascimento; ?></td>
            <td><?php echo $s->altura; ?></td>
            <td><?php echo $s->peso; ?></td>
            <td><?php echo $s->endereço; ?></td>
            <td><?php echo $s->mensalidade; ?></td>
            <td><?php echo $s->formaPagamento; ?></td>
            <td><?php echo $s->obs; ?></td>
             <a href="<?php echo base_url('delete/').$s->id; ?>"> DELETAR </a>
            <?php endforeach; else: echo 'Sem cadastros'; endif; ?>
            </tr>
           
            </tbody>
          </table>
          </div>
          <div class="social-icons">
            <a href="https://www.facebook.com/acad.evolutionfitness/">
              <i class="fab fa-facebook-f"></i>
            </a>
          </div>
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
