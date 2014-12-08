 <?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()

	{
     /*$data = $this->load->model->dados();*/
     
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/content');
		$this->load->view('template/footer');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
