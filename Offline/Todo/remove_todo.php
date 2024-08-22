<?php 
require_once("../Database/db_connection.php");

// echo $_GET['id'];
if($_SERVER['REQUEST_METHOD']==="GET"){ 
    $id = $_GET['id'];
    $sql = "DELETE FROM tasks WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
      echo $conn->query($sql) . "<br>";
        // echo "New record created successfully";
        // header("Location: ../Todo/list_todo.php?page=1");
        // die();
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    
    
    

    }
    
    
?>