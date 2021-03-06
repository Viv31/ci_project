<?php 
/**
 * 
 */
class Admin extends CI_controller
{

	
	function index(){


		$this->load->model('Admin_model');

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('admin_password','Password','required');
		if($this->form_validation->run() == false){

		$this->load->view('Admin/admin_login');

		}
		else{
			$username = $this->input->post('username');
			$admin_password = $this->input->post('admin_password');

			$user = $this->Admin_model->AdminLogin($username,$admin_password);
			if(!empty($user)){
				$this->session->set_userdata('username');
				redirect(base_url().'index.php/admin/memberslist');

			}
			else{
				$this->session->set_flashdata('errorMsg','Login Details are not correct');
				redirect(base_url().'index.php/admin/index');

			}
		}
		
	}

function memberslist(){
	$this->load->model('Admin_model');
	$members_list = $this->Admin_model->all_team_members();
	
	$data = array();
	$data['members_list'] = $members_list;
	 
	$members_list = $this->load->view('Admin/memberslist',$data);
}

function projectmanager_list(){
	$this->load->model('Admin_model');
	$manager_list = $this->Admin_model->all_projectMangerList();
	
	$Alldata = array();
	$Alldata['manager_list'] = $manager_list; //would be same as model's variable
	 
	$manager_list = $this->load->view('Admin/projectmanagerlist',$Alldata);
}


	function add_project_manager(){
		$this->load->model('Admin_model');
		$this->form_validation->set_rules('manager_name','Manager Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('manger_password','Password','required');
		if($this->form_validation->run() == false){
			$this->load->view('Admin/add_project_manager');
		}
		else{
			$Data = array();
			$Data['manager_name']=$this->input->post('manager_name');
			$Data['email']=$this->input->post('email');
			$Data['manger_password']=$this->input->post('manger_password');
			$this->Admin_model->add_project_manager($Data);
			$this->session->set_flashdata('success','Data Inserted');
				redirect(base_url().'index.php/admin/projectmanagerlist');
		}

		

	}

//for adding new members to table

function add_new_team_memeber(){
	$this->load->model('Admin_model');
	$this->form_validation->set_rules('member_name','Member Name','required');
		$this->form_validation->set_rules('member_email','Email','required');
		$this->form_validation->set_rules('member_password','Password','required');
	
		if($this->form_validation->run() == false){
			$this->load->view('Admin/add_new_team_memeber');
		}
		else{
			$memberData = array();
			$memberData['member_name']=$this->input->post('member_name');
			$memberData['member_email']=$this->input->post('member_email');
			$memberData['member_password']=$this->input->post('member_password');
			$this->Admin_model->add_new_team_memeber($memberData);
			$this->session->set_flashdata('success','Data Inserted');
				redirect(base_url().'index.php/admin/memberslist');
		}
}

//insert project data in db
	function create(){
		
		$this->load->model('Admin_model');
		 $data['membersname'] = $this->Admin_model->getMembersName();
		$this->form_validation->set_rules('project_name','Project Name','required');
		$this->form_validation->set_rules('project_details','Project Details','required');
		$this->form_validation->set_rules('assigned_to','Assigned To','required');
		//$this->form_validation->set_rules('','','');
		if($this->form_validation->run() == false){

			$this->load->view('Admin/create',$data);
			//here $data variable containing the value of drop down values
		}
		else{


				$formArray = array();
				$formArray['project_name'] = $this->input->post('project_name');
				$formArray['project_details'] = $this->input->post('project_details');
				$formArray['assigned_to'] = $this->input->post('assigned_to');
				$formArray['project_status'] = $this->input->post('project_status');
				$this->Admin_model->create($formArray);
				$this->session->set_flashdata('success','Data Inserted');
				redirect(base_url().'index.php/admin/all_projects');

		}
		

	}

	function all_projects(){

	$this->load->model('Admin_model');
	$project_list = $this->Admin_model->all();
	
	$data = array();
	$data['project_list'] = $project_list;
	$project_list = $this->load->view('Admin/list',$data);
}

//methd for fetching all reports

function getAllReports(){
	$this->load->model('Admin_model');

	$AllReport_list = $this->Admin_model->getAllReports();
	
	$data = array();
	$data['report_list'] = $AllReport_list;
	$AllReport_list = $this->load->view('Admin/all_reportlist',$data);

}


//method for edit data
function edit($id){
	$this->load->model('Admin_model');
	$user = $this->Admin_model->GeteditUserdata($id);
	$data = array();
	$data['user'] = $user; //storing response from model and storing in user variable

		$this->form_validation->set_rules('member_name','Member Name','required');
		$this->form_validation->set_rules('member_email','Email','required');

		if($this->form_validation->run() == false){
			$this->load->view('Admin/edit',$data);
		}
		else{
			//Update records
			$updateData = array();
			$updateData['member_name'] = $this->input->post('member_name');
			$updateData['member_email'] = $this->input->post('member_email');
			$this->Admin_model->UpdateUserbyAdmin($id,$updateData);
			$this->session->set_flashdata('success','Updated Sccessfully');
			redirect(base_url().'index.php/admin/memberslist');

		}
	}


		function editProjectManager($manager_id){
			$this->load->model('Admin_model');
			$user = $this->Admin_model->GeteditUserdata($manager_id);
			
			$this->load->view('Admin/edit_projectmanager_data');

		}

		function EditProjects($project_id){

			$this->load->model('Admin_model');
			$projectData = $this->Admin_model->GeteditProjectData($project_id);
			$data = array();
			$data['projectData'] = $projectData;

			//
			$this->form_validation->set_rules('project_name','Project Name','required');
		$this->form_validation->set_rules('project_details','Project Details','required');
		$this->form_validation->set_rules('assigned_to','Assigned','required');
		$this->form_validation->set_rules('project_status','Project Status','required');

		if($this->form_validation->run() == false){
			$this->load->view('Admin/edit_project_data',$data);
		}
		else{
			//Update records
			$updateData = array();
			$updateData['project_name'] = $this->input->post('project_name');
			$updateData['project_details'] = $this->input->post('project_details');
			$updateData['assigned_to'] = $this->input->post('assigned_to');
			$updateData['project_status'] = $this->input->post('project_status');
			$this->Admin_model->UpdateProject($project_id,$updateData);
			$this->session->set_flashdata('success','Updated Sccessfully');
			redirect(base_url().'index.php/Admin/all_projects');

		}

		}
	
//method for delete data



function logout(){
	$this->session->unset_userdata('username');
    return redirect(base_url().'index.php/admin/index');
}

}

?>