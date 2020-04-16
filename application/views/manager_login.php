<!DOCTYPE html>
<html>
<head>
	<title>Project Manager Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
	<style type="text/css">
		.container-fluid{
			background-image: url(<?php echo base_url().'assets/img/emp2.jpg' ?>);
			background-size: cover;
			background-repeat: no-repeat;
			height: 100vh;
			
		}
		#form_section{
			background-color: rgba(0,0,0,0.7);
			height: 300px;
			padding: 10px;

		}
		label{
			color: white;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
<div class="container">
		<h2>Project Manager Login</h2>
		<div class="row">
			<div class = "col-md-6 mx-auto">
			<form method="POST" action="<?php echo base_url().'index.php/ProjectManger/index';?>" id="form_section">
				<!--  
				Form Controller is user and method is create 


				-->
				
					<div class="form-group">
						<label>UserName:</label>
					<input type="email" name="email" id="email" value="<?php echo set_value('email'); ?>" class="form-control">
					<?php echo form_error('email'); ?>
					</div>
					<div class="form-group">
						<label>Password:</label>
					<input type="Password" name="manger_password" value="<?php echo set_value('manger_password'); ?>" class="form-control">
					<?php echo form_error('manger_password'); ?>
					</div>
					
					

					<input type="submit" name ="login" value="Login" class="btn btn-primary">
					</form>
				</div>
				
			
		</div>
		<div class="row">
			<div class="col-md-6 mx-auto">
				<?php $errorMsg = $this->session->userdata('errorMsg'); ?>
				<?php if(!empty($errorMsg)){ ?>
				<div class="alert alert-danger">
					<?php echo $errorMsg; ?>
				</div>
			<?php } ?>
			</div>
		</div>
		
	</div>
</div>
</body>
</html>