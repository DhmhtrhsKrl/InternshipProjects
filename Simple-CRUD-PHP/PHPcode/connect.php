<?php 
// Connection to Database

$con = new mysqli('localhost','root','','internship');

if(!$con){
    die(mysqli_error($con));
}


?>