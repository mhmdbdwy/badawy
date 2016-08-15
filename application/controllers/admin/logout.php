<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	
	public function __construct()
       {
            parent::__construct();
           
		   $this->load->library('session');
		   if(!$this->session->userdata('logged_in')){
		    header('location: '.base_url().'admin/login/');
		   }
		  $this->model->no_cache();  
       }
	   
	   
	public function index()
	{
		
		$result = '';
		
		$this->load->library('session');
		
		$this->session->sess_destroy();
	
	if($this->session->userdata('logged_in')){
		
	
	$result = '<div class="alert alert-danger">Error, in Logging out !</div>';
	
		}else {
			
			 $result = '<div class="alert alert-success">Thank you, You are Now Logged out !</div>'; }
		
		
	
	
	
	
	
	$data['result'] = $result;
	$this->load->view('admin/logout',$data);
	
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */