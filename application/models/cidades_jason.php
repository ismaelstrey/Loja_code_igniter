<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cidades_jason extends CI_Controller {

	public function index()
	{
		
	}
	   function getCidades($id) {
         
        $this->load->model('cidades_model');         
        $cidades = $this->cidades_model->getCidades($id);         
        if( empty ( $cidades ) ) 
            return '{ "nome": "Nenhuma cidade encontrada" }';         
        echo json_encode($cidades); 
        return;
         
    }

}

/* End of file cidades_jason.php */
/* Location: ./application/models/cidades_jason.php */