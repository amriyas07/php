<?php 
require_once("../Database/db_connection.php");
$id = $_GET['id'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
  $task_name = $_POST['tname'];
  $task_des = $_POST['tdes'];
  $sql = "UPDATE tasks SET  taskname= '$task_name', taskdescription= '$task_des' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
      // echo $conn->query($sql) . "<br>";
        // echo "New record created successfully";
        header("Location: ../Todo/list_todo.php?page=1");
        die();
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    
    
    
    }
?>