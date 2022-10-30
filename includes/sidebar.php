 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="index.php" class="brand-link">
      <img src="assets/dist/img/mylogo.png" alt="HagonoyCemetery Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light ">HagonoyCemetery</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/userimg.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">R-Jay Rosas</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-calendar nav-icon"></i>
                  <p>Appointments
                  <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <!-- appointment Items -->
                <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="appointment-list.php" class="nav-link ">
                  <i class="far fa-calendar nav-icon"></i>
                  <p>List of Appointment</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="appointment-customer-details.php" class="nav-link ">
                  <i class="fa fa-id-card nav-icon"></i>
                  <p>Customer Details</p>
                </a>
                </li>
                </ul>
                 <!-- appointment Items -->
              </li>
              <li class="nav-item">
                <a href="deceasedPersons.php" class="nav-link active">
                  <i class="far fa-user nav-icon"></i>
                  <p>Deceased Persons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="lot.php" class="nav-link active">
                  <i class="far fa fa-home nav-icon"></i>
                  <p>Lot</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-header">Settings</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>Admin Profile
              <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>

          
          <li class="nav-item">
            <a href="registered.php" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>Registered User</p>
             
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon fa fa-cog"></i>
              <p>Role for User</p>
              
            </a>
          </li>

          <li class="nav-item">
            <a href="logoutcode.php" class="nav-link">
            <i class="nav-icon fa fa-arrow-left"></i>
              <p>LogOut</p>
              
            </a>
          </li>
             
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>