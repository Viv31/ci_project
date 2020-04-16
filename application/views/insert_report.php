<!DOCTYPE html>
<html>
<head>
	<title>Daily Report</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
<div class="container-fluid">
	<div class="container">
		<h2 class="text-center">Insert Report</h2>
		<div class="row">
			<div class = "col-md-6 mx-auto" id="form_section">
			<form method="POST" action="<?php echo base_url().'index.php/user/insert_report';?>">
			
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
						<label>Remarks:</label>
					<textarea name="work_description" id="work_description" value="<?php echo set_value('work_description'); ?>" class="form-control"></textarea>
					<?php echo form_error('work_description'); ?>
					</div>
					
					<div class="form-group">
						<label>Project Status</label>
						
						<select name="project_status" class="form-control" value="<?php echo set_value('project_status'); ?>">
							<option value="">--Status--</option>
							<option value="in_progress">In Progress</option>
							<option value="complete">Complete</option>
						</select>
						<?php echo form_error('project_status'); ?>
					</div>

					<input type="submit" name ="insert" value="Insert" class="btn btn-primary">
					<a href="<?php echo base_url().'index.php/user/all_reports' ?>" class="btn btn-dark">All Reports</a>
				
				
			</form>
			</div>
		</div>
		
	</div>
</div>
</body>
</html>