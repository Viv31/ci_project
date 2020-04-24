<!DOCTYPE html>
<html>
<head>
	<title>Add Project Manager</title>
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
		<h2>Insert Project Manager</h2>
		<div class="row">
			<div class = "col-md-6 mx-auto">
			<form method="POST" action="<?php echo base_url().'index.php/admin/add_project_manager';?>" id="form_section">
				<!--  
				Form Controller is user and method is create 


				-->
				
					<div class="form-group">
						<label>Project Manager Name:</label>
					<input type="text" name="manager_name" id="email" value="<?php echo set_value('manager_name'); ?>" class="form-control">
					<?php echo form_error('manager_name'); ?>
					</div>
					<div class="form-group">
						<label>Email:</label>
					<textarea name="email" id="email" value="<?php echo set_value('email'); ?>" class="form-control"></textarea>
					<?php echo form_error('email'); ?>
					</div>
					
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="manger_password" value="<?php echo set_value('manger_password'); ?>"class="form-control">
					</div>

					<input type="submit" name ="insert" value="Insert" class="btn btn-primary">
					<a href="<?php echo base_url().'index.php/admin/projectmanager_list'?>" class="btn btn-dark">Manager List</a>
				</div>
				
			</form>
		</div>
		
	</div>
</div>
</body>
</html>