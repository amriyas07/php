<?php 
$conn = new mysqli("localhost","root","","crud");
if($conn->connect_error){
    die("connection_failed".$conn->connect_error);
}
?>