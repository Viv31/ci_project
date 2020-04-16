<?php
class ProjectManager_model extends CI_model{

	
//Code for user login	
	function ManagerLogin($email,$manger_password){
		$this->db->where('email',$email);
		$this->db->where('manger_password',$manger_password);
		$login_query = $this->db->get('project_manger');
		$user = $login_query->row_array();
		return $user;
		
	}


	//Fetching All records 
         function all(){
         	
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

         //Adding Subtask
         function add_subtask($Data){
         	 $this->db->insert('project_subtask',$Data);  

         }

         function getAllSubtask(){
         	 return  $Subtask_list = $this->db->get('project_subtask')->result_array();
         }
	
}
?> 