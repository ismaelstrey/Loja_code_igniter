<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

public function salvar($usuario){
	$this->db->insert('usuario',$usuario);
}
public function busca_email_e_senha($email,$senha){
	$this->db->where("email", $email);
	$this->db->where("senha", $senha);
	$usuario = $this->db->get('usuario')->row_array();
	return($usuario);

}
public function ler_todos_usuarios(){
	$usuarios = $this->db->get('usuario')->result_array(); 
	return ($usuarios);

}
public function deleta_usuario($id)
{
	$this->db->where('id', $id);
	$this->db->delete('usuario');
} 
	public function buscaUm($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('usuario')->row_array();
	}
 public function update($id,$dados)
 {
 	$this->db->where('id', $id);
 	$this->db->update('usuario', $dados);
 }

}

/* End of file usuarios_model.php */
/* Location: ./application/models/usuarios_model.php */