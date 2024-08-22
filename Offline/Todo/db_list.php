<?php 
require_once("../Database/db_connection.php");
$page = $_GET['page'];
$offset = ($page-1)*3;
$sql = "SELECT * FROM tasks ORDER BY id ASC LIMIT 3 OFFSET $offset";
$data = $conn->query($sql);
$i=1;
if($data===FALSE){
    echo "error".$conn->error;
} elseif($data->num_rows>0){
    echo "
        <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Change Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
    ";
    foreach ($data as $datas) {
        echo "
        <tr>
            <td>".$i."</td>
            <td>".$datas['taskname']."</td>
            <td>".$datas['taskdescription']."</td>
            <td>".$datas['stats']."</td>
            <td><a class='buttn edt' href='changestatus_todo.php?id=$datas[id]'>Change Status</a></td>
            <td><a class='buttn edt' href='update_todo.php?id=$datas[id]'>Update</a></td>
            <td><button class='buttn del remove' value='$datas[id]'>Remove</button></td>
        </tr>
        ";
        $i++;
    }

} else{
    echo "No Record Found";
}

?>