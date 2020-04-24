<!DOCTYPE html>
<html>
<head>
	<title>Sub Task</title>
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
	 <?php include_once('inc/project_manager_navbar.php'); ?>
	<div class="container-fluid">
	
	<div class="container">
		<h2>Insert Sub task</h2>
		<div class="row">
			<div class = "col-md-6 mx-auto" id="form_section">
			<form method="POST" action="<?php echo base_url().'index.php/ProjectManger/create_subtask';?>">
				<!--  
				Form Controller is user and method is create 


				-->
				
					<div class="form-group">
						<label>Project Name:</label>
					
					<select class="form-control" name="project_name" id="project_name" value="<?php echo set_value('project_name'); ?>" class="form-control">
						<option value="">SELECT Project</option>
						<?php 

            foreach($projectssname as $pname)
            { 
              echo '<option value="'.$pname->id.'">'.$pname->project_name.'</option>';
            }
            ?>
			</select>
					<?php echo form_error('project_name'); ?>
					</div>
					<div class="form-group">
						<label>Project Details:</label>
					<textarea   name="subtask_description" id="subtask_description" value="<?php echo set_value('subtask_description'); ?>" class="form-control"></textarea>
					<span class="text-danger"><?php echo form_error('subtask_description'); ?></span>
					</div>
					<div class="form-group">
						<label>Assigned to :</label>
					

					 <select class="form-control" name="assigned_to" value="<?php echo set_value('assigned_to'); ?>" id="assigned_to">
					 	<option value="">--Select Member to Assign</option>
            <?php 

            foreach($membersname as $row)
            { 
              echo '<option value="'.$row->id.'">'.$row->member_name.'</option>';
            }
            ?>
            </select>
					<?php echo form_error('assigned_to'); ?>
					</div>
					

					<input type="submit" name ="insert" value="Insert" class="btn btn-primary">
					<a href="<?php echo base_url().'index.php/ProjectManger/SubtaskList'?>" class="btn btn-dark">All Subtask</a>
				</div>
				
			</form>
		</div>
		
	</div>
</div>
</body>
</html>