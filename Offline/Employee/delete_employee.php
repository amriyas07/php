<?php 
require_once("../Database/db_connection.php");

// echo $id;


if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $id = $_GET['id'];
    $sql = "DELETE FROM employee WHERE Id = $id";
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