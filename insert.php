<?php
require_once('database.php');

$first_name = $_POST['first_name'];
$lase_name  = $_POST['last_name'];
$email      = $_POST['email'];

$info = "INSERT INTO information (first_name,last_name,email) VALUES('$first_name','$lase_name','$email')";

$result = mysqli_query($connection,$info) or die(mysqli_error($connection));

if($result == True){
    header("Location:all_info.php");
}else{
    echo "Error";
}


?>