<?php
 require_once '../connect.php'; 
//  print_r($_SESSION);
//  exit;
if (!isset($_SESSION["email"])) {
  header("Location: index.php");
  exit();
 
}

?>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user-circle"> 
            <?php echo $_SESSION['ticket_fn'].' '.$_SESSION['ticket_ln']?>
          </i>
          <!-- <span class="badge badge-danger navbar-badge">
         3
          </span> -->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <ul id="chatList"
    		    class="list-group mvh-50 overflow-auto">
    		
    				<div class="alert alert-primary  
    				            text-center">
					  
            
            <center> 

            <img src="../uploads/<?=$_SESSION['ticket_user_url']?>"
    			         class="rounded-circle" style="width: 75px; height:   77.5px;   border-top:solid 3px #dddddd;
      border-left:solid 3px #dddddd;
      border-right:solid 3px #dddddd;
      border-bottom:solid 3px #dddddd;" ></center>
           <p><h1><?php echo $_SESSION['ticket_fn'].' '.$_SESSION['ticket_ln']?></h1><br>
           <?php 
          //  echo $_SESSION['ticket_user_department']?>
           
            
            
					</div>
          <li class="user-footer">
          <a href="ticket_profile_home_container.php?id" class="btn btn-primary btn-flat">
          <i class="fas fa-address-card"></i> Profile</a>

          <a href="../logout.php" class="btn btn-primary btn-flat float-right" >
          <i class='fas fa-sign-out-alt'></i> Logout</a>
          </li>
       
    		</ul>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
     
            
      

      
    </ul>
  </nav>
  <!-- /.navbar -->