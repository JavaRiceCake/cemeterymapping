<?php
session_start();
if(!isset($_SESSION['auth'])){
  header('Location: login.php ');
}

include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php');






?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
           
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-12">
          <?php
              include('messagenotif.php');
          ?>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                $result = $con->query("select * from lot");
                $count=$result->num_rows;
                echo "<H3>$count</h3>";
                ?> 

                <p>Available Lots</p>
              </div>
              <div class="icon">
                <i class="ion ion-home"></i>
              </div>
              <a href="lot.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
                $result = $con->query("select * from customer_deceased_details where status = 'complete'");
                $count=$result->num_rows;
                echo "<H3>$count</h3>";
                ?> 

                <p>Deceased Person</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="deceasedPersons.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
              <?php
                $result = $con->query("select * from customer_deceased_details WHERE status ='pending'");
                $count=$result->num_rows;
                echo "<H3>$count</h3>";
                ?> 

                <p>No. of Appointment</p>
              </div>
              <div class="icon">
                <i class="ion ion-calendar"></i>
              </div>
              <a href="appointment-list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>

<?php include('includes/script.php');?>
<?php include('includes/footer.php');?>