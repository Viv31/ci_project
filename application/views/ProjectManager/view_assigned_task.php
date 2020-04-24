<!DOCTYPE html>
<html>
<head>
	<title>Assigned Task</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
  <?php include_once('inc/project_manager_navbar.php'); ?>
	<div class="container-fluid">
	<div class="container">
		<h2>All Assigned Projects</h2>
		<div class="row">
			<div class="col-md-4">
			<a href="<?php echo base_url().'index.php/ProjectManger/Subtasks'?>" class="btn btn-primary" >Create Subtask</a>
		</div>

		</div>
		<br>
		
				<div class="row">
			<div class = "col-md-10 mx-auto">
				<table class="table table-dark table-hover ">
    <thead>
      <tr>
        <th>Sno<?php $sno='1'; ?></th>
        <th>Project Name</th>
        <th>Details</th>
        <th>Assigned To</th>
      </tr>
    </thead>
   
     
  <tbody>
  	<?php if(!empty($project_list)){ foreach($project_list as $Members){ ?>
      <tr>
        <td><?php echo $sno++;?></td>
        <td><?php echo $Members['project_name']; ?></td>
        <td><?php echo $Members['project_details'];?></td>
        <td ><?php echo $Members['assigned_to'];?></td>
       
        
      </tr>
      <?php }} else {?>
      <tr>
      	<td colspan="4">REcords Not Found</td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
			
		</div>
		
	</div>
</div>
</body>
</html>