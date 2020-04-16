<!DOCTYPE html>
<html>
<head>
	<title>All Members</title>
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
		<h2>All Projects</h2>
		<div class="row">
			<div class="col-md-4">
			<a href="<?php echo base_url().'index.php/admin/add_new_team_memeber'?>" class="btn btn-primary" >Add New Member</a>
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
        
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
   
     
  <tbody>
  	<?php if(!empty($members_list)){ foreach($members_list as $Members){ ?>
      <tr>
        <td><?php echo $sno++;?></td>
        <td><?php echo $Members['member_name']; ?></td>
        <td><?php echo $Members['member_email'];?></td>
        <td ><?php echo $Members['member_password'];?></td>
       
        <td>
        	<a href="<?php echo base_url().'index.php/user/edit/'.$Members['id']?>" class="btn btn-primary">Edit</a>
        </td>
        	<td>
            <a href="<?php echo base_url().'index.php/user/delete/'.$Members['id']?>" class="btn btn-danger">Delete</a>
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