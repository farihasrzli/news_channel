<?php
include 'newsportaldb.php';

$username=$_POST['username'];
$password=$_POST['password'];

$sql=mysqli_query($con, "SELECT * FROM admin WHERE admin_username='$username' AND admin_password='$password'");

$row=mysqli_fetch_array($sql);
$count=mysqli_num_rows($sql);

if($count==1)
{
	header("Location:admin_dashboard.php");
}
else
{
	echo "<script>alert('Wrong username and password')</script>";
	echo "<script>setTimeout(\"location.href = 'http://localhost/MainProject/admin_login.php';\",500);</script>";
}


?>