<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentsController extends CI_Controller {

	public function index(){
		$this->load->model('studentsModel/studentsModel', 'sModel');

		$list['students'] = $this->sModel->load();
		$list['title'] = 'Início';
		$this->load->view('main', $list);
	}
	
	public function delete($id){
		$this->load->model('studentsModel/studentsModel', 'sModel');

		$this->sModel->delete($id);
		$list['title'] = 'Evolution Fitness';
		$list['students'] = $this->sModel->load();
		$this->template->load('Template/base', 'main', $list);
	}

	public function studentForm(){
		
		$rules = array(
			array(
				'field' => 'studentName',
				'label' => 'Nome',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'cpf',
				'label' => 'CPF',
				'rules' => 'trim|min_length[11]|max_length[14]|numeric'
			),
			array(
				'field' => 'birthday',
				'label' => 'Data de Nascimento',
				'rules' => 'required|regex_match[^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$]'
			),
			array(
				'field' => 'height',
				'label' => 'Altura',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'weight',
				'label' => 'Peso',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'address',
				'label' => 'Endereço',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'monthPayment',
				'label' => 'Mensalidade',
				'rules' => 'required'
			),
			array(
				'field' => 'formOfPayment',
				'label' => 'Forma de pagamento',
				'rules' => 'required'
			),
			array(
				'field' => 'obs',
				'label' => 'Observações',
				'rules' => 'trim|max_lenght[500]'
			),

		);

		$this->form_validation->set_message('cpf', 'Apenas números');
		$this->form_validation->set_rules($rules);
		
		//ADICIONAR NA VIEW DE CADASTRO DE ESTUDANTES
		/*
		Dentro do value de cada input, adicionar "<?php echo set_value('nome da variável descrita em field ali nos arrays');?>"
		Exemplo:

		<body>
			<?php echo validation_errors(); ?>
			
			<?php echo form_open('studentsForm'); ?>
			<h5> Nome </h5>
			<input type="text" name="studentName" value="<?php echo set_value('studentName'); ?>" />

		</body>
		
		Se quiser mostrar as validações individualmente em cada campo, é só adicionar <?php echo form_error('nome do campo'); ?>
		Exemplo:
		<h5> Nome </h5>
		<?php echo form_error('studentName'); ?>
		<input type="text" name="studentName" value="<?php echo set_value('studentName'); ?>" />
		*/

		if($this->form_validation->run() == FALSE)
		{	
			$data = array('name' => $this->input->post('studentName'),
              'cpf' => $this->input->post('cpf'),
              'birthday' => $this->input->post('birthday'),
              'height' => $this->input->post('height'),
              'weight' => $this->input->post('weight'),
              'address' => $this->input->post('address'),
              'monthPayment' => $this->input->post('monthPayment'),
              'formOfPayment' => $this->input->post('formOfPayment'),
              'obs' => $this->input->post('obs')
            );
			
			$this->sModel->insert($data);
			$this->load->view('studentsView/register');
		}else{
			$this->load->view('studentsView/studentsFormSuccess');
		}
	}	
}



