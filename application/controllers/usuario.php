<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {
	public function index()
	{
		$this->output->enable_profiler(TRUE);
		$this->load->model('usuarios_model');
		$usuarios = $this->usuarios_model->ler_todos_usuarios();
		$dados = array('usuarios'=>$usuarios);	
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('paginas/usuario_view',$dados);
		$this->load->view('template/footer');
	}
	public function cadastro_usuario()
	{
		$this->load->model('usuarios_model');
		// $value = $this->usuarios_model->tipo('id');
		// $type = $this->usuarios_model->tipo('nome_tipo');

		// $dados = array('value' => $value,'type'=>$type);
		$this->load->helper('form');		
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('paginas/cadastro_usuario_view');
		$this->load->view('template/footer');
	}

	public function novo_usuario()
	{
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome', 'nome', 'trim|required|min_length[5]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('email', 'email', 'trim|required|min_length[5]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('cidade', 'cidade', 'trim|required|min_length[5]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('senha', 'senha', 'trim|required|min_length[5]|max_length[30]|xss_clean');
		$this->form_validation->set_error_delimiters('<spam class=" alert-danger">','</spam>');
		$validacao = $this->form_validation->run();
		if ($validacao) {
			# code...
		
		$usuario = array(

			'nome' => $this->input->post("nome"),		
			'email' => $this->input->post("email"),
			'cidade' => $this->input->post("cidade"),
			'senha' => md5($this->input->post("senha"))

			//'senha_r' => md5($this->input->post("senha_r"));

);
		//$this->output->enable_profiler(TRUE);		
		$this->load->model('usuarios_model');
		$this->usuarios_model->salvar($usuario);
		redirect('usuario/cadastro_usuario');
	}else{
		$this->load->helper('form','form_validation');		
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('paginas/cadastro_usuario_view');
		$this->load->view('template/footer');
}
}

	 public function editar_usuario()
	{

		//$this->output->enable_profiler(TRUE);
		$this->load->model('usuarios_model');		
		$id = $this->uri->segment(3);
		$usuarios = $this->usuarios_model->buscaUm($id);
		$dados = array('usuarios' =>$usuarios);
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('paginas/editar_usuario_view',$dados);
		$this->load->view('template/footer');	
	}
	public function del_usuario()
	{
		
		//$this->output->enable_profiler(TRUE);	
		$this->load->model('usuarios_model');
		$id = $this->uri->segment(3);		
		$deletado = $this->usuarios_model->deleta_usuario($id);
		redirect('usuario')	;
		
		
		
	}
	public function update_usuario()
	{


		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome', 'nome', 'trim|required|min_length[5]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('email', 'email', 'trim|required|min_length[5]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('cidade', 'cidade', 'trim|required|min_length[5]|max_length[30]|xss_clean');
		//$this->form_validation->set_rules('senha', 'senha', 'trim|required|min_length[5]|max_length[30]|xss_clean');
		$this->form_validation->set_error_delimiters('<spam class=" alert-danger">','</spam>');
		$validacao = $this->form_validation->run();
		if ($validacao) {
			# code...
		
		$dados = array(

			'nome' => $this->input->post("nome"),		
			'email' => $this->input->post("email"),
			'cidade' => $this->input->post("cidade"),
			'senha' => md5($this->input->post("senha"))

		);	

		$this->load->model('usuarios_model');		
		$id = $this->uri->segment(3);
		$usuarios = $this->usuarios_model->update($id,$dados);
		$this->session->set_flashdata('success', '<p class="alert alert-success">Usaurio atualizado com sucesso</p>');
		redirect('/usuario/editar_usuario/'.$id);
	}}
}

/* End of file usuario.php 96688237*/
/* Location: ./application/controllers/usuario.php */