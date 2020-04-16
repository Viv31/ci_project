<!DOCTYPE html>
<html>
<head>
	<title>All Projects</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
	 <?php include_once('inc/admin_navbar.php'); ?>
	<div class="container">
		<h2>All Reports</h2>
		
		<br>
		
				<div class="row">
			<div class = "col-md-10 mx-auto">
				<table class="table table-dark table-hover ">
    <thead>
      <tr>
        <th>Sno<?php $sno='1'; ?></th>
        <th>Project Name</th>
        <th>Assigned To</th>
        <th>Work Status</th>
        <th>Work Description</th>
        <th>Date</th>
        
      </tr>
    </thead>
   
     
  <tbody>
  	<?php if(!empty($report_list)){ foreach($report_list as $ReportData){ ?>
      <tr>
        <td><?php echo $sno++;?></td>
        <td><?php echo $ReportData['project_name']; ?></td>
        <td><?php echo $ReportData['assigned_to'];?></td>
        <td ><?php echo $ReportData['status'];?></td>
        <td><?php echo $ReportData['work_description'];?></td>
        <td><?php echo $ReportData['Todaysdate'];?></td>
        
      </tr>
      <?php }} else {?>
      <tr>
      	<td colspan="4">Records Not Found</td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
			
		</div>
		
	</div>
</body>
</html>