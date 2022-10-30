<?php

session_start();
include('sessionfalse.php');
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper ">
<section class="content mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Customer Details
                        </h4>
                    </div>
                    <div class="card-body">
 <!-- creat user form -->
      <form action="code.php" method="POST">
          <div>           
              <div class="row">
               
                <!-- customer info -->
                <div class="col-md-6">
                <h4>Customer Information</h4>

                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" name="Cfname" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" name="Cemail" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <label for="">Lot No.</label>
                        <input type="text" name="Clot" class="form-control" placeholder="Last name" required>
                    </div>
                    <div class="form-group">
                        <label for="">Rent/Buy</label>
                        <select class="custom-select" id="inputGroupSelectCrent" name="inputGroupSelectCrent">
                            <option value="rent">Rent</option>
                            <option value="buy">Buy</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Date of Burial</label>
                        <input type="date" name="CdateOfBurial" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <label for="">Time of Burial</label>
                        <select class="custom-select" id="inputGroupSelectCtimeofburial
                        " name="inputGroupSelectCtimeofburial">
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
                    <input type="text" name="Dfname" class="form-control" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <label for="">Middle Name</label>
                    <input type="text" name="Dmname" class="form-control" placeholder="Middle Name" required>
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" name="Dlname" class="form-control" placeholder="Last name" required>
                </div>
                <div class="form-group">
                    <label for="">Age</label>
                    <input type="text" name="Dage" class="form-control" placeholder="Age" required>
                </div>
                <div class="form-group">
                    <label for="">Civil Status</label>
                    <select class="custom-select" id="inputGroupSelectDcivilstatus" name="inputGroupSelectDcivilstatus">
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorce">Divorce</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Cause Of Death</label>
                    <select name="inputGroupSelectDcasueofdead" class="custom-select" id="inputGroupSelectDcasueofdead" >
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
                    <input type="date" name="Dborn" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Died</label>
                    <input type="date" name="Ddied" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Death certificate</label>
                    <input class="form-control" type="file" name="Ddeathcertificate" id="formFile" accept=".jpg,.jpeg,.pdf"  required>
                </div>
            </div>
            <!-- deceased info -->

              </div>
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
              <button type="submit" name="customerBtn" class="btn btn-primary">Save</button>
          </div>
      </form>
  <!-- creat user form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




</div>
<!-- Content Wrapper. Contains page content -->

<?php include('includes/script.php');?>
<?php include('includes/footer.php');?>