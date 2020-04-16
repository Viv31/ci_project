<!DOCTYPE html>
<html>
<head>
	<title>All Projects</title>
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
      margin-top: 50px;

    }
    
  </style>
</head>
<body>
	 <?php // include_once('inc/user_navbar.php'); ?>
   <div class="container-fluid">
	<div class="container">
		<h2>All Projects</h2>
		
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
        <th>Status</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
   
     
  <tbody>
  	<?php if(!empty($project_list)){ foreach($project_list as $ProjectData){ ?>
      <tr>
        <td><?php echo $sno++;?></td>
        <td><?php echo $ProjectData['project_name']; ?></td>
        <td><?php echo $ProjectData['project_details'];?></td>
        <td ><?php echo $ProjectData['assigned_to'];?></td>
        <td><?php echo $ProjectData['project_status'];?></td>
        <td>
        	<a href="<?php echo base_url().'index.php/user/edit/'.$ProjectData['id']?>" class="btn btn-primary">Edit</a>
        </td>
        	<td>
            <a href="<?php echo base_url().'index.php/user/delete/'.$ProjectData['id']?>" class="btn btn-danger">Delete</a>
        </td>
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
</div>
</body>
</html>