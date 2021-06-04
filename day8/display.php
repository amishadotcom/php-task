<!DOCTYPE html>
<html>
<head>
	<title>display data</title>
</head>
<body>



<?php
$connection = mysqli_connect("localhost","root","","demo");
$q=mysqli_query($connection,"select * from user where is_delete=0")
or die("Error".mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>name</th>";
echo "<th>gender</th>";
echo "<th>mobile</th>";
echo "<th>Action</th>";
echo "<th>Action</th>";

$i=0;
while($row = mysqli_fetch_array($q))
 {
	$i++;
	echo "<tr>";
	echo "<td>$i</td>";
	echo "<td>{$row['user_name']}</td>";
	echo "<td>{$row['user_gender']}</td>";
	echo "<td>{$row['user_mobile']}</td>";
	echo "<td><a href='delete.php?deleteid={$row['id']}'>Delete</a></td>";
	echo "<td><a href='edit.php?id={$row['id']}'>Edit</a><td>";
	echo "</tr>";
}
echo "</table>";
echo "<a href='user_registration.php'>Add record</a>";
?>

</body>
</html>