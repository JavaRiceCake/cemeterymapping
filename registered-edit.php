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
              <li class="breadcrumb-item active">Edit-Registered Users</li>
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
            <h3 class="card-title">Edit-Registered User</h3>
            <a href="registered.php" class="btn btn-danger btn-sm float-right">Back</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
      <form action="code.php" method="POST">
          <div class="modal-body">
            <?php
                if(isset($_GET['user_id'])){
                    $user_id = $_GET['user_id'];
                    $queryRead = "SELECT * FROM user WHERE id = '$user_id' LIMIT 1";
                    $sqlRead = $con->query($queryRead);

                    if(mysqli_num_rows($sqlRead)>0){
                        while($result = mysqli_fetch_array($sqlRead)){
                            ?>
                                <input type="hidden" name="id" value="<?php echo $result['id']?>">
                                <!-- NAME -->
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="<?php echo $result['name']?>" class="form-control" placeholder="Name">
                                </div>
                                <!-- EMAIL -->
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" value="<?php echo $result['email']?>" class="form-control" placeholder="Email">
                                </div>
                                <!-- USERNAME -->
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="username" value="<?php echo $result['username']?>" class="form-control" placeholder="Username">
                                </div>
                                <!-- PASSWORD -->
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" value="<?php echo $result['password']?>" class="form-control" placeholder="Password">
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
              <button type="submit" name="updateUserBtn" class="btn btn-primary">UPDATE</button>
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