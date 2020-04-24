<!DOCTYPE html>
<html>
<head>
	<title>Add Team Member</title>
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
		<h2>Insert Team Member</h2>
		<div class="row">
			<div class = "col-md-6 mx-auto" id="form_section">
			<form method="POST" action="<?php echo base_url().'index.php/admin/add_new_team_memeber';?>">
				<!--  
				Form Controller is user and method is create 


				-->
				
					<div class="form-group">
						<label>Member Name:</label>
					<input type="text" name="member_name" id="member_name" value="<?php echo set_value('member_name'); ?>" class="form-control">
					<?php echo form_error('member_name'); ?>
					</div>
					<div class="form-group">
						<label>Email:</label>
					<textarea name="member_email" id="member_email" value="<?php echo set_value('member_email'); ?>" class="form-control"></textarea>
					<?php echo form_error('member_email'); ?>
					</div>
					
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="member_password" value="<?php echo set_value('member_password'); ?>"class="form-control">
					</div>

					<input type="submit" name ="insert" value="Insert" class="btn btn-primary">
					<a href="<?php echo base_url().'index.php/admin/memberslist' ?>" class="btn btn-dark">Member List</a>
				</div>
				
			</form>
		</div>
		
	</div>
</div>
</body>
</html>