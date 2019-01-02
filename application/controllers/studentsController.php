<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentsController extends CI_Controller {

	public function index()
	{
		$this->load->model('studentsModel', 'sModel');

		$list['students'] = $this->sModel->load();
		$this->template->load('template/base', 'main', $list);	
	}

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
				redirect('listStudentsView','refresh');
			}else{

			$this->template->load('Template/base', 'listStudentsView');
		}
	}	

	public function editStudent(){
		$this->load->model('studentsModel', 'sModel');
		
		/*$oldData['old'] = $this->sModel->loadById($idLoad);

		  if(!empty($_POST['birthdate'])){
              $birthdate = $_POST['birthdate'];
              }else{
              $birthdate = $oldData['old']->birthdate;	
              }
          if(!empty($_POST['paymentDate'])){
              $paymentdate = $_POST['paymentDate'];
              }else{
              $paymentdate = $oldData['old']->paymentDate;	
              }
         */
        
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
              'plots' => $_POST['plots'],
              'plotsPayment' => $_POST['plotsPayment'],
              'paymentDate' => $_POST['paymentdate'],
              'birthdate' => $_POST['birthdate']
        );

		if($this->sModel->update($data)){
			redirect('listStudentsView','refresh');
		}else{
			$this->template->load('Template/base', 'listStudentsView');
		}
	}
}