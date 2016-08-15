<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	
	
	
	   
	public function index()
	{
	
	//this is to get num of rows in the database blog 
	$table_row_count = $this->db->count_all('blog');
//this is the configuration of the pagination
	$this->load->library('pagination');
		$config['base_url'] = base_url()."blog/index";
		$config['total_rows'] = $table_row_count;
		$config['per_page'] = 3;
		$config['uri_segment'] = 3;
		$config['full_tag_open'] = '<li>';
        $config['full_tag_close'] = '</li>';
		$config['next_link'] = 'next';
		$config['prev_link'] = 'prev';
	    $this->pagination->initialize($config);
		$data['result'] = $this->pagination->create_links();
	
// the coming 3 lines - this the query which get the result and fetch it
		  $query = $this->db->get('blog', $config['per_page'], $this->uri->segment(3));
         $data['blog'] = $query->result();
		 $query->free_result();




	$data['events'] = $this->model->eventmenu('events');
	$data['manage'] = $this->model->selectdb('1','home');
	$data['latest'] = $this->model->getlatestblog('blog');
	$this->load->view('blog',$data);


	}





#################################################
	   
public function view($title)
	{
	
	
	
	$title = str_replace('-',' ',$title);
	
	$data['events'] = $this->model->eventmenu('events');
	$data['manage'] = $this->model->selectdb('1','home');
	$data['latest'] = $this->model->getlatestblog('blog');
	$data['page'] = $this->model->selectevent($title,'blog');
	$this->load->view('singleblog',$data);


	}













}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */