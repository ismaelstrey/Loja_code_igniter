<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro_usuario extends CI_Controller {

	public function index()
	autoriza();
	{
		$this->load->helper('form');		
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('paginas/cadastro_usuario_view');
		$this->load->view('template/footer');
	}

}

/* End of file cadastro_usuario.php */
/* Location: ./application/controllers/cadastro_usuario.php */