<?php
class User extends CI_controller{

	
function index(){
	$this->load->model('User_model');
	
	$this->form_validation->set_rules('member_email','Email','required');
		$this->form_validation->set_rules('member_password','Password','required');
	
		if($this->form_validation->run() == false){
			
			$this->load->view('user_login');
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
	$project_list = $this->load->view('user_list',$data);
}

function TodaysReport(){
	$this->load->model('User_model');
	$Project_data['membersname'] = $this->User_model->getMembersName();//for fetching member name and project name on report insert page
	$Project_data['projectssname'] = $this->User_model->GetProjectName();
	$this->load->view('insert_report',$Project_data);
}

function insert_report(){
	$this->load->model('User_model');

}

function all_reports(){

}



}


?>