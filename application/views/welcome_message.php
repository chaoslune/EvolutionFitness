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
  <title> <?php echo $titulo; ?></title>

	<link href="<?php echo base_url('assets/css/bootstrap.min');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/signin');?>" rel="stylesheet">
	<script src="<?php echo base_url('assets/js/jquery-3.3.1.slim.min');?>"></script>
	<script src="<?php echo base_url('assets/js/popper.min');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min');?>"></script>
</head>

<body class="text-center">
<?php
  echo form_open('loginController/login/$inputUser/$inputPassword', 'class="form-signin" id="form"');
    echo '<h1 class="h3 mb-3 font-weight-normal"> Login </h1>';
    echo form_label('Usuário', 'inputUser', 'class="sr-only"');
    echo form_input(array("name" => "inputUser", "id" =>"inputUser", "class" => "form-control", "placeholder" => "Usuário"));
    echo form_label('Senha', 'inputPassword', 'class="sr-only"');
    echo form_password(array("name" => "inputPassword", "id" => "inputPassword", "class" => "form-control", "placeholder" => "Senha"));
    echo '<div class="checkbox mb-3">';
    echo form_checkbox("Lembrar-me", "lembrar", FALSE); echo 'Lembrar-me';
    echo '</div>';
    echo form_submit('logar', 'Logar', 'class="btn btn-lg btn-primary btn-block"');
    echo '<p class="mt-5 mb-3 text-muted">&copy; 2018-20xx</p>';
  echo form_close();
?>
</body>
</html>