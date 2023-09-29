<?php

// Connection to Database

    $con = new mysqli('localhost','root','','ajaxparadigm');
    if(!$con){
    die(mysqli_error($con));
    }
    /*else{
    echo "Succesfully Connected";
    }*/


?>