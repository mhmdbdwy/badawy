<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	
	
	   
	public function index()
	{
	
	

	
	
	
	$data['events'] = $this->model->eventmenu('events');
	$data['manage'] = $this->model->selectdb('1','home');
	$data['nextevent'] = $this->model->selectdb('1','nextevent');
	$data['photos'] = $this->model->selectall('homegallery');
	$data['blog'] = $this->model->getlatestblog('blog');
	$this->load->view('home',$data);


	}




###########################################################

		public function help()
	{
	
	
	$data['manage'] = $this->model->selectdb('1','home');
	$data['page'] = $this->model->selectdb('1','help');
	$this->load->view('help',$data);


	}






############################################################

	public function addemail()
	{
	
	$val = '';
		
	
		$this->load->helper('form');		
		$data['email'] = $this->input->post('emails');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('emails','Email','valid_email|required|xss_clean|is_unique[newsletter.email]');
		
		
		
		if(!$this->form_validation->run()){ $val = validation_errors(); echo '<div style="width:40%; text-align: center; margin: auto;">'.$val.'</div>'; }else{ if($this->model->insertdb($data,'newsletter')) echo '<h5>Thank you, You are now subscribed.</h5>'; else echo 'Error in Subscribing :('; }
				


	}


#################################################
	   












}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */