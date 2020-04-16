<!DOCTYPE html>
<html>
<head>
	<title>Daily Report</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
	<?php //include_once('inc/admin_navbar.php'); ?>
	<div class="container">
		<h2>Insert Report</h2>
		<div class="row">
			<div class = "col-md-6 mx-auto">
			<form method="POST" action="<?php echo base_url().'index.php/user/insert_report';?>">
			
					<div class="form-group">
						<label>Project Name:</label>
					<input type="text" name="project_name" id="project_name" value="<?php echo set_value('project_name'); ?>" class="form-control">
					<?php echo form_error('project_name'); ?>
					</div>
					<div class="form-group">
						<label>Project Details:</label>
					<textarea name="project_details" id="project_details" value="<?php echo set_value('project_details'); ?>" class="form-control"></textarea>
					<?php echo form_error('project_details'); ?>
					</div>
					<div class="form-group">
						<label>Assigned to :</label>
					

					 <select class="form-control" name="assigned_to" value="<?php echo set_value('assigned_to'); ?>" id="assigned_to">
					 	<option value="">--Select Member to Assign</option>
            <?php 

            foreach($membersname as $row)
            { 
              echo '<option value="'.$row->member_name.'">'.$row->member_name.'</option>';
            }
            ?>
            </select>
					<?php echo form_error('assigned_to'); ?>
					</div>
					<div class="form-group">
						<label>Project Status</label>
						<input type="text" name="project_status" value="new" class="form-control">
					</div>

					<input type="submit" name ="insert" value="Insert" class="btn btn-primary">
					<a href="<?php echo base_url().'index.php/admin/all_projects' ?>" class="btn btn-dark">All Reports</a>
				</div>
				
			</form>
		</div>
		
	</div>
</body>
</html>