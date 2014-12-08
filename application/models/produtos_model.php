<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produtos_model extends CI_Model {

 public function buscaTodos()
	{		
		$this->db->where('vendido', FALSE);
		return $this->db->get("produtos")->result_array();
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('produtos');
	}
	public function edit($id,$produtos)
	{
		
		$this->db->where('id', $id);
		$this->db->update('produtos', $produtos);
	}
	public function buscaUm($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('produtos')->row_array();
	}

}

/* End of file produtos_model.php */
/* Location: ./application/models/produtos_model.php */