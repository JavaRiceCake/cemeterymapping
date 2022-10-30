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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit-Customer Appointment</li>
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
            <h3 class="card-title">Edit-Customer Appointment</h3>
            <a href="appointment-list.php" class="btn btn-danger btn-sm float-right">Back</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
      <form action="code.php" method="POST">
          <div class="modal-body">
            <?php
                if(isset($_GET['customer_id'])){
                    $customer_id = $_GET['customer_id'];
                    $queryRead = "SELECT * FROM customer_deceased_details WHERE c_id = '$customer_id' LIMIT 1";
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
                        <input type="text" name="Cfname" class="form-control" value="<?php echo $result['c_fullname']?>" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" name="Cemail" class="form-control" value="<?php echo $result['c_email']?>" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <label for="">Lot No.</label>
                        <input type="text" name="Clot" class="form-control" value="<?php echo $result['c_lot_number']?>" placeholder="Last name">
                    </div>
                    <div class="form-group">
                        <label for="">Rent/Buy</label>
                        <select class="custom-select" id="inputGroupSelectCrent" name="inputGroupSelectCrent" value="<?php echo $result['c_rent_buy']?>">
                            <option value="rent">Rent</option>
                            <option value="buy">Buy</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Date of Burial</label>
                        <input type="date" name="CdateOfBurial" class="form-control" value="<?php echo $result['c_dateofburial']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Time of Burial</label>
                        <select class="custom-select" id="inputGroupSelectCtimeofburial
                        " name="inputGroupSelectCtimeofburial" value="<?php echo $result['c_timeofburial']?>">
                            <option value="8am-10am">8:00am-10:00am</option>
                            <option value="11am-1pm">11:00am-1:00pm</option>
                            <option value="2pm-4pm">2:00pm-4:00pm</option>
                        </select>
                    </div>

                </div>
                <!-- customer info -->

                 <!-- deceased info -->
                <div class="col-md-6">
        
                <h4>Deceased Information</h4>

                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" name="Dfname" class="form-control" value="<?php echo $result['d_firstname']?>" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label for="">Middle Name</label>
                    <input type="text" name="Dmname" class="form-control" value="<?php echo $result['d_middlename']?>" placeholder="Middle Name">
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" name="Dlname" class="form-control" value="<?php echo $result['d_lastname']?>" placeholder="Last name">
                </div>
                <div class="form-group">
                    <label for="">Age</label>
                    <input type="text" name="Dage" class="form-control" value="<?php echo $result['d_age']?>" placeholder="Age">
                </div>
                <div class="form-group">
                    <label for="">Civil Status</label>
                    <select class="custom-select" id="inputGroupSelectDcivilstatus" name="inputGroupSelectDcivilstatus" value="<?php echo $result['d_civilstatus']?>">
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorce">Divorce</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Cause Of Death</label>
                    <select name="inputGroupSelectDcasueofdead" class="custom-select" id="inputGroupSelectDcasueofdead" value="<?php echo $result['d_causeofdeath']?>">
                        <option value="Heart disease">Heart disease</option>
                        <option value="Cancer">Cancer</option>
                        <option value="Chronic lower respiratory diseases">Chronic lower respiratory diseases</option>
                        <option value="Stroke">Stroke</option>
                        <option value="Alzheimers disease">Alzheimers disease</option>
                        <option value="Diabetes">Diabetes</option>
                        <option value="Influenza and pneumonia">Influenza and pneumonia</option>
                        <option value="Kidney disease">Kidney disease</option>
                        <option value="Suicide">Suicide</option>
                        <option value="Septicemia">Septicemia</option>
                        <option value="Chronic liver disease and cirrhosis">Chronic liver disease and cirrhosis</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Born</label>
                    <input type="date" name="Dborn" class="form-control" value="<?php echo $result['d_born']?>">
                </div>
                <div class="form-group">
                    <label for="">Died</label>
                    <input type="date" name="Ddied" class="form-control" value="<?php echo $result['d_died']?>">
                </div>
                <div class="form-group">
                    <label for="">Death certificate</label>
                    <input class="form-control" type="file" name="Ddeathcertificate" id="formFile" accept=".jpg,.jpeg,.pdf" value="<?php echo $result['d_deathcertificate']?>">
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
            <div class="modal-footer">
              <button type="submit" name="updateCustomerBtn" class="btn btn-primary">UPDATE</button>
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