  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  ?>
  <!DOCTYPE html>
  <html>

<div class="container" style="margin-top: 1em;">
    <!-- Sign up form -->
    <form>
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
                        <input id="first_name" type="text" class="form-control" placeholder="Nome">
                        <div id="first_name_feedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <input id="last_name" type="text" class="form-control" placeholder="Sobrenome">
                        <div id="last_name_feedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                       <div class="form-group col-md-2">
                        <select id="input_sex" class="form-control">
                            <option value="Man">Homem</option>
                            <option value="Women">Mulher</option>
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
                            <input type="email" class="form-control" id="email" placeholder="example@gmail.com" required>
                            <div class="email-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-form-label">Número de Telefone</label>
                            <input type="text" class="form-control" id="tel" placeholder="+51 981653932" required>
                            <div class="phone-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-form-label">Endereço</label>
                            <input type="text" class="form-control" id="address" placeholder="Rua Balbino de Freitas" required>
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
                            <input type="text" class="form-control" id="cpf" placeholder="CPF" required>
                            <div class="cpf-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password_conf" class="col-form-label">Altura</label>
                            <input type="text" class="form-control" id="height" placeholder="Altura" required>
                            <div class="height-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password_conf" class="col-form-label">Peso</label>
                            <input type="text" class="form-control" id="weight" placeholder="Peso" required>
                            <div class="weight-feedback">
                            
                            </div>
                        </div>
                             <div class="form-group">
                            <label for="password_conf" class="col-form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="birthdate" placeholder="Peso" required>
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
                        <input type="date" class="form-control" id="paymentDate" required>
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
  							<option value="money">Dinheiro</option>
  							<option value="creditCard">Cartão de Crédito</option>
  							<option value="debitCard">Cartão de Débito</option>
						</select>
                        <div class="plotsPayment-feedback"></div>
                     </div>
        		</div>        		
        	</div>
        	
        </div>
        <div style="margin-top: 1em;">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar</button>
        </div>
        </form>
</div>


  </html>