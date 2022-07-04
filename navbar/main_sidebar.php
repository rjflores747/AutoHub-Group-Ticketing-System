<?php
 require_once '../connect.php'; 
//  print_r($_SESSION);
//  exit;
if (!isset($_SESSION["email"])) {
  header("Location: index.php");
  exit();
 
}
// if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
//   header('location: index.php');
//   die();

// }
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../img/autohub-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AutoHub Group</span>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
<br>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item menu-open">
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../admin/dashboard.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
             
              
            </ul>
          </li>
          <li class="nav-item">
            <!-- <a href="../admin/ticket_incident.php" class="nav-link">
              <i class='fas fa-ticket-alt'></i>
              <p>Ticket Incident
               <span class="right badge badge-danger">New</span> -->
              <!-- </p>
            </a>  -->
          </li>
         
          <!-- <li class="nav-header">INCIDENT</li> -->
         
            <li class="nav-item">
              <a href="../admin/ticket_incident.php" class="nav-link">
                <i class='fas fa-ticket-alt'></i>
                <p> Ticket Incident</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../admin/ticket_table_container.php" class="nav-link">
              <i class='fas fa-ticket-alt' style='color:red'></i>
              <p>Ticket Table </p> 
              </a>
            </li>
            <li class="nav-item">
              <a href="../admin/ticket_details_container.php" class="nav-link">
              <i class='fas fa-info' ></i>
              <p>Ticket Details </p> 
              </a>
            </li>
       

          <!-- <li class="nav-header">MISCELLANEOUS</li> -->
          <!-- <li class="nav-item">
            <a href="iframe.html" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Tabbed IFrame Plugin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a> -->
          </li>
          <?php 
          if($_SESSION['ROLE'] == '1' || $_SESSION['ROLE'] == '2'){?>
                                                <!-- <li class="nav-header">Employee</li> -->
                                              <li class="nav-item">
                                                <a href="Ticket_add_employee.php" class="nav-link">
                                                <i class="fas fa-user-plus"></i>
                                                  <p>Add Employee</p>
                                                  
                                                </a>
                                              </li>
                           <?php 
          }
                           ?>                 
          
          <!-- <li class="nav-header">History</li> -->
          <?php 
          if($_SESSION['ROLE'] == '1'){?>
          <li class="nav-item">
            <a href="../admin/ticket_permission_container.php?id=<?php echo md5('autohubgroup')?>" class="nav-link">
            <i class='fas fa-history' style='color:red'></i>
              <p class="text">Settings</p>
            </a>
          </li>
         <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>