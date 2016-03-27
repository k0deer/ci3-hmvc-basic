<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Users extends MX_Controller
{
	
	public function __construct()
	{
		
		parent::__construct();
		$this->load->model('index_model');
		
	}
	
	public function index()
	{
		// echo "hola mundo";
		$data['users'] = $this->data_users();
		$this->load->view('index',$data);
			
	}
	
	public function data_users()
	{
		
		return $this->index_model->get_users();
		
	}
	
	public function saludo($saludo)
	{
		
		echo 'esto es un '. $saludo;
		
	}
	
}