<nav class="navbar navbar-expand-md bg-info navbar-dark">
  <a class="navbar-brand" href="dashboard.php">CI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'index.php/ProjectManger/create_subtask' ?>">Subtask</a>
      </li>

      
  <li class="nav-item pull-right">
        <a href="<?php echo base_url().'index.php/ProjectManger/logout';?>" class="nav-link" >Logout</a>
      </li> 
</ul>
  </div>  
</nav>