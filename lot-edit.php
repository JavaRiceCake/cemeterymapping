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
              <li class="breadcrumb-item active">Edit-Lot </li>
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
            <h3 class="card-title">Edit-Lot</h3>
            <a href="lot.php" class="btn btn-danger btn-sm float-right">Back</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
      <form action="code.php" method="POST">
          <div class="modal-body">
            <?php
                if(isset($_GET['lot_id'])){
                    $lot_id = $_GET['lot_id'];
                    $queryRead = "SELECT * FROM lot WHERE id = '$lot_id' LIMIT 1";
                    $sqlRead = $con->query($queryRead);

                    if(mysqli_num_rows($sqlRead)>0){
                        while($result = mysqli_fetch_array($sqlRead)){
                            ?>
                                <input type="hidden" name="id" value="<?php echo $result['id']?>">
                               <!-- lot number -->
                                <div class="form-group">
                                    <label for="">Lot No.</label>
                                    <input type="text" name="lotno" value="<?php echo $result['lot_num']?>" class="form-control" placeholder="Lot No.">
                                </div>
                                <!-- Section -->
                                <div class="form-group">
                                    <label for="">Section</label>
                                    <input type="text" name="section" value="<?php echo $result['section']?>" class="form-control" placeholder="Section">
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
              <button type="submit" name="updateLotBtn" class="btn btn-primary">UPDATE</button>
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