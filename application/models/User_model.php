<?php
class User_model extends CI_model{

//Code for user login	
	function userLogin($member_email,$member_password){
		$this->db->where('member_email',$member_email);
		$this->db->where('member_password',$member_password);
		$login_query = $this->db->get('team');
		$user = $login_query->row_array();
		return $user;
		
	}

	

         //Fetching All records 
         function all(){
         	//$this->db->where('member_email',$member_email);
              return  $project_list = $this->db->get('project')->result_array();
         }


         function getMembersName(){
         	 $query = $this->db->query('SELECT id, member_name FROM team');


        return $query->result();
         }

         function GetProjectName(){
         	$getAllProjectquery = $this->db->query('SELECT id,project_name FROM project');
		 return $getAllProjectquery->result();

         }

      function  GetEditUserData($user_id){
            $this->db->where('id',$user_id);
            return $userdata = $this->db->get('project')->row_array(); //single row use row_array()
         }

         function UpdateUserbyUser($user_id,$updateData){
            $this->db->where('id',$user_id);
            $this->db->update('project',$updateData);

         }

	
}

?>