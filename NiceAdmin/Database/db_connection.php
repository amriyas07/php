<?php
$conn = new mysqli("localhost","root","","repo");
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
 ?>