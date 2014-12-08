<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Adiciona_coluna_tipo_usuario extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		
	}

	public function up() {


		$this->dbforge->add_column('usuario', array(
			'tipo'=> array(
			'type' => 'VARCHAR',
			'constraint' => '100'
 
			)));
	}

	public function down() {
		$this->dbforge->drop_column('usuario','tipo');
	}

}

/* End of file adiciona_vendido_ao_produto.php */
/* Location: ./application/migrations/adiciona_vendido_ao_produto.php */