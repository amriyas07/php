<?php 
require_once("../../Database/db_connection.php");
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
$fname = trim($_POST['fname']," ");
// echo strlen($fname);
// echo $_POST['fname'];
// echo strlen($_POST['fname']);
$fnameErr = "";
$lname = trim($_POST['lname']," ");
$lnameErr = "";
$email = trim($_POST['email']," ");
$emailErr = "";
$mobile = trim($_POST['mobile']," ");

$mobErr = "";

if(!$fname){
    $fnameErr = "First Name should not be empty!";
    $_SESSION['fname-error'] = $fnameErr;
    header("location:../../users/add-user.php");
} else{
    $_SESSION['fname-error'] = $fnameErr;
}

if(!$lname){
    $lnameErr = "Last Name should not be empty!";
    $_SESSION['lname-error'] = $lnameErr;
    header("location:../../users/add-user.php");
} else{
    $lnameErr = "";
    $_SESSION['lname-error'] = $lnameErr;
}

// if(!$email){
//     $emailErr = "Email should not be empty!";
//     $_SESSION['email-error'] = $emailErr;
//     header("location:../users/add-user.php");
// } else{
//     $emailErr = "";
//     $_SESSION['email-error'] = $emailErr;
// }

if(!$mobile){
    $mobErr = "Mobile Number should not be empty!";
    $_SESSION['mob-error'] = $mobErr;
    header("location:../../users/add-user.php");
} else{
    $mobErr = "";
    $_SESSION['mob-error'] = $mobErr;
}

if($fname and $lname and $email and $mobile){ 
    $sql = "INSERT INTO employees(firstName,lastName,email,mobile) VALUES('$fname','$lname','$email','$mobile')";
    if($conn->query($sql)===TRUE){
        header("location:../../users/tables-data.php?page=1");
        die();
    } else{
        echo "Error".$sql."<br/>".$conn->error;
    }
} else{
    echo "error to insert";
}

}

?>