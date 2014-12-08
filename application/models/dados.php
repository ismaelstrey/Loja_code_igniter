<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dados extends CI_Model {

 public function ler()
 {
 $query = $this->db->get('usuario');
return $query->result();
 }
  public function cadastra_produto($produtos){
    	$this->db->insert('produtos', $produtos);
  }



}

/* End of file dados.php */
/* Location: ./application/models/dados.php */