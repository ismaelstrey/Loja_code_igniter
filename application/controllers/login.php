<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->helper('form');
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('paginas/login_view');
		$this->load->view('template/footer');
		
	}
	public function sair()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('sair', 'Seção incerrada com sucesso');
		redirect('/login');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */