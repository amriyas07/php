<?php 
require_once("../Database/db_connection.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $first_name = ucfirst($_POST['fname']);
    $last_name = ucfirst($_POST['lname']);
    $password = $_POST['pass'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    // echo $hash;

$sql = "INSERT INTO employee (Fname,Lname,Pass) VALUES('$first_name','$last_name','$hash')";


if ($conn->query($sql) === TRUE) {
  // echo $conn->query($sql) . "<br>";
    // echo "New record created successfully";
    header("Location: ../Employee/employee.php?page=1");
    die();
    // echo "Account created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }



// echo $task_name, '<br>';
// echo $task_des, '<br>';
// echo $task_prior, '<br>';
// echo $task_status, '<br>';


}


$conn->close();
?>