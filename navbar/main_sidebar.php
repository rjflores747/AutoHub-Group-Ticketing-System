<?php
 require_once '../connect.php'; 

if (!isset($_SESSION["id"])) {
  header("Location: index.php");
  exit();
 
}

?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
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
                <a href="../admin/ticket_dashboard_container.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
             
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-ticket-alt"></i>
              <p>
              Navigation Menu
              <i class="right fas fa-angle-left text-md"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="../admin/ticket_incident.php" class="nav-link">
                <i class='fas fa-ticket-alt'></i>
                  <p> Create </p>
                </a>
              </li>
                <li class="nav-item">
                <a href="../admin/ticket_myticket_table_container.php" class="nav-link">
                <i class='fas fa-ticket-alt'></i>
                  <p>My active tickets</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../admin/ticket_table_container.php" class="nav-link">
                <i class='fas fa-ticket-alt'></i>
                  <p> Department tickets </p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="../admin/ticket_support_table_container.php" class="nav-link">
                <i class='fas fa-ticket-alt'></i>
                  <p> Assigned Tickets</p>
                </a>
              </li>
            </ul>
          </li>
          </li>
                 
          <?php 
          if($_SESSION['ticket_user_role'] == '1' || $_SESSION['ticket_user_role'] == '2'){?>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-tools"></i>
              <p>
                 Configuration
                 <i class="right fas fa-angle-left text-md"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../admin/ticket_role_add_container.php" class="nav-link">
                  <i class="fas fa-user-cog"></i>
                  <p>Employees </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../admin/ticket_suggesstion_add_container.php" class="nav-link ">
                  <i class="fas fa-users-cog"></i>
                  <p> Subject masterfile</p>
                </a>
              </li>
            </ul> 
          </li>
          
         <?php } ?>
         <?php 
          if($_SESSION['ticket_user_role'] == '1' || $_SESSION['ticket_user_role'] == '2'){?>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-file-excel"></i>
              <p>
                 Reports
                 <i class="right fas fa-angle-left text-md"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
           
              <li class="nav-item">
                <a href="../admin/ticket_permission_container.php" class="nav-link ">
                <i class="fas fa-file-pdf"></i>
                  <p>Incident Masterfile Reports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../admin/ticket_department_report_container.php" class="nav-link ">
                <i class="fas fa-file-pdf"></i>
                  <p>Department Reports List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../admin/ticket_report_user_container.php" class="nav-link ">
                <i class="fas fa-file-pdf"></i>
                  <p>User Reports List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../admin/ticker_reports_status_list_container.php" class="nav-link ">
                <i class="fas fa-file-pdf"></i>
                  <p>Ticker Reports  Per Status</p>
                </a>
              </li>
            </ul> 
          </li>
          
         <?php } ?>
         <?php 
          if($_SESSION['ticket_user_role'] == '1'){?>
         <li class="nav-item menu-open">
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../admin/ticket_history_logs_container.php" class="nav-link">
                <i class="nav-icon fas fa-history"></i>
                  <p>History Logs</p>
                </a>
              </li>
             
              
            </ul>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>