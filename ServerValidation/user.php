<?php 
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $password = $_POST['pass'];
    if(!$first_name){
        $_SESSION['fname'] = "fname is required";
        header("location:index.php");
    } else{
        $_SESSION['fname'] = "";
        echo "Success";
    }
    // echo isset($_SESSION['fname']);

    if(!$last_name){
        $_SESSION['lname'] = "lname is required";
        header("location:index.php");
    } else{
        $_SESSION['lname'] = "";
    }

    if(!$password){
        $_SESSION['pass'] = "password is required";
        header("location:index.php");
    } else{
        $_SESSION['pass'] = "";
    }
}
    

?>