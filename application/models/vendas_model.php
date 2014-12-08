<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendas_model extends CI_Model {

	public function salvar($venda)
	{
		$this->db->insert('vendas',$venda);

		$vendido['vendido'] = '1';
		$this->db->where('id', $venda['produto_id']);		
		$this->db->update('produtos', $vendido);
	}
	public function busca_vendidos($id)
	{
		$this->db->select('produtos.*,vendas.data_de_entrega');
		$this->db->where('usuario_id', $id);
		$this->db->from('produtos');
		$this->db->join('vendas', 'vendas.produto_id = produtos.id', 'left');
		$this->db->where('vendido', '1');
		return $this->db->get()->result_array();
	}
	public function busca_vendidos_ps($id)
	{
		$this->db->select('produtos.*,vendas.quantidade');
		$this->db->where('usuario_id', $id);
		$this->db->from('produtos');
		$this->db->join('vendas', 'vendas.produto_id = produtos.id', 'left');
		$this->db->where('vendido', '1');
		return $this->db->get()->result_array();
	}

}

/* End of file vendas_model.php */
/* Location: ./application/models/vendas_model.php */
//UPDATE `produtos` SET `vendido`='1' WHERE (`id`='207')
