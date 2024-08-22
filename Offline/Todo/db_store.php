<?php 
require_once("../Database/db_connection.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $task_name = $_POST['tname'];
    $task_des = $_POST['tdes'];
    $task_status = $_POST['tstatus'];

$sql = "INSERT INTO tasks (taskname,taskdescription,stats) VALUES('$task_name','$task_des','$task_status')";

if ($conn->query($sql) === TRUE) {
  // echo $conn->query($sql) . "<br>";
    // echo "New record created successfully";
    header("Location: ../Todo/list_todo.php?page=1");
    die();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }



echo $task_name, '<br>';
echo $task_des, '<br>';
echo $task_prior, '<br>';
echo $task_status, '<br>';


}


$conn->close();
?>