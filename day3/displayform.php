<html>
<head>
	<title></title>
</head>
<body>
<?php
	$fn = $_POST['FNAME'];
	$ln = $_POST['LNAME'];
	$email = $_POST['EMAIL'];
	$moblie = $_POST['MOB'];
	$dob = $_POST['DOB'];
	$gender = $_POST['GENDER'];
	$city = $_POST['CITY'];
	$state = $_POST['STATE'];
	$address = $_POST['ADDRESS'];
	
	echo "your first name is:".$fn ."<br>";
	echo "your last name is:".$ln ."<br>";  
	echo "your email is:".$email ."<br>";  
	echo "your mobile no is:".$moblie ."<br>";  
	echo "your DOB is:".$dob ."<br>";  
	echo "your gender is:".$gender ."<br>";  
	echo "your city is:".$city ."<br>";  
	echo "your state is:".$state ."<br>";   
	echo "your address is:".$address ."<br>";  
	
?>
</body>
</html>