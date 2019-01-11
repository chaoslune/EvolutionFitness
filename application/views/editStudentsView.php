  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  ?>
  <!DOCTYPE html>

<?php
    $this->load->model('studentsModel', 'sModel');  
    foreach ($student as $s) ;
    if(isset($_POST['update'])){

    $data = array (
        'firstName' => $_POST['first_name'],
        'lastName' => $_POST['last_name'],
        'email' => $_POST['email'],
        'tel' => $_POST['tel'],
        'address' => $_POST['address'],
        'cpf' => $_POST['cpf'],
        'height' => $_POST['height'],
        'weight' => $_POST['weight'],
        'birthdate' => $_POST['birthdate'],
        'paymentDate' => $_POST['paymentDate'],
        'sex' => $_POST['input_sex'],
        'plots' => $_POST['plots'],
        'plotsPayment' => $_POST['plotsPayment']
   );
   $this->db->update('alunos', $data, "id = ".$s->id);
   redirect('listStudents','refresh');
        
}
?>

<html>

<div class="container" style="margin-top: 1em;">
    <!-- Sign up form -->
   
    <?php $pDate = date("d/m/Y", strtotime($s->paymentDate));
    $bDate = date("d/m/Y", strtotime($s->birthdate));    
    ?>

    <?php echo form_open(''); ?>   

        <!-- Sign up card -->
        <div class="card person-card">
            <div class="card-body">
                <!-- Sex image -->
                <img id="img_sex" class="person-img"
                    src="https://visualpharm.com/assets/217/Life%20Cycle-595b40b75ba036ed117d9ef0.svg">
                <h2 id="who_message" class="card-title">ALTERAÇÃO DE CADASTRO</h2>
                <!-- First row (on medium screen) -->
                <div class="row">
                    <div class="form-group col-md-5">

                        <input id="first_name" name="first_name" type="text" class="form-control" value="<?php echo $s->firstName; ?>" >
                        <div id="first_name_feedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <input id="last_name" name="last_name" type="text" class="form-control" value="<?php echo $s->lastName; ?>">
                        <div id="last_name_feedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                      <div class="form-group col-md-2">
                        <select name="input_sex" class="form-control">
                            <option value="Homem">Homem</option>
                            <option value="Mulher">Mulher</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6" style="padding=0.5em;">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Contatos</h2>
                        <div class="form-group">
                            <label for="email" class="col-form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $s->email; ?>" required>
                            <div class="email-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-form-label">Número de Telefone</label>
                            <input type="text" class="form-control" id="tel" name="tel" value="<?php echo $s->tel; ?>" required>
                            <div class="phone-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-form-label">Endereço</label>
                            <input type="text" class="form-control" id="address" name="address" value="<?php echo $s->address; ?>" required> 
                            <div class="address-feedback">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="col-md-6">
                <div class="card"> 
                    <div class="card-body">
                        <h2 class="card-title">Dados Pessoais</h2>
                        <div class="form-group">
                            <label for="password" class="col-form-label">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $s->cpf; ?>" required>
                            <div class="cpf-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password_conf" class="col-form-label">Altura</label>
                            <input type="text" class="form-control" id="height" name="height" value="<?php echo $s->height; ?>" required>
                            <div class="height-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password_conf" class="col-form-label">Peso</label>
                            <input type="text" class="form-control" id="weight" name="weight" value="<?php echo $s->weight; ?>" required>
                            <div class="weight-feedback">
                            
                            </div>
                        </div>
                             <div class="form-group">
                            <label for="password_conf" class="col-form-label">Data de Nascimento</label>
                            <input type="text" class="form-control" id="birthdate" name="birthdate" value="<?php echo date($bDate); ?>" required>
                            <div class="birthdate-feedback">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        		
        </div>
        	<div class="card">
        		<div class="card-body">
        		<h2 class="card-title">INFORMAÇÕES DE PAGAMENTO</h2>	
                    <div class="form-group">
                        <label for="password_conf" class="col-form-label">Data de Pagamento</label>
                        <input type="text" class="form-control" id="paymentDate" name="paymentDate" value="<?php echo date($pDate); ?>" required>
                        <div class="paymentDate-feedback"></div>
                     </div>

                    <div class="form-group">
                        <label for="password_conf" class="col-form-label">Número de Mensalidades Pagas</label><br>
                        <select name="plots" class="form-control">
                        	<option></option>
  							<option value="1">1</option>
  							<option value="2">2</option>
  							<option value="3">3</option>
  							<option value="4">4</option>
  							<option value="5">5</option>
  							<option value="6">6</option>
  							<option value="7">7</option>
  							<option value="8">8</option>
  							<option value="9">9</option>
  							<option value="10">10</option>
  							<option value="11">11</option>
  							<option value="12">12</option>
						</select>
                        <div class="plots-feedback"></div>
                     </div>
                    <div class="form-group">
                        <label for="password_conf" class="col-form-label">Forma de Pagamento</label>
						<select name="plotsPayment" class="form-control" required>
							<option></option>
  							<option value="Dinheiro">Dinheiro</option>
  							<option value="Cartão de Crédito">Cartão de Crédito</option>
  							<option value="Cartão de Débito">Cartão de Débito</option>
						</select>
                        <div class="plotsPayment-feedback"></div>
                     </div>
        		</div>        		
        	</div>
        	
        </div>
        <div style="margin-top: 1em;">
            <button type="submit" name="update" class="btn btn-primary btn-lg btn-block">Atualizar</button>
        </div>

      <?php echo form_close(); ?>
</div>

<script type="text/javascript">
$('#first_name').find('input:text').attr("type","date");
</script>

</html>