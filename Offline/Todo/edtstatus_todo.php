<?php 
require_once("../Database/db_connection.php");
$id = $_GET['id'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
  $task_status = $_POST['tstatus'];
  $sql = "UPDATE tasks SET  stats= '$task_status' WHERE id = $id";

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