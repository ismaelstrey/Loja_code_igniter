<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Adiciona_vendido_ao_produto extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		
	}

	public function up() {


		$this->dbforge->add_column('produtos', array(
			'vendido'=> array(
			'type'=>'boolean',
			'default'=>'0'
 
			)));
	}

	public function down() {
		$this->dbforge->drop_column('produtos','vendido');
	}

}

/* End of file adiciona_vendido_ao_produto.php */
/* Location: ./application/migrations/adiciona_vendido_ao_produto.php */