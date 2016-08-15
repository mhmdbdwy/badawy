<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	
	
		public function __construct()
       {
            parent::__construct();
           
		   $this->load->library('session');
		   if($this->session->userdata('logged_in')){
		    header('location: '.base_url().'admin/home/');
		   }
		  $this->model->no_cache();  
       }
	   
	   
	   
	public function index()
	{
		$this->load->helper('form');
		
	
	$result = '<div class="alert alert-info">Please Enter Username and Password</div>';
	
	if($this->input->post('submit')){
	$username = $this->input->post('username');
	$password = $this->model->hashpassword($this->input->post('password'));
				
				$this->load->library('form_validation');
				$this->form_validation->set_rules('username','username','required|trim');
				$this->form_validation->set_rules('password','password','required|trim|xss_clean');
				if($this->form_validation->run())
			{
	$this->db->where('username =',$username);
	$this->db->where('password =',$password);
	$query = $this->db->get('admin');
	$result=$query->row();
	
	if($result){
		$info = array('username'=>$username,'logged_in'=>TRUE);
		$this->load->library('session');
		$this->session->set_userdata($info);
		 header('location: '.base_url().'admin/home/');
		 }else{ 
		 $result = '<div class="alert alert-danger">Error In Logging In, Please try Again.</div>';
		 }
		
			}else{
				
				$result = validation_errors();
				
				}
		
	
	}
		
		
		
	
	
	
	
	
	$data['result'] = $result;
	$this->load->view('admin/login',$data);
	
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */