<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendas extends CI_Controller {
	public function index()
	{
		$this->enable_profiler(TRUE);
		$this->load->helper('currency_helper');
		$this->load->helper('date_helper');
		$usuario = $this->session->userdata('usuario_logado');
		$this->load->model('vendas_model');
		$produtos = $this->vendas_model->busca_vendidos($usuario['id']);
		//$produtos['data_de_entrega'] = data_brasil_view($produtos['data_de_entrega']);
		$dados = array('produtos' => $produtos );

		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('paginas/produtos_vendidos_view',$dados);
		$this->load->view('template/footer');
	}

	public function nova()
	{
		$this->output->enable_profiler(TRUE);
		$usuario_logado = $this->session->userdata('usuario_logado');
		$this->load->model('vendas_model');
		$this->load->helper('date_helper');
		$venda = array(
			'produto_id' => $this->input->post('produto_id'), 
			'comprador_id' => $usuario_logado['id'], 
			'data_de_entrega' => data_brasil($this->input->post('data_de_entrega'))
			);
		$this->vendas_model->salvar($venda);

		// Envia email de confirmação de venda
		$id = $this->uri->segment(3);
		$this->load->library('email');
		$this->load->model('produtos_model');
		$produto = $this->produtos_model->buscaUm($id);
		$dados = array("produto"=>$produto);
		$conteudo = $this->load->view('util/email', $dados, TRUE);		
		

		$config['protocol'] = "smtp";
		$config['smtp_host']="mail.criativanet.com";
		$config['smtp_user']="admin@criativanet.com";
		$config['smtp_pass']="contra3477";
		//$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = "utf-8";
		$config['mailtype']= "html";
		$config['newline'] = "\r\n";
		$config['smtp_port']='587';
		$config['timezone'] = "UM3";
		date_default_timezone_set('America/Sao_Paulo');
		//$config['wordwrap'] = TRUE;
		
		$this->email->initialize($config);
		$this->email->from($usuario_logado['email'], $usuario_logado['nome']);
		
		$this->email->to('ismaelstrey@hotmail.com');
		//$this->email->cc('admin@criativanet.com');
		//$this->email->bcc('ismaelstreypereira@gmail.com');		
		$this->email->subject('Seu produto foi enviado com sucesso');
		$this->email->message('teste');
		
		$this->email->send();
		
		echo $this->email->print_debugger();
	

	// Termina envio de email






		$this->session->set_flashdata('success', '<p class="alert alert-success">Pedido adicionado a compras com sucesso<p>');
		redirect('/produtos');
	

		
	}

}

/* End of file vendas.php */
/* Location: ./application/controllers/vendas.php */