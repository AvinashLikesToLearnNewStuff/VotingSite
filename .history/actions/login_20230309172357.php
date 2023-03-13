<?php
include<'connect.php'>

$username=$_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$std = $_POST['std'];

$sql = "Select * from `userdata` where username=$username"

?>