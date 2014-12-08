<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro_produtos extends CI_Controller {
	public function index(){
		autoriza();
		$this->load->helper('form');		
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('paginas/cadastro_produtos_view');
		$this->load->view('template/footer');

	}

	public function cadastrar()
	
	{
		autoriza();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome', 'nome', 'trim|required|min_length[5]|max_length[25]|xss_clean');
		$this->form_validation->set_rules('descricao', 'descricao', 'trim|required|min_length[10]|max_length[400]|xss_clean');
		$this->form_validation->set_rules('preco', 'preco', 'trim|required|xss_clean|numeric');
		$this->form_validation->set_rules('usuario_id', 'usuario_id', 'trim|required|xss_clean');

		$sucesso = $this->form_validation->run();
	if ($sucesso) {
			
			
if ($this->input->post('nome')) {
	# code...
			$produtos = array(
			'nome' => $this->input->post('nome') ,
			'descricao' => $this->input->post('descricao') ,
			'preco' => $this->input->post('preco') ,
			'usuario_id' => $this->input->post('usuario_id') 
			);

			$this->load->model('dados');
			$produto = $this->dados->cadastra_produto($produtos);	
			}
		$this->load->helper('form');		
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('paginas/cadastro_produtos_view');
		$this->load->view('template/footer');
		


		}else{

		$this->load->helper('form');		
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('paginas/cadastro_produtos_view');
		$this->load->view('template/footer');
		}
	}

}

/* End of file cadastro_produtos.php */
/* Location: ./application/controllers/cadastro_produtos.php */