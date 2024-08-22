<?php 
require_once("../Database/db_connection.php");
$page = $_GET['page'];
$offset = ($page-1)*3;
$sql = "SELECT * FROM employees ORDER BY id ASC LIMIT 3 OFFSET $offset";
// $sql = "SELECT * FROM employees";
$data = $conn->query($sql);
if($data===FALSE){
    echo "Error".$conn->error;
} else if($data->num_rows>0){
    echo "
        <thead>
            <tr>
                <th><b>N</b>ame</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
    ";
    foreach($data as $datas){
        echo "
        <tbody>
        <tr>
        <td>".$datas['firstName']." ".$datas['lastName']."</td>
        <td>".$datas['mobile']."</td>
        <td>".$datas['email']."</td>
        <td>".$datas['status']."</td>
        <td> <a href='edit-user.php?id=$datas[id]' class='btn btn-primary rounded-circle p-2'><i class='fa-solid fa-pencil'></i></a> <button class='btn btn-danger remove rounded-circle p-2 mx-1' value='$datas[id]'><i class='fa-solid fa-trash'></i></button>  </td>
        </tr>
        </tbody>
        ";
    }
} else{
    echo "No Record Found";
}
?>