<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cidades_model extends CI_Model {

	   function getEstados() {
         
        return $this->db->get('estados')->result();
         
    }
 
       function getCidades($id) {
         
        return $this->db->select('cidades.id, cidades.nome')
                        ->from('estados')
                        ->join('cidades', 'cidades.id_uf = estados.id')
                        ->where( array('estados.id' => $id) )
                        ->get()->result();
         
    }

}

/* End of file cidades_model.php */
/* Location: ./application/models/cidades_model.php */