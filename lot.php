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
<!-- Lot  Modal -->
<div class="modal fade" id="addLot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Lot</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
<!-- creat lot form modal-->
      <form action="code.php" method="POST">
          <div class="modal-body">
              <!-- lot number -->
              <div class="form-group">
                  <label for="">Lot No.</label>
                  <input type="text" name="lotno" class="form-control" placeholder="Lot No.">
              </div>
              <!-- Section -->
              <div class="form-group">
                  <label for="">Section</label>
                  <input type="text" name="section" class="form-control" placeholder="Section">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="addlotBtn" class="btn btn-primary">Save</button>
          </div>
      </form>
  <!-- creat lot form modal -->
    </div>
  </div>
</div>

<!-- delete Lot modal -->
<div class="modal fade" id="DeleteUserMOdal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Lot</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="code.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="delete_id" class="delete_lot_id">
            <p>
              Are you sure? , you want to delete this Lot..
            </p>
      </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="deleteLotBtn" class="btn btn-primary">Yes, Delete!</button>
          </div>
      </form>

    </div>
  </div>
</div>
<!-- delete lot modal -->



      
<!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Lot</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Lot</li>
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
        <a href="#" data-bs-toggle="modal" data-bs-target="#addLot" class="btn btn-primary btn-sm float-right">Add New Lot</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
        <th>ID</th>
        <th>LOT NO.</th>
        <th>SECTION</th>
        <th>STATUS</th>
        <th>ACTION</th>

        </tr>
        </thead>
        <tbody>
        <?php
        $queryRead = "SELECT * FROM lot";
        $sqlRead = $con->query($queryRead);

        if(mysqli_num_rows($sqlRead) > 0){

        while($result = mysqli_fetch_array($sqlRead)){

        ?>
        <tr>
        <td><?php echo $result['id']; ?></td>
        <td><?php echo $result['lot_num']; ?></td>
        <td><?php echo $result['section']; ?></td>
        <td><?php echo $result['status']; ?></td>
        <td>
        <a href="lot-edit.php?lot_id=<?php echo $result['id']; ?>" class="btn btn-info btn-sm">EDIT</a>
        <button type="button" value="<?php echo $result['id']; ?>" class="btn btn-danger btn-sm deleteBtn">DELETE</a>

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

<!-- live email check -->
<script>

  $(document).ready(function (){

    $('.email_id').keyup(function (e){
      var email = $('.email_id').val();
      
      $.ajax({
        type:"POST",
        url:"code.php",
        data:{
          'check_emailBtn':1,
          'email':email,
        },
        success: function(response){
          $('.email_error').text(response);
        }
      });

    });
  });
</script>




<!-- delete Modal -->
<script>
$(document).ready(function (){
  $('.deleteBtn').click(function (e){
    e.preventDefault();
    var user_id = $(this).val();
   
    $('.delete_lot_id').val(user_id);
    $('#DeleteUserMOdal').modal('show');
  });
});
</script>
<?php include('includes/footer.php');?>