<?php 
/**
 * 
 */
class Admin_model extends CI_model
{
	

//Code for user login	
	function AdminLogin($username,$admin_password){
		$this->db->where('username',$username);
		$this->db->where('admin_password',$admin_password);
		$login_query = $this->db->get('admin');
		$user = $login_query->row_array();
		return $user;
		
	}

	//Add project manger
	function add_project_manager($Data){
		 $this->db->insert('project_manger',$Data);  

	}
	//Add new team  members

	function add_new_team_memeber($memberData){

		 $this->db->insert('team',$memberData);
	}

	//Fetching All records 
         function all_team_members(){
              return  $members_list = $this->db->get('team')->result_array();
         }

          function all_projectMangerList(){
              return  $manager_list = $this->db->get('project_manger')->result_array();
              //this variable passed as array in manager_list controller for viewing data
         }

         function create($formArray){
        //insert data into database table.  
        $this->db->insert('project',$formArray);  
  
         }

         //Fetching All projects 
         function all(){
              return  $project_list = $this->db->get('project')->result_array();
         }


		//Method for fetching drop down user name for assigning into list
         function getMembersName(){
         	 $query = $this->db->query('SELECT member_name FROM team');


        return $query->result();
         }
}

?>