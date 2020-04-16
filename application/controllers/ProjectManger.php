<?php 
class ProjectManger extends CI_controller{

	function index(){
		$this->load->model('ProjectManager_model');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('manger_password','Password','required');
	
		if($this->form_validation->run() == false){
			
			$this->load->view('manager_login');
		}
		else{
			$email = $this->input->post('email');
			$manger_password = $this->input->post('manger_password');

			$user = $this->ProjectManager_model->ManagerLogin($email,$manger_password);
			if(!empty($user)){
				$this->session->set_userdata('email');
				redirect(base_url().'index.php/ProjectManger/manager_data');

			}
			else{
				$this->session->set_flashdata('errorMsg','Login Details are not correct');
				redirect(base_url().'index.php/ProjectManger/index');

			}

		}
		

	}

	function manager_data(){
		$this->load->model('ProjectManager_model');
		$project_list = $this->ProjectManager_model->all();
	
	$data = array();
	$data['project_list'] = $project_list;
		$this->load->view('view_assigned_task',$data);
	}

	function Subtasks(){
		$this->load->model('ProjectManager_model');
		$Project_data['membersname'] = $this->ProjectManager_model->getMembersName();
		$Project_data['projectssname'] = $this->ProjectManager_model->GetProjectName();
		$this->load->view('create_subtask',$Project_data);
		

	}

	function create_subtask(){
		$this->load->model('ProjectManager_model');
		$this->form_validation->set_rules('project_name','Project Name','required');
		$this->form_validation->set_rules('subtask_description','Task Description','required');
		$this->form_validation->set_rules('assigned_to','Team Member','required');
		if($this->form_validation->run() == false){
			$this->load->view('create_subtask');
		}
		else{
			$Data = array();
			$Data['project_name']=$this->input->post('project_name');
			$Data['subtask_description']=$this->input->post('subtask_description');
			$Data['assigned_to']=$this->input->post('assigned_to');
			$this->ProjectManager_model->add_subtask($Data);
			$this->session->set_flashdata('success','Data Inserted');
				redirect(base_url().'index.php/ProjectManger/SubtaskList');
		}

	}

//View All Subtasks
	function SubtaskList(){
		$this->load->model('ProjectManager_model');
		$Subtask_list = $this->ProjectManager_model->getAllSubtask();
	
	$data = array();
	$data['SubTask_List'] = $Subtask_list;
	 
	$Subtask_list = $this->load->view('subtasklist',$data);
		
	}

}

?>