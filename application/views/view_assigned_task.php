<!DOCTYPE html>
<html>
<head>
	<title>Assigned Task</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
	<nav class="navbar navbar-expand-md bg-info navbar-dark">
  <a class="navbar-brand" href="dashboard.php">CI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      
      
    <li class="nav-item pull-right">
        <a class="nav-link" href="login.php">Login</a>
      </li> 

  
<li class="nav-item">
        <a class="nav-link" href="my_appointments.php">My Appointment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" ></a>

      </li>
<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       My Profile
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="my_profile.php">Profile</a>
        <a class="dropdown-item" href="change_password.php">Change Password</a>
       
      </div>
      
    </li>
    <li class="nav-item dropdown">
      
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">

      </a>
      <div class="dropdown-menu"> </div>
      
    </li>


 <li class="nav-item pull-right">
        <a href="logout.php" class="nav-link" >Logout</a>
      </li> 

      

 
        
    </ul>
  </div>  
</nav>
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
</body>
</html>