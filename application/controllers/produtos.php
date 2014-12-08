<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function index()
	{
		//$this->output->enable_profiler(TRUE);
		$this->load->helper('currency_helper');		
		$this->load->model('produtos_model');
		$produtos = $this->produtos_model->buscaTodos();

		$dados = array('produtos' =>$produtos);		
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view("paginas/produtos", $dados);
		$this->load->view('template/footer');
	}
	 public function del_produto()
	{
		$this->output->enable_profiler(TRUE);
		$this->load->model('produtos_model');
		//$id = $this->input->get('id');
		$id = $this->uri->segment(3);
		$this->produtos_model->delete($id);
		redirect('/produtos');	
	}
		 public function edit_produto()
	{

		//$this->output->enable_profiler(TRUE);
		$this->load->model('produtos_model');		
		$id = $this->uri->segment(3);
		$produtos = $this->produtos_model->buscaUm($id);
		$dados = array('produtos' =>$produtos);
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('paginas/editar_produtos_view',$dados);
		$this->load->view('template/footer');	
	}
	public function editado()
	{
		//$this->output->enable_profiler(TRUE);
		$produtos['nome']=$this->input->post('nome');
		$produtos['descricao']=$this->input->post('descricao');
		$produtos['usuario_id']=$this->input->post('usuario_id');
		$produtos['preco']=$this->input->post('preco');

		$id = $this->uri->segment(3);
		$this->load->model('produtos_model');
		$this->produtos_model->edit($id,$produtos);
		redirect('/produtos/edit_produto/'.$id);
	}
	public function detalhes_produto()
	{
		$this->load->model('produtos_model');	
		$this->load->helper('currency_helper');	
		$id = $this->uri->segment(3);
		$produtos = $this->produtos_model->buscaUm($id);
		$dados = array('produtos' =>$produtos);
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('paginas/detalhes_produto_view',$dados);
		$this->load->view('template/footer');	
	}
	
	public function cadastro_produto(){
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
		$this->form_validation->set_rules('preco', 'preco', 'trim|required|xss_clean|numeric');
		$this->form_validation->set_rules('peso', 'peso', 'trim|required|xss_clean|numeric');		
		$this->form_validation->set_rules('descricao', 'descricao', 'trim|required|min_length[10]|max_length[400]|xss_clean');
		

		$sucesso = $this->form_validation->run();
	if ($sucesso) {
			
			
if ($this->input->post('nome')) {
	# code...
			$produtos = array(
			'nome' => $this->input->post('nome') ,
			'descricao' => $this->input->post('descricao') ,
			'preco' => $this->input->post('preco') ,
			'usuario_id' => $this->input->post('usuario_id'),
			'peso' => $this->input->post('peso')
			 
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

/* End of file produtos.php */
/* Location: ./application/controllers/produtos.php */