<!DOCTYPE html>
<html>
<head>
	<title>Edit Project Data</title>
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
      /*height: 300px;*/
      padding: 10px;
      margin-top: 50px;

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
		<h2>Edit Project</h2>
		<div class="row">
			<div class = "col-md-6 mx-auto" id="form_section">
			<form method="POST" action="<?php echo base_url().'index.php/admin/create';?>">
				<!--  
				Form Controller is user and method is create 


				-->
				
					<div class="form-group">
						<label>Project Name:</label>
					<input type="text" name="project_name" id="project_name" placeholder="Enter Project Name" value="<?php echo set_value('project_name'); ?>" class="form-control" >
					<?php echo form_error('project_name'); ?>
					</div>
					<div class="form-group">
						<label>Project Details:</label>
					<textarea name="project_details" id="project_details" placeholder="Enter Project Details" value="<?php echo set_value('project_details'); ?>" class="form-control"></textarea>
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
					
					</form>
				</div>
				
			
		</div>
		
	</div>
</div>

</body>
</html>