<!DOCTYPE html>
<html>
<head>
	<title>Edit Team Member</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
	<style type="text/css">
		.container-fluid{
			background-image: url(<?php echo base_url().'assets/img/emp1.jpg' ?>);
			background-size: cover;
			background-repeat: no-repeat;
			height: 100vh;
			
		}
		#form_section{
			background-color: rgba(0,0,0,0.7);
			
			padding: 10px;

		}
		label{
			color: white;
		}
	</style>
</head>
<body>
	<?php include_once('inc/admin_navbar.php'); ?>
	<div class="container-fluid">
	<div class="container">
		<h2>Edit Team Member</h2>
		<div class="row">
			<div class = "col-md-6 mx-auto" id="form_section">
			<form method="POST" action="<?php echo base_url().'index.php/Admin/EditProjects/'.$projectData['id'];?>">
				<!--  
				Form Controller is user and method is create 


				-->
				
					<div class="form-group">
						<label>Member Name:</label>
					<input type="text" name="project_name" id="project_name" value="<?php echo set_value('project_name',$projectData['project_name']); ?>" class="form-control">
					<?php echo form_error('project_name'); ?>
					</div>
					<div class="form-group">
						<label>Project Details:</label>
					<input type="text"  name="project_details" id="project_details" value="<?php echo set_value('project_details',$projectData['project_details']); ?>" class="form-control">
					<?php echo form_error('project_details'); ?>
					</div>
					
					<div class="form-group">
						<label>Assigned To:</label>
					<input type="text"  name="assigned_to" id="assigned_to" value="<?php echo set_value('assigned_to',$projectData['assigned_to']); ?>" class="form-control">
					<?php echo form_error('assigned_to'); ?>
					</div>
					<div class="form-group">
						<label>Project Status:</label>
					<input type="text"  name="project_status" id="project_status" value="<?php echo set_value('project_status',$projectData['project_status']); ?>" class="form-control">
					<?php echo form_error('project_status'); ?>
					</div>
					
					

					<input type="submit" name ="update" value="Update" class="btn btn-primary">
					
				</div>
				
			</form>
		</div>
		
	</div>
</div>
</body>
</html>