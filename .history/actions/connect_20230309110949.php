<?php

$con =  mysqli_connect("localhost","root","i","votingsystem");
if($con){
    echo "connection successful";
}else{
    die(mysqli_error($con));  
}


?>

