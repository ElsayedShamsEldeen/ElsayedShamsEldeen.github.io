<?php
$connect = @mysqli_connect('https://databases.000webhost.com/index.php','id21769869_elsayed','masrLab@541563',' id21769869_masrlab');
if(!$connect){
    echo('connection faild : '. mysqli_connect_error());
}

?>