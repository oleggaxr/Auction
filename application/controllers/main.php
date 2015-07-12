<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('present');
		$this->load->view('mainpagemid');
		$this->load->model('lots_model');
		$data['item']=$this->lots_model->get_lots();
		$this->load->view('lots', $data);
		$this->load->view('footer');

	}
}