<?php
session_start();
include('sessionfalse.php');
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- USER  Modal -->
<!-- <div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
<!-- creat user form -->
  
<!-- delete user modal -->
<div class="modal fade" id="DeleteCustomerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cancel Appointment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="code.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="delete_id" class="delete_customer_id">
            <p>
              Are you sure? , you want to cancel?
            </p>
      </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="deleteCustomerBtn" class="btn btn-danger">Yes, Cancel!</button>
          </div>
      </form>

    </div>
  </div>
</div>
<!-- delete user modal -->

<!-- customer view modal -->
<div class="modal fade" id="ViewCustomerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Customer Details View</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form>
          <div class="modal-body">
        <?php
        // $view_id = $_GET['customerView_id'];
        $queryRead = "SELECT * FROM customer_deceased_details WHERE c_id ='pending'";
        $sqlRead = $con->query($queryRead);

        if(mysqli_num_rows($sqlRead) > 0){

        while($result = mysqli_fetch_array($sqlRead)){

        ?>

        <?php
        }

        }else{
        ?>
        <tr>
        <td>No Record Found</td>
        </tr>
        <?php
        }
        ?>
      </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            
          </div>
      </form>

    </div>
  </div>
</div>
<!-- customer view modal -->

      
<!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Appointment List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Appointment List</li>
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
        <div class="col-md-12">
        <?php
        if(isset($_SESSION['status'])){
        echo "<h4>".$_SESSION['status']."</h4>";
        unset($_SESSION['status']);
        }

        ?>

        <div class="card">
        <div class="card-header">
        <h3 class="card-title"></h3>
        <a href="appointment-customer-details.php" class="btn btn-primary btn-sm float-right">Creat New Appointment</a>
        
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>APPOITNMENT DATE</th>
        <th>APPOITNMENT TIME</th>
        <th>RENT/BUY</th>
        <th>LOT NO.</th>
        <th>ACTION</th>

        </tr>
        </thead>
        <tbody>
        <?php
        $queryRead = "SELECT * FROM customer_deceased_details WHERE status ='pending'";
        $sqlRead = $con->query($queryRead);

        if(mysqli_num_rows($sqlRead) > 0){

        while($result = mysqli_fetch_array($sqlRead)){

        ?>
        <tr>
        
        <td><?php echo $result['c_id']; ?></td>
        <td><a style="color:black;" href="appointment-view.php?customerView_id=<?php echo $result['c_id']; ?>"><?php echo $result['c_fullname']; ?></a></td>
        <td><?php echo $result['c_email']; ?></td>
        <td><?php echo $result['c_dateofburial']; ?></td>
        <td><?php echo $result['c_timeofburial']; ?></td>
        <td><?php echo $result['c_rent_buy']; ?></td>
        <td><?php echo $result['c_lot_number']; ?></td>
        <td>
        <a href="appointment-list-edit.php?customer_id=<?php echo $result['c_id']; ?>" class="btn btn-secondary btn-sm me-1">Edit</a>
        <a href="code.php?customer_id=<?php echo $result['c_id']; ?>" class="btn btn-info btn-sm me-1">Done</a>
        <button type="button" value="<?php echo $result['c_id']; ?>" class="btn btn-danger btn-sm me-1 deleteBtn">Cancel</a>

        </td>

        </tr>
        <?php
        }

        }else{
        ?>
        <tr>
        <td>No Record Found</td>
        </tr>
        <?php
        }
        ?>

        </tbody>
        </table>
        </div>
        </div>

        </div>
        </div>
        </div>
      </div>
    </section>
     <!-- /.content-header -->
<?php include('includes/script.php');?>



<!-- delete Modal -->
<script>
$(document).ready(function (){
  $('.deleteBtn').click(function (e){
    e.preventDefault();
    var customer_id = $(this).val();
   
    $('.delete_customer_id').val(customer_id);
    $('#DeleteCustomerModal').modal('show');
  });
});
</script>

<!-- view customer details Modal -->
<script>
$(document).ready(function (){
  $('.CustomerViewBtn').click(function (e){
    e.preventDefault();
    var customer_id = $(this).val();
   
    $('.view_customer_id').val(customer_id);
    $('#ViewCustomerModal').modal('show');
  });
});
</script>
<?php include('includes/footer.php');?>