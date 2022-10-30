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

<!-- delete user modal -->
<div class="modal fade" id="DeleteUserMOdal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Deceased Person</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="code.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="delete_id" class="delete_deceased_id">
            <p>
              Are you sure? , you want to delete this Person..
            </p>
      </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="deletedeceasedBtn" class="btn btn-danger">Yes, Delete!</button>
          </div>
      </form>

    </div>
  </div>
</div>
<!-- delete user modal -->



      
<!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Deceased Persons</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Deceased Persons</li>
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
        <button onclick="window.print()" class="btn btn-primary btn-sm float-right">Print</button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
        <th>Id</th>
        <th>FirstName</th>
        <th>MiddleName</th>
        <th>LastName</th>
        <th>Age</th>
        <th>Civil Status</th>
        <th>Cause Of Death</th>
        <th>Born</th>
        <th>Died</th>
        <th>ACTION</th>

        </tr>
        </thead>
        <tbody>
        <?php
        $queryRead = "SELECT * FROM customer_deceased_details WHERE status = 'complete'";
        $sqlRead = $con->query($queryRead);

        if(mysqli_num_rows($sqlRead) > 0){

        while($result = mysqli_fetch_array($sqlRead)){

        ?>
        <tr>
        <td><?php echo $result['c_id']; ?></td>
        <td><?php echo $result['d_firstname']; ?></td>
        <td><?php echo $result['d_middlename']; ?></td>
        <td><?php echo $result['d_lastname']; ?></td>
        <td><?php echo $result['d_age']; ?></td>
        <td><?php echo $result['d_civilstatus']; ?></td>
        <td><?php echo $result['d_causeofdeath']; ?></td>
        <td><?php echo $result['d_born']; ?></td>
        <td><?php echo $result['d_died']; ?></td>
        <td>
        <button type="button" value="<?php echo $result['c_id']; ?>" class="btn btn-danger btn-sm deleteBtn">DELETE</a>

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
    var user_id = $(this).val();
   
    $('.delete_deceased_id').val(user_id);
    $('#DeleteUserMOdal').modal('show');
  });
});
</script>
<?php include('includes/footer.php');?>