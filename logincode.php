<?php
session_start();

include('config/dbcon.php');


if (isset($_POST['loginBtn'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];

    $queryRead = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $sqlRead = $con->query($queryRead);

    if (mysqli_num_rows($sqlRead) > 0 ) {

        while($result = mysqli_fetch_array($sqlRead)){
            $user_id = $result['id'];
            $user_name = $result['name'];
            $user_email = $result['email'];
            $user_username = $result['username'];

        }
        $_SESSION['auth']=true;
        $_SESSION['auth_user']=[
            'user_id'=>$user_id,
            'user_name'=>$user_name,
            'user_email'=>$user_email,
            'user_username'=>$user_username
        ];

        $_SESSION['status']= "LogIn Success!";
        header('Location: index.php ');

    }else{
        $_SESSION['status']= "Invalid Email or Password";
        header('Location: login.php ');
    }






}





?>





