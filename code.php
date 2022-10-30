<?php
session_start();
include('config/dbcon.php');

if(isset($_POST['check_emailBtn'])){
    
    $email = $_POST['email'];
    if(checkemail($email,$con) ==1){

       echo "already taken!";

    }
}

// FOR USER ADD
if(isset($_POST['addUserBtn'])){
   $name =  $_POST['name'];
   $email = $_POST['email'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $confirmpassword = $_POST['confirmpassword'];

    if($password == $confirmpassword){
 // query
    if(checkemail($email,$con) ==1){

        $_SESSION['status']= "Add User Failed";
        header('Location: registered.php ');

    }else{
        $queryCreate = "INSERT INTO user(name,email,username,password) VALUES('$name','$email','$username','$password')";
        $sqlCreate = $con->query($queryCreate);
    
            // check if successfully inserted
            if($sqlCreate){
            $_SESSION['status']= "Add User Successfully";
            header('Location: registered.php ');
            }else{
                $_SESSION['status']= "Add User Failed";
                header('Location: registered.php ');
            }
    }
    }else{
        $_SESSION['status']= "Password and Confirm Password does not match";
        header('Location: registered.php ');
    }


   
}

// CHECK EMAIL IF NOT EXIST METHOD

function checkemail($email,$con){
    
    $queryRead = "SELECT * FROM user WHERE email = '$email'";
    $sqlRead = $con->query($queryRead);

    if(mysqli_num_rows($sqlRead) > 0){
        return 1;
    }else{
        return 0;
    }

}


// FOR USER UPDATE
if(isset($_POST['updateUserBtn'])){
    $id = $_POST['id'];
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
   
 // query
    $queryUpdate = "UPDATE user SET name='$name',email='$email',username='$username',password='$password' WHERE id = '$id' ";
    $sqlUpdate = $con->query($queryUpdate);

    // check if successfully updated
    if($sqlUpdate){
        $_SESSION['status']= "Update Successfully";
        header('Location: registered.php ');
    }else{
        $_SESSION['status']= "Update Failed";
        header('Location: registered.php ');
    }

  
 
}


// FOR DELETE USER
if(isset($_POST['deleteUserBtn'])){
    $id =$_POST['delete_id'];
   // query
   $queryDelete = "DELETE FROM user WHERE id = '$id' ";
   $sqlDelete = $con->query($queryDelete);

    // check if successfully deleted
    if($sqlDelete){
       $_SESSION['status']= "Delete Successfully";
       header('Location: registered.php ');
    }else{
        $_SESSION['status']= "Delete Failed";
        header('Location: registered.php ');
    }

}



//############# FOR LOT PHP PAGE

if(isset($_POST['addlotBtn'])){
    $lotno =  $_POST['lotno'];
    $section = $_POST['section'];
    
   
      // query
         $queryCreate = "INSERT INTO lot(lot_num,section) VALUES('$lotno','$section')";
         $sqlCreate = $con->query($queryCreate);
     
             // check if successfully inserted
             if($sqlCreate){
             $_SESSION['status']= "Add Lot Successfully";
             header('Location: lot.php ');
             }else{
                 $_SESSION['status']= "Add Lot Failed";
                 header('Location: lot.php ');
             }
}
 
// FOR DELETE USER  
if(isset($_POST['deleteLotBtn'])){
        $id =$_POST['delete_id'];
       // query
       $queryDelete = "DELETE FROM lot WHERE id = '$id' ";
       $sqlDelete = $con->query($queryDelete);
    
        // check if successfully deleted
        if($sqlDelete){
           $_SESSION['status']= "Delete Successfully";
           header('Location: lot.php ');
        }else{
            $_SESSION['status']= "Delete Failed";
            header('Location: lot.php ');
        }
    
}


 // FOR LOT UPDATE
if(isset($_POST['updateLotBtn'])){
    $id = $_POST['id'];
    $lotno =  $_POST['lotno'];
    $section = $_POST['section'];
   
 // query
    $queryUpdate = "UPDATE lot SET lot_num='$lotno', section='$section' WHERE id = '$id' ";
    $sqlUpdate = $con->query($queryUpdate);

    // check if successfully updated
    if($sqlUpdate){
        $_SESSION['status']= "Update Successfully";
        header('Location: lot.php ');
    }else{
        $_SESSION['status']= "Update Failed";
        header('Location: lot.php ');
    }

  
 
}
//############# FOR lot PHP PAGE END


//############# FOR appointment-customer-details PAGE

// for insert customer info

if(isset($_POST['customerBtn'])){
    // customer info
    $Cfname = $_POST['Cfname'];
    $Cemail = $_POST['Cemail'];
    $Clot = $_POST['Clot'];
    $inputGroupSelectCrent = $_POST['inputGroupSelectCrent'];
    $CdateOfBurial = $_POST['CdateOfBurial'];
    $inputGroupSelectCtimeofburial = $_POST['inputGroupSelectCtimeofburial'];

    // deceased info

    $Dfname = $_POST['Dfname'];
    $Dmname = $_POST['Dmname'];
    $Dlname = $_POST['Dlname'];
    $Dage = $_POST['Dage'];
    $inputGroupSelectDcivilstatus = $_POST['inputGroupSelectDcivilstatus'];
    $inputGroupSelectDcasueofdead = $_POST['inputGroupSelectDcasueofdead'];
    $Dborn = $_POST['Dborn'];
    $Ddied = $_POST['Ddied'];
    $Ddeathcertificate = $_POST['Ddeathcertificate'];

    // QUERY
    $queryCreate = "INSERT INTO customer_deceased_details(c_fullname,c_email,c_lot_number,c_rent_buy,c_dateofburial,c_timeofburial,d_firstname,d_middlename,d_lastname,d_age,d_civilstatus,d_causeofdeath,d_born,d_died,d_deathcertificate) 
    VALUES('$Cfname','$Cemail','$Clot','$inputGroupSelectCrent','$CdateOfBurial','$inputGroupSelectCtimeofburial','$Dfname','$Dmname','$Dlname','$Dage','$inputGroupSelectDcivilstatus','$inputGroupSelectDcasueofdead','$Dborn','$Ddied','$Ddeathcertificate')";
    $sqlCreate = $con->query($queryCreate);
    
    // check if successfully inserted
    if($sqlCreate){
    $_SESSION['status']= "Appointment Successfully";
    header('Location: appointment-list.php ');
    }else{
        $_SESSION['status']= "Appointment Failed";
        header('Location: appointment-list.php ');
    }

    
}

// FOR APPOINTMENT LIST UPDATE
if(isset($_POST['updateCustomerBtn'])){

    // customer info
    
    $c_id = $_POST['c_id'];
    $Cfname = $_POST['Cfname'];
    $Cemail = $_POST['Cemail'];
    $Clot = $_POST['Clot'];
    $inputGroupSelectCrent = $_POST['inputGroupSelectCrent'];
    $CdateOfBurial = $_POST['CdateOfBurial'];
    $inputGroupSelectCtimeofburial = $_POST['inputGroupSelectCtimeofburial'];

    // deceased info

    $Dfname = $_POST['Dfname'];
    $Dmname = $_POST['Dmname'];
    $Dlname = $_POST['Dlname'];
    $Dage = $_POST['Dage'];
    $inputGroupSelectDcivilstatus = $_POST['inputGroupSelectDcivilstatus'];
    $inputGroupSelectDcasueofdead = $_POST['inputGroupSelectDcasueofdead'];
    $Dborn = $_POST['Dborn'];
    $Ddied = $_POST['Ddied'];
    $Ddeathcertificate = $_POST['Ddeathcertificate'];
   
 // query
    $queryUpdate = "UPDATE customer_deceased_details SET c_fullname='$Cfname',c_email='$Cemail',c_lot_number='$Clot',c_rent_buy='$inputGroupSelectCrent',c_dateofburial='$CdateOfBurial',c_timeofburial='$inputGroupSelectCtimeofburial',d_firstname='$Dfname',d_middlename='$Dmname',d_lastname='$Dlname',d_age='$Dage',d_civilstatus='$inputGroupSelectDcivilstatus',d_causeofdeath='$inputGroupSelectDcasueofdead',d_born='$Dborn',d_died='$Ddied',d_deathcertificate='$Ddeathcertificate' WHERE c_id = '$c_id' ";
    $sqlUpdate = $con->query($queryUpdate);

    // check if successfully updated
    if($sqlUpdate){
        $_SESSION['status']= "Update Successfully";
        header('Location: appointment-list.php ');
    }else{
        $_SESSION['status']= "Update Failed";
        header('Location: appointment-list.php ');
    }

  
 
}


// for done btn in appointment list , update the status to complete

if(isset($_GET['customer_id'])){
    $status = $_GET['customer_id'];
    $complete = 'complete';

    $queryUpdate = "UPDATE customer_deceased_details SET status='$complete' WHERE c_id = '$status' ";
    $sqlUpdate = $con->query($queryUpdate);
    // check if successfully updated
    if($sqlUpdate){
        $_SESSION['status']= "Appointment Complete";
        header('Location: appointment-list.php ');
    }else{
        $_SESSION['status']= "Appointment Failed";
        header('Location: appointment-list.php ');
    }

}

// FOR delete customer appointment

if(isset($_POST['deleteCustomerBtn'])){
    $id =$_POST['delete_id'];
   // query
   $queryDelete = "DELETE FROM customer_deceased_details WHERE c_id = '$id' ";
   $sqlDelete = $con->query($queryDelete);

    // check if successfully deleted
    if($sqlDelete){
       $_SESSION['status']= "Delete Successfully";
       header('Location: appointment-list.php ');
    }else{
        $_SESSION['status']= "Delete Failed";
        header('Location: appointment-list.php ');
    }

}




//############# FOR appointment-customer-details PAGE END


//############# FOR deceasedPerson.php PAGE END

// FOR delete deceased person

if(isset($_POST['deletedeceasedBtn'])){
    $id =$_POST['delete_id'];
   // query
   $queryDelete = "DELETE FROM customer_deceased_details WHERE c_id = '$id' ";
   $sqlDelete = $con->query($queryDelete);

    // check if successfully deleted
    if($sqlDelete){
       $_SESSION['status']= "Delete Successfully";
       header('Location: deceasedPersons.php ');
    }else{
        $_SESSION['status']= "Delete Failed";
        header('Location: deceasedPersons.php ');
    }

}


?>