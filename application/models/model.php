<?php

class Model extends CI_Model {
	
	

######################## function to update database
public function updatedb($id,$data,$table){
	
	
	$this->db->where('id',$id);
	$query = $this->db->update($table,$data);
	if($query){
		
		return 'true';
		
		}else{
			
			return 'false';
			}

}



############# function to select from database using specific id
public function selectdb($id,$table){
	
	
	$this->db->where('id',$id);
	$query = $this->db->get($table);
	$result=$query->row();
	return $result;

}

################################ function to insert into database


public function insertdb($data,$table){

	$query = $this->db->insert($table,$data);
	if($query){
		
		return 'true';
		
		}else{
			
			return 'false';
			}

}
######################################### function to upload file and insert name and title into database


public function updateevents($id,$data,$table){
	
	
	$this->db->where('id',$id);
	$query = $this->db->update($table,$data);
	if($query){
		
		return '<div class="alert alert-success">Event has been updated successfully, Thank You !</div>';
		
		}else{
			
			return '<div class="alert alert-danger">Error in Updating, please try again later.</div>';
			}

}





############################################### function to select all from a table

public function selectall($table){
	
	
	
	$query = $this->db->get($table);
	
	return $query->result();

}



############################################### function to select cars of the main category using the sub id


public function selectcars($id,$table){
	
	
	$this->db->where('sub',$id);
	$query = $this->db->get($table);
	return $query->result();

}





########################################### funtion to hash password




public function hashpassword($p){
	
	
	$password = hash("sha512",$p);
	return $password;

}




###################################### function to clear cache

public function no_cache(){
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0',false);
header('Pragma: no-cache'); 
}







################################### function to select ads from table

public function selads($user,$table){
	
	
	$this->db->where('email',$user);
	$query = $this->db->get($table);
	return $query->result();

}






###################################################################

public function selectweb($table){
	
	
	
	$query = $this->db->get($table);
	
	return $query->result_array();

}


######################################################################### to set header json
public function removeblog($id,$table){
	
	$this->db->select('image');
	$this->db->where('id',$id);
	$query = $this->db->get($table);
	
	$data = $query->result_array();
	$image = $data[0]['image'];
	
	$this->load->helper('url');
	unlink("./uploads/blog/".$image);
	
	$this->db->where('id',$id);
	$query = $this->db->delete($table);
	if($query){
		
		return '<div class="alert alert-success">Thank You, Blog Post has been removed.</div>';
		
		}else{
			
			return '<div class="alert alert-danger">Error ! in removing blog post, Please try again later.</div>';
			}

}





######################################################################### to delete image and database row
public function delplace($id,$table){
	
	$this->db->select('image');
	$this->db->where('id',$id);
	$query = $this->db->get($table);
	
	$data = $query->result_array();
	$image = $data[0]['image'];
	
	$this->load->helper('url');
	unlink("./uploads/places/".$image);
	
	$this->db->where('id',$id);
	$query = $this->db->delete($table);
	if($query){
		
		return '<div class="alert alert-success">Place has been deleted Successfully</div>';
		
		}else{
			
			return '<div class="alert alert-danger">Error in deleting Place, Please try again later.</div>';
			}

}

#########################################################
public function eventremove($id,$table){
	

	$this->db->where('id',$id);
	$query = $this->db->delete($table);
	if($query){
		
		return '<div class="alert alert-success">Thank You, Event has been removed !</div>';
		
		}else{
			
			return '<div class="alert alert-danger">Error, please try again later.</div>';
			}

}

################################ eventselect
public function eventmenu($table){
	
	
	
	$this->db->order_by("id", "desc");
       //$this->db->limit(3);
            $query = $this->db->get($table);
            return $query->result();

}


##################################### get latest three posts of blog
public function getlatestblog($table){
	
	
	
	$this->db->order_by("id", "desc");
       $this->db->limit(3);
            $query = $this->db->get($table);
            return $query->result();

}

################################################################################
public function selectevent($title,$table){
	
	
	$this->db->where('title',$title);
	$query = $this->db->get($table);
	$result=$query->row();
	return $result;

}

################################################
public function selectallblog($page,$table){
	
	
	
	$query = $this->db->get($table);
	$this->db->limit(3,$page);
	return $query->result();

}






}
?>