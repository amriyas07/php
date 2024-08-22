<?php
require_once("../../Database/db_connection.php");
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
   $name = ucfirst(trim($_POST['name']," "));
   $nameErr = "";
   $mobile = trim($_POST['mobile']," ");
   $mobileErr = "";
   $email = trim($_POST['email']," ");
//    $emailErr = "";
   $uname = trim($_POST['username']," ");
   $uNameErr = "";
   $password = trim($_POST['password']," ");
   $passwordErr = "";
//    set session value
   if(!$name){
    $nameErr = "Name should not be empty!";
    $_SESSION['name-error'] = $nameErr;
    header("location:../../auth/pages-register.php");
   } else{
    $_SESSION['name-error'] = $nameErr;
   }

   if(!$mobile){
    $mobileErr = "Mobile No should not be empty!";
    $_SESSION['mobile-error'] = $mobileErr;
    header("location:../../auth/pages-register.php");
   } else{
    $_SESSION['mobile-error'] = $mobileErr;
   }

//    if(!$email){
//     $emailErr = "Email should not be empty!";
//     $_SESSION['email-error'] = $emailErr;
//     header("location:../../auth/pages-register.php");
//    } else{
//     $_SESSION['email-error'] = $emailErr;
//    }

   if(!$uname){
    $uNameErr = "Username should not be empty!";
    $_SESSION['uName-error'] = $uNameErr;
    header("location:../../auth/pages-register.php");
   } else{
    $_SESSION['uName-error'] = $uNameErr;
   }

   if(!$password){
    $passwordErr = "Password should not be empty!";
    $_SESSION['PassW-error'] = $passwordErr;
    header("location:../../auth/pages-register.php");
   } else{
    $_SESSION['PassW-error'] = $passwordErr;
   }


//    for insert into database
   if($name and $mobile and $email and $uname and $password){
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO register(name,mobile,email,username,password) VALUES('$name','$mobile','$email','$uname','$hash')";
    if($conn->query($sql)===TRUE){
        header("location:../../index.html");
        die();
    } else{
        echo "Error".$sql."<br/>".$conn->error;
    }
   } else{
    echo "Error to insert";
   }
}
 ?>