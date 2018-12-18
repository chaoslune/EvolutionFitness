<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mainController extends CI_Controller {
	
	public function index()
	{	

		$this->load->model('studentsModel/studentsModel', 'sModel');

		$list['students'] = $this->sModel->load();
		$list['title'] = "Evolution Fitness";
		$this->template->load('template/base', 'main', $list);	
	}
}
