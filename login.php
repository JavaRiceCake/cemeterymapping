<?php
session_start();
include('includes/header.php');

if(isset($_SESSION['auth'])){
    header('Location: index.php ');
}

?>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 my-5">
                <?php
                    include('messagenotif.php');
                ?>
                <div class="card my-5">
                    <div class="card-header bg-light">
                        <h5>Login</h5>
                    </div>
                    <div class="card-body">
                        <form action="logincode.php" method="post">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <!-- password -->
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password"  class="form-control" placeholder="Password">
                            </div>
                            <hr>
                            <div class="form-group">
                                <button type="submit" name="loginBtn"  class="btn btn-primary btn-block">LogIn</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>









<?php include('includes/script.php');?>
<?php include('includes/footer.php');?>