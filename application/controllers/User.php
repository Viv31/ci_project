<?php
class User extends CI_controller{

	
function index(){
	$this->load->model('User_model');
	
	$this->form_validation->set_rules('member_email','Email','required');
		$this->form_validation->set_rules('member_password','Password','required');
	
		if($this->form_validation->run() == false){
			
			$this->load->view('User/user_login');
		}
		else{
			$member_email = $this->input->post('member_email');
			$member_password = $this->input->post('member_password');

			$user = $this->User_model->userLogin($member_email,$member_password);
			if(!empty($user)){
				$this->session->set_userdata('member_email');
				$this->session->set_userdata('id');
				redirect(base_url().'index.php/user/all_users');

			}
			else{
				$this->session->set_flashdata('errorMsg','Login Details are not correct');
				redirect(base_url().'index.php/user/index');

			}

		}
	
}


function all_users(){

	$this->load->model('User_model');
	$project_list = $this->User_model->all();
	
	$data = array();
	$data['project_list'] = $project_list;
	$project_list = $this->load->view('User/user_list',$data);
}

function TodaysReport(){
	$this->load->model('User_model');
	$Project_data['membersname'] = $this->User_model->getMembersName();//for fetching member name and project name on report insert page
	$Project_data['projectssname'] = $this->User_model->GetProjectName();
	$this->load->view('User/insert_report',$Project_data);
}

function insert_report(){
	$this->load->model('User_model');

}

function all_reports(){

}


function edit_user($user_id){
	$this->load->model('User_model');
$userdata =	$this->User_model->GetEditUserData($user_id);
$data = array();
$data['userdata'] = $userdata;
	
		$this->form_validation->set_rules('project_name','Project Name','required');
		$this->form_validation->set_rules('project_details','Project Details','required');
		$this->form_validation->set_rules('assigned_to','Assigned','required');
		$this->form_validation->set_rules('project_status','Project Status','required');

		if($this->form_validation->run() == false){
			$this->load->view('User/edit_user_data',$data);
		}
		else{
			//Update records
			$updateData = array();
			$updateData['project_name'] = $this->input->post('project_name');
			$updateData['project_details'] = $this->input->post('project_details');
			$updateData['assigned_to'] = $this->input->post('assigned_to');
			$updateData['project_status'] = $this->input->post('project_status');
			$this->User_model->UpdateUserbyUser($user_id,$updateData);
			$this->session->set_flashdata('success','Updated Sccessfully');
			redirect(base_url().'index.php/user/all_users');

		}



}

function delete_user(){
	$this->load->model('User_model');
	$this->load->view('User/delete_user_data');

}

function logout(){
	$this->session->unset_userdata('username');
    return redirect(base_url().'index.php/user/index');
}


}


?>