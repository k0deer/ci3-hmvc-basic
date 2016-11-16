<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Bar extends MX_Controller {

	public function __construct()
	{
		
		parent::__construct();
		$this->load->model('Usuarios');
		
	}

 
	public function index()
	{

		$this->load->view('bar_view');
		
	}

	public function data_users()
	{
		echo "<pre>";
		var_dump($this->Usuarios->get_users());
		
	}



	
}
 
/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */