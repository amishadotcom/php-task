<!DOCTYPE html>
<html>
<head>
	<title>Display Marksheet</title>
</head>
<body>
<FONT COLOR="darkblue" SIZE="5" ALIGN="CENTER"><B>Display the marksheet</B></FONT><BR>
<?php
	$name=$_GET['txt1'];
	$enroll=$_GET['txt2'];
	$java=$_GET['java'];
	$android=$_GET['android'];
	$php=$_GET['php'];
	$phython=$_GET['phython'];
	$c=$_GET['c'];
?>
	<table>
		<tr>
			<td>NAME</td>
			<td><?php   echo "$name"; ?></td>
		</tr>
		<tr>
			<td>Enroll Number</td>
			<td><?php echo "$enroll";  ?></td>
		</tr>
		<tr>
			<td>Java</td>
			<td><?php   echo "$java"; ?></td>
		</tr>
		<tr>
			<td>Android</td>
			<td><?php   echo "$android"; ?></td>
		</tr>
		<tr>
			<td>Php</td>
			<td><?php   echo "$php"; ?></td>
		</tr>
		<tr>
			<td>Phython</td>
			<td><?php   echo "$phython"; ?></td>
		</tr>
		<tr>
			<td>c++</td>
			<td><?php   echo "$c"; ?></td>
		</tr>
		<tr>
			<td>Total</td>
			<td bgcolor="yellow"><?php  $a=$java+$android+$php+$phython+$c; echo "$a"; ?></td>
		</tr>
		<tr>
			<td>Persentage</td>
			<td bgcolor="pink"><?php  $b=$a/5; echo "$b"; ?></td>
		</tr>
		<tr>
			<td>average</td>
			<?php  
					if ($b>80) {
						echo "<td bgcolor='red'>distric</td>";  

					}
					elseif ($b>70) {
						echo "<td bgcolor='green'>First</td>";
					}
					elseif ($b>50) {
						echo "<td bgcolor='blue'>Pass</td>";
					}
					else
					{
						echo "<td bgcolor='red'>Fail</td>";
					}

			?>
		</tr>
		
	</table>
</body>
</html>