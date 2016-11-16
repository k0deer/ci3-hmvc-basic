<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Usuarios extends CI_Model
{
	
	public function __construct()
	{
		
		parent::__construct();
		
	}
	
	public function get_users()
	{
		
		$query = $this->db->get('usuarios');
		
		return $query->result();
		
	}
	
}