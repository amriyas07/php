<?php
require_once("../../Database/db_connection.php");
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $uname = trim($_POST['username']," ");
    $logname = false;
    $logpas = false;
    $unameLogErr = "";
    $password = trim($_POST['password']," ");
    $passwordLogErr = "";
    $sql = "SELECT username,password FROM register";
    $data = $conn->query($sql);
    if(!$uname and !$password){
        header("location:../../auth/pages-login.php");
    } else{
        foreach($data as $datas){
            if($datas['username']===$uname){
                $logname=true;
                $unameLogErr = "";
                $_SESSION['logNameError'] = $unameLogErr;
            } else{
            }
            if(password_verify($password,$datas['password'])){
                $logpas=true;
            } else{
                $passwordLogErr = "Incorrect Password!";
                $_SESSION['logPassError'] =  $passwordLogErr;
            }
            
        }
    }


    if($logname and $logpas){
        $_SESSION['logNameError'] = "";
        $_SESSION['logPassError'] =  "";
        header("location:../../index.html");
            die();
    } else{
        header("location:../../auth/pages-login.php");
        die();
    }
    
}

 ?>