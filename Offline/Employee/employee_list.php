<?php 
require_once("../Database/db_connection.php");
$page = $_GET['page'];
$offset = ($page-1)*3;
$sql = "SELECT * FROM employee ORDER BY Id ASC LIMIT 3 OFFSET $offset";
$data = $conn->query($sql);

$i=1;
if($data===FALSE){
    echo "error".$conn->error;
} elseif($data->num_rows>0){
    echo "
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    ";
    foreach ($data as $datas) {
        echo "
        <tr>
            <td>".$datas['Id']."</td>
            <td>".$datas['Fname']." ".$datas['Lname']."</td>
            <td>".$datas['Stats']."</td>
            <td><a class='buttn edt' href='update.php?id=$datas[Id]'>Update</a> <a class='buttn del' onclick='popup()' href='#'>Delete</a></td>
        </tr>
        ";
        $i++;
    }

} else{
    echo "No Record Found";
}
?>