<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categoria extends CI_Controller {

	public function index()
	{
		
	}
	function get_categoria()
		{
			$this->load->model('categorias_model');
		$data['categorias'] = $this->categorias_model->get_categorias();
		$data['textos'] = $this->textos_model->get_by_textos(array('id_texto'=>$id));
		$data['subcats'] = $this->categorias_model->get_subcategorias($data['textos']->categoria_id);
		$this->load->view('paginas/categorias', $data);
		}

}

/* End of file categoria.php */
/* Location: ./application/controllers/categoria.php */