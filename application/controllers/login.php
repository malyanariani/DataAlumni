<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$this->load->view('login_view');
	}

	public function getlogin()
	{
		$nama = $this->input->post('nama');
		$pass = $this->input->post('pass');
		$this->load->model('login_model');
		$this->login_model->getlogin($nama,$pass);
	}
}