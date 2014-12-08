<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends CI_Controller {

	public function index()
	{

		$this->load->library('email');

		$config['protocol'] = 'smtp';
		$config['smtp_host']="ssl://smtp.gmail.com";
		$config['smtp_user']="ismaelstrey@gotmail.com";
		$config['smtp_pass']="contra3477";
		//$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'utf-8';
		$config['mailtype']= 'html';
		$config['newline'] = '\r\n';
		$config['wordwrap'] = TRUE;
		$vendedor['email']='admin@criativanet.com';
		$this->email->initialize($config);
		$dados = array("produto"=>$produto);
		$conteudo = $this->load->view('util/email', $dados, TRUE);		
		$this->email->from('ismaelstrey@gmail.com', 'Ismael strey');
		$this->email->to($vendedor['email']);
		//$this->email->cc('admin@criativanet.com');
		$this->email->bcc('ismaelstreypereira@gmail.com');		
		$this->email->subject('Seu produto foi enviado com sucesso');
		$this->email->message($conteudo);
		
		$this->email->send();
		
		echo $this->email->print_debugger();
	}

}

/* End of file mail.php */
/* Location: ./application/controllers/mail.php */