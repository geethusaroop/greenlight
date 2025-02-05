<?php
class Register_Model extends CI_Model{
    function __construct() { 
        parent::__construct();
        
         $this->load->database();
     }

   public function insert_user($data) { 
   	if ($this->db->insert("users", $data)) { 
   		return true; 
   	} 
   }

   	public function check_email($email){

	$this->db->select('id');
	$this->db->from('users');
	$this->db->where('email',$email);
	$query = $this->db->get();
	
// $str = $this->db->last_query();
// echo $str;

	if($query->num_rows()==1){

	return TRUE;
	}
	else{

	return FALSE;

	}
	}

	public function CheckUser($username)
	{
		//$result=$this->db->query("SELECT * from users WHERE email='$username'");
		// $str = $this->db->last_query();
		// echo $str;
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email',$username);
		$result = $this->db->get();
		
		if ($result->num_rows()>0) 
		{
			return $result;
		}
		else
		{
			return false;
		}
	}

	public function get_forgot($email){

		$this->db->select('id,first_name');
		$this->db->from('users');
		$this->db->where('email',$email);

		$query = $this->db->get();

		return $query->result();
	}

	public function update_user_pass($data,$id) { 
		$this->db->set($data); 
		$this->db->where("id", $id); 
		$this->db->update("users", $data);

	}



	public function checkUser1($data = array()){
        if(!empty($data)){
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where(array('oauth_provider'=>$data['oauth_provider'], 'oauth_uid'=>$data['oauth_uid']));
            $query = $this->db->get();
            $total_user = $query->num_rows();
            
            if($total_user > 0){
                $result = $query->row_array();
                $data['updated_date'] = date("Y-m-d H:i:s");
                $update = $this->db->update('users', $data, array('id' => $result['id']));
                $userID = $result['id'];
            }else{
                $data['created_date']  = date("Y-m-d H:i:s");
                $data['updated_date'] = date("Y-m-d H:i:s");
                $insert = $this->db->insert('users', $data);
                $userID = $this->db->insert_id();
            }
        }
        return $userID?$userID:FALSE;
    }

 }
 ?>

