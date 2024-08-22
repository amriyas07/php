<?php 
require_once("../../Database/db_connection.php");
$sql = "SELECT * FROM employees";
$data = $conn->query($sql);
if($data===FALSE){
    echo "Error".$conn->error;
} else if($data->num_rows>0){
    echo "
    <thead>
        <tr>
            <th><b>N</b>ame</th>
            <th>Mobile</th>
            <th class='d-none d-lg-flex d-xl-flex'>Email</th>
            <th>Status</th>
        </tr>
    </thead>
    ";
    foreach($data as $datas){
        echo "
        <tbody>
        <tr>
        <td>".$datas['firstName']." ".$datas['lastName']."</td>
        <td>".$datas['mobile']."</td>
        <td class='d-none d-lg-flex d-xl-flex'>".$datas['email']."</td>
        <td>".$datas['status']."</td>
        </tr>
        </tbody>
        ";
    }
} else{
    echo "No Record Found";
}
?>