<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utils extends CI_Controller {

	public function migrate()
	{
		$this->load->library('migration');
		$success = $this->migration->current();
		if ($success) {
			echo "Migrado com sucesso";
		}else{
			echo "Erro ao realizar a migração";
			show_error($this->migration->error_string());
		}
	}

}

/* End of file utils.php */
/* Location: ./application/controllers/utils.php */