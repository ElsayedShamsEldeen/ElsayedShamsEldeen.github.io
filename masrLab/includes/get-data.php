<?php
session_start();

$id=$_SESSION['message'];
$data=array();
$response;
$sql_fetch = "SELECT * from patients where phone LIKE '%$id%'";
    $response=mysqli_query($connect,$sql_fetch);
    $data=mysqli_fetch_all($response , MYSQLI_ASSOC);
    unset($_SESSION['message']);

// if (isset($_POST['submit']) ){
//     $id=$_POST['patient-id'];



// }


?>