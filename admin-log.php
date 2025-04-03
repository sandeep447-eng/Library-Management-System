<?php
$con = mysqli_connect("localhost","root","","library management system");
if(!$con){
    echo mysqli_connect_error();
}
else{
    $q = "select * from admin_dash where id='$email' and pwd='$pwd'";
    $res = mysqli_query($con,$q);
    if($res>0)
    header("location:admin-home.html");
}
?>


<!-- Admin log in page -->