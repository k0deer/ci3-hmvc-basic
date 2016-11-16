<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Foo extends MX_Controller {

 
	public function index()
	{

		$this->load->view('foo_view');
		
	}

	public function test(){
		echo "test section";
	}

	public function testParam($param){
		echo "test section" . $param;
	}



	
}
 
/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */