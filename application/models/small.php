<?php

class Small extends CI_Model {
	
	
#####################function to delete question
public function eventremove($id,$table){
	

	$this->db->where('id',$id);
	$query = $this->db->delete($table);
	if($query){
		
		return '<div class="alert alert-success">Thank You, Event has been removed !</div>';
		
		}else{
			
			return '<div class="alert alert-danger">Error, please try again later.</div>';
			}

}





####################### function to delete application and cv

public function delapp($id,$table){
	
	$this->db->select('cv');
	$this->db->where('id',$id);
	$query = $this->db->get($table);
	
	$data = $query->result_array();
	$cv = $data[0]['cv'];
	
	$this->load->helper('url');
	unlink("./uploads/cv/".$cv);
	
	$this->db->where('id',$id);
	$query = $this->db->delete($table);
	if($query){
		
		return '<div class="alert alert-success">Thank You, Application has been deleted successfully.</div>';
		
		}else{
			
			return '<div class="alert alert-danger">Error, Please try again later.</div>';
			}

}









##################### function to select specific advertisement

public function selectad($id,$table){
	
	
	$this->db->where('id',$id);
	$query = $this->db->get($table);
	return $query->result();

}

#################################################
public function delphoto($id,$table){
	
	$this->db->select('image');
	$this->db->where('id',$id);
	$query = $this->db->get($table);
	
	$data = $query->result_array();
	$image = $data[0]['image'];
	
	$this->load->helper('url');
	unlink("./uploads/homegallery/".$image);
	
	$this->db->where('id',$id);
	$query = $this->db->delete($table);
	if($query){
		
		return '<div class="alert alert-success">Thank You, Photo has been removed from Home Page Gallery.</div>';
		
		}else{
			
			return '<div class="alert alert-danger">Error in removing image.</div>';
			}

}

























}
?>