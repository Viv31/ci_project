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

         function getAllReports(){
         	return  $AllReport_list = $this->db->get('daily_report')->result_array();

         }

         	//Get data for editing  into form section
         function  GeteditUserdata($id){
         	$this->db->where('id',$id);
         	return $user = $this->db->get('team')->row_array(); //single row use row_array()

         }

         //updating records by admin
         function UpdateUserbyAdmin($id,$updateData){
         	$this->db->where('id',$id);
         	$this->db->update('team',$updateData);
         }


         function GeteditProjectData($project_id){
         	$this->db->where('id',$project_id);
         	return $projectData = $this->db->get('project')->row_array();

         }

         //geeting project manager data
         function updateManagerData($manager_id){
         	$this->db->where('id',$manager_id);
         	$this->db->update('team',$updateData);

         }

          function updateProjectData($project_id){
          	$this->db->where('id',$project_id);
         	$this->db->update('project',$updateData);
         	
         }


}

?>