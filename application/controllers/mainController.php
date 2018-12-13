<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mainController extends CI_Controller {

	public function index()
	{	
		$list['titulo'] = 'Início';
		$this->load->view('main', $list);
	}
}
