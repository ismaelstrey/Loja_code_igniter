<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logar extends CI_Controller {

	public function index()
	{
		
	}
	public function autenticar(){
		$this->load->model('usuarios_model');
		$this->load->helper('form');
		$email = $this->input->post("email");
		$senha = md5($this->input->post("senha"));
		$usuario = $this->usuarios_model->busca_email_e_senha($email,$senha);
		if ($usuario) {
			$this->session->set_userdata("usuario_logado",$usuario);
			$this->session->set_flashdata("success", 'Logado com sucesso');
			redirect('/produtos');
				
		}else{
			$this->session->set_flashdata("error", 'Usuário ou senha inválidos');
			//$this->output->set_content_type('application/json');

		}
		// $this->load->view('template/header');
		// $this->load->view('template/navbar');
		// $this->load->view('paginas/produtos');
		// $this->load->view('template/footer');
		
	}

}

/* End of file logar.php */
/* Location: ./application/controllers/logar.php */