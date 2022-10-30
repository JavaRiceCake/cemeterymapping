<?php
session_start();
if(isset($_SESSION['auth'])){
    session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    header('Location: login.php ');
}else{
    header('Location: login.php ');
}

?>