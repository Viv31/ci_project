<!DOCTYPE html>
<html>
<head>
	<title>All Projects</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
	 <?php // include_once('inc/user_navbar.php'); ?>
	<div class="container">
		<h2>All Projects</h2>
    <div class="row">
      <div class="col-md-4">
      <a href="<?php echo base_url().'index.php/ProjectManger/Subtasks'?>" class="btn btn-primary" >Add New SUbtask</a>
    </div>

    </div>
		
		<br>
		
				<div class="row">
			<div class = "col-md-10 mx-auto">
				<table class="table table-dark table-hover ">
    <thead>
      <tr>
        <th>Sno<?php $sno='1'; ?></th>
        <th>Subtask Description</th>
        <th>Assigned To</th>
        <th>Project Name</th>
        
       
      </tr>
    </thead>
   
     
  <tbody>
  	<?php if(!empty($SubTask_List)){ foreach($SubTask_List as $SubTaskData){ ?>
      <tr>
        <td><?php echo $sno++;?></td>
        <td><?php echo $SubTaskData['subtask_description']; ?></td>
        <td><?php echo $SubTaskData['assigned_to'];?></td>
        <td ><?php echo $SubTaskData['project_name'];?></td>
       
        
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
</body>
</html>