<?php
session_start();
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
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">View Customer Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container">
            <div class="row">
                
            <div class="card">
            <div class="card-header">
            <h3 class="card-title">View Customer Details</h3>
            <a href="appointment-list.php" class="btn btn-danger btn-sm float-right">Back</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body ">
                <div class="row ">
                    <div class="col-md-10 ">
      <form >
          <div class="modal-body">
            <?php
                if(isset($_GET['customerView_id'])){
                    $customerView_id = $_GET['customerView_id'];
                    $queryRead = "SELECT * FROM customer_deceased_details WHERE c_id = '$customerView_id' LIMIT 1";
                    $sqlRead = $con->query($queryRead);

                    if(mysqli_num_rows($sqlRead)>0){
                        while($result = mysqli_fetch_array($sqlRead)){
                            ?>
                            <input type="hidden" name="c_id" value="<?php echo $result['c_id']?>">
                <div>           
              <div class="row">  
                <!-- customer info -->
                <div class="col-md-6">
                <h4>Customer Information</h4>

                    <div class="form-group">
                        <label for="">Full Name</label>
                        <p><?php echo $result['c_fullname']?></p>
                    </div>
                    <div class="form-group">
                        <label for="">Email Address</label>
                       <p><?php echo $result['c_email']?></p>
                    </div>
                    <div class="form-group">
                        <label for="">Lot No.</label>
                        <p><?php echo $result['c_lot_number']?></p>

                    </div>
                    <div class="form-group">
                        <label for="">Rent/Buy</label>
                        <p><?php echo $result['c_rent_buy']?></p>

                      
                    </div>
                    <div class="form-group">
                        <label for="">Date of Burial</label>
                        <p><?php echo $result['c_dateofburial']?></p>
                        
                    </div>
                    <div class="form-group">
                        <label for="">Time of Burial</label>
                        <p><?php echo $result['c_timeofburial']?></p>
                        
                    </div>

                </div>
                <!-- customer info -->

                 <!-- deceased info -->
                <div class="col-md-6">
        
                <h4>Deceased Information</h4>

                <div class="form-group">
                    <label for="">First Name</label>
                    <p><?php echo $result['d_firstname']?></p>

                </div>
                <div class="form-group">
                    <label for="">Middle Name</label>
                    <p><?php echo $result['d_middlename']?></p>

                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <p><?php echo $result['d_lastname']?></p>
                   
                </div>
                <div class="form-group">
                    <label for="">Age</label>
                    <p><?php echo $result['d_age']?></p>
                    
                </div>
                <div class="form-group">
                    <label for="">Civil Status</label>
                    <p><?php echo $result['d_civilstatus']?></p>
                    
                </div>
                <div class="form-group">
                    <label for="">Cause Of Death</label>
                    <p><?php echo $result['d_causeofdeath']?></p>
                  
                </div>
                <div class="form-group">
                    <label for="">Born</label>
                    <p><?php echo $result['d_born']?></p>
                    
                </div>
                <div class="form-group">
                    <label for="">Died</label>
                    <p><?php echo $result['d_died']?></p>
                    
                </div>
                <div class="form-group">
                    <label for="">Death certificate</label>
                    <p><?php echo $result['d_deathcertificate']?></p>

                </div>
            </div>
            <!-- deceased info -->

              </div>
            </div>                           
                     <?php

                        }
                    }else{
                        echo "<h4>No record found!</h4>";
                    }

                }
            ?>
              
            </div>
      </form>
                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>
        </div>
      </div>
 </section>
</div>

<?php include('includes/script.php');?>
<?php include('includes/footer.php');?>