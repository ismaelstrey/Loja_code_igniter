<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorias_model extends CI_Model {

	
	public $tab_categorias		= 'ell_categorias';

	public function __construct()
	{
		parent::__construct();
	}

	function get_categorias() {

		$this->db->where('id_pai',0);
    	return $this->db->get($this->tab_categorias)->result();

	}

	function get_subcategorias($id_pai)
	{
		$this->db->from($this->tab_categorias);
		$this->db->where(array('id_pai'=>$id_pai, 'ativo'=>'Sim'));
		$this->db->order_by('posicao', 'asc');
		return $this->db->get()->result();

	}
}

/* End of file categorias_model.php */
/* Location: ./application/models/categorias_model.php */