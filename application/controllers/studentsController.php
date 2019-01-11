<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentsController extends CI_Controller {

	public function listStudentsLoadView()
	{
		$this->load->model('studentsModel', 'sModel');
		$list['students'] = $this->sModel->load();
		$this->template->load('Template/base', 'listStudentsView', $list);
	}

	public function addStudentsLoadView()
	{
		$this->template->load('Template/base', 'addStudentsView');
	}

	public function editStudentsLoadView($id)
	{	
		$idLoad = $id;
		$this->load->model('studentsModel', 'sModel');
		$list['student'] = $this->sModel->loadById($idLoad);
		$this->template->load('Template/base', 'editStudentsView', $list);
	}

	public function delete($id){
		$this->load->model('studentsModel', 'sModel');

		$this->sModel->delete($id);
		$list['students'] = $this->sModel->load();
		$this->template->load('Template/base', 'listStudentsView', $list);
	}

	public function addStudent(){
		$this->load->model('studentsModel', 'sModel');
			$data = array (
			  'firstName' => $_POST['first_name'],
			  'lastName' => $_POST['last_name'],
			  'sex' => $_POST['input_sex'],
			  'email' => $_POST['email'],
			  'tel' => $_POST['tel'],
			  'address' => $_POST['address'],
              'cpf' => $_POST['cpf'],
              'height' => $_POST['height'],
              'weight' => $_POST['weight'],
              'birthdate' => $_POST['birthdate'],
              'paymentDate' => $_POST['paymentDate'],
              'plots' => $_POST['plots'],
              'plotsPayment' => $_POST['plotsPayment']
            );

			if($this->sModel->insert($data)){
				$this->template->load('Template/base', 'listStudentsView');
			}else{
				$this->template->load('Template/base', 'listStudentsView');
			}
	}	

	public function editStudent($data){
		$this->load->model('studentsModel', 'sModel');
	

		if($this->sModel->update($data)){
			$this->template->load('Template/base', 'listStudentsView');
		}else{
			$this->template->load('Template/base', 'listStudentsView');
		}
	}
}