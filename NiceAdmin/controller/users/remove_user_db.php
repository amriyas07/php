<?php 
require_once("../../Database/db_connection.php");
if($_SERVER['REQUEST_METHOD']==="GET"){ 
$id = $_GET['id'];
$sql = "DELETE FROM employees WHERE id = $id";
if($conn->query($sql)===TRUE){
    // header("location:../../users/tables-data.php");
    // die();
} else{
    echo "Error".$conn->error;
}
}
?>