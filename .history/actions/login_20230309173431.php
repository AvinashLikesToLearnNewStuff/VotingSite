<?php
include<'connect.php'>

$username=$_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$std = $_POST['std'];

$sql = "Select * from `userdata` where username='$username' and mobile='$mobile'  and password='$password' and std='$std'"; 

$result=mysqli_query($con,$sql);
if ($mysqli_num_rows($result)>0) {
    # code...
}else {
    echo '<script>
    alert("invalid credentials");
    window.location="../";
    </script>'
}

?>