	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	?><!DOCTYPE html>
	<html lang="en">  
	    <h2 class="mb-5">Alunos</h2>

	  			<div class="row">
	  				<div class="col-10"></div>
	   				<div class="col-2">
						<a class="btn btn-success" href="<?php echo base_url('addStudents'); ?>"><i class="fas fa-user-plus"></i> Adicionar Aluno</a>
	    			</div>
	  			</div>
	  			<br>

	        <form action="/action_page.php">
	        	<div class="form-group">
   					<input type="text" class="form-control" id="searchStudentInput" placeholder="EX: Nome, CPF ou qualquer outra informação do aluno">
   					<br>
   					<button type="submit" class="btn btn-outline-primary">Pesquisar</button>
	        	</div>
			</form>
	    <table class="table">
	        <thead>
	            <tr>	
	              <th scope="col">Nome</th>
	              <th scope="col">CPF</th>
	              <th scope="col">Mensalidade</th>
	              <th scope="col">Forma de Pagamento</th>
	              <th>Ações</th>
	            </tr>
	        </thead> 
	    <tbody>
	            <?php if(!empty($students)): foreach ($students as $s): ?>
	            
	            <tr>
	            <td><?php echo $s->nome; ?></td>
	            <td><?php echo $s->cpf; ?></td>
	            <td><?php echo $s->mensalidade; ?></td>
	            <td><?php echo $s->formaPagamento; ?></td> 
	            <td>
	            	<a href="<?php echo base_url('delete/').$s->id; ?>" class="btn btn-info" data-toggle="tooltip" data-placement="right" title="Editar Cadastro de Aluno"><i class="fas fa-user-edit"></i></a>
	            	<a href="<?php echo base_url('delete/').$s->id; ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Deletar Cadastro de Aluno"><i class="fas fa-user-times"></i></a>	            		            
	            <?php endforeach; else: ?> <h2>Sem cadastros</h2><?php ; endif; ?>
	            </td>
	            </tr>
	           
	            </tbody>
	          </table>
	</html>