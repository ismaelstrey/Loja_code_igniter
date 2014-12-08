<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Cria_tebela_tipo_usuario extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();		
	}

	public function up() {
		$this->dbforge->add_field(array(
			'id' =>array(
				'type'=>'INT',
				'auto_increment'=> true
				), 
			'nome_tipo'=> array(
			'type' => 'VARCHAR',
			'constraint' => '100'
 
			)
			
			));
		$this->dbforge->add_key('id',true);
		$this->dbforge->create_table('tipo_usuario');

	}


	public function down() {
		$this->dbforge->drop_table('tipo_usuario');
	}

}

/* End of file 001_cria_tebela_vendas.php */
/* Location: ./application/migrations/001_cria_tebela_vendas.php */