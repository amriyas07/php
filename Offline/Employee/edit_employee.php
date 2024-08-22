<?php 
require_once("../Database/db_connection.php");
$id = $_GET['id'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
    // $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $sql = "UPDATE employee SET Fname = '$fname', Lname= '$lname' WHERE Id = $id";

    if ($conn->query($sql) === TRUE) {
      // echo $conn->query($sql) . "<br>";
        // echo "New record created successfully";
        header("Location: ../Employee/employee.php?page=1");
        die();
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    
    
    
    }
?>