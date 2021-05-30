
<html>
<head>
	<title>Marksheet</title>
</head>
<body>
	<center>
	<font color="red" size="5" align="center"><B>Enter your marks in marksheet</B></font><BR>
<form action="marksheetdisplay.php" method="GET">
	<table align="center" bgcolor="red" border="1">
		<tr>
			<td>Name</td>
			<td><input type="text" name="txt1"></td>
		</tr>
		<tr>
			<td>Enroll Number</td>
			<td><input type="text" name="txt2"></td>
		</tr>
		<tr>
			<td>Java</td>
			<td><input type="Number" name="java" min="0" max="100"></td>
		</tr>
		<tr>
			<td>Android</td>
			<td><input type="Number" name="android" min="0" max="100"></td>
		</tr>
		<tr>
			<td>Php</td>
			<td><input type="Number" name="php" min="0" max="100"></td>
		</tr>
		<tr>
			<td>Phython</td>
			<td><input type="Number" name="phython" min="0" max="100"></td>
		</tr>
		<tr>
			<td>c++</td>
			<td><input type="Number" name="c" min="0" max="100"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>
</center>
</body>
</html>