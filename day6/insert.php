<?php
$host="localhost";
$username="root";
$password="";
$dbname="demo";
//create connection

$connection = mysqli_connect($host,$username,$password,$dbname);
$q=mysqli_query($connection,"insert into user(user_name,user_gender,user_mobile)
values('amisha','female','9714517548')") or die("Error".mysqli_error($connection));
//check connection
if($q)
{
	echo "<script>alert('record added');</script>";
}
?>