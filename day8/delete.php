<?php
$connection = mysqli_connect("localhost","root","","demo");
 $id = $_GET['deleteid'];

 $q=mysqli_query($connection,"update user set is_delete = 1 where id='{$id}'") 
 or die("Error".mysqli_error($connection));

 if($q)
 {
 	echo"<script>alert('record delete');
 	window.location='display.php'</script>";
 }
 ?>

