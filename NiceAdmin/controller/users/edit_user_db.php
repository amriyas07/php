<?php
require_once("../../Database/db_connection.php");
$id = $_GET['id'];
if($_SERVER['REQUEST_METHOD']==="POST"){
    $fname = trim($_POST['fname']," ");
    $lname = trim($_POST['lname']," ");
    $mobile = trim($_POST['email']," ");
    $email = trim($_POST['mobile']," ");
    $sql = "UPDATE employees SET  firstName= '$fname', lastName= '$lname' ,email= '$email', mobile= '$mobile' WHERE id= $id";
    if($conn->query($sql)===TRUE){
        header("location:../../users/tables-data.php?page=1");
        die();
    } else{
        echo "Error".$conn->error;
    }
}
?>