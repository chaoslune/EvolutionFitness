<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mainController extends CI_Controller {

	public function index()
	{
		$list['title'] = "Evolution Fitness";
		$this->template->load('template/base', 'main', $list);	
	}
}
