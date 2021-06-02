<HTML>
<HEAD>
<TITLE>Registrastion form</TITLE>
</HEAD>
<BODY>
<CENTER>
<FONT COLOR="blue" SIZE="5" ALIGN="CENTER"><B>Regestration Form</B></FONT><BR>
<FORM action="" method="POST">
<TABLE ALIGN="CENTER" bgcolor="FFE4E1" >
<TR>
	<TD> name</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="TEXT" NAME="name" PLACEHOLDER="Name" size="20" required></TD>
</TR>
<TR>
	<TD>Gender</TD>
	<TD><INPUT TYPE="RADIO" NAME="gender" VALUE="MALE" >Male&nbsp;&nbsp;
        <INPUT TYPE="RADIO" NAME="gender" VALUE="FEMALE" >Female&nbsp;&nbsp;
	</TD>
</TR>
<TR>
	<TD>Select Your Date Of Birth</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="DATE" NAME="dob" size="20" required></TD>
</TR>
<TR>
	<TD> E-mail</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="EMAIL" NAME="email" size="20" PLACEHOLDER="E-mail" required></TD>
</TR>
<TR>
	<TD> Mobile</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="NUMBER" NAME="mobile" size="20" PLACEHOLDER="+91" required></TD>
</TR>
<TR>
	<TD> Address</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><TEXTAREA ROWS="5" COLS="23" NAME="address" PLACEHOLDER="Address" required></TEXTAREA></TD>
</TR>
<TR>
	<TD> Password</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="PASSWORD" NAME="pass" size="20" PLACEHOLDER="Password" required></TD>
</TR>
<TR>
	<TD> area</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="TEXT" NAME="area" PLACEHOLDER="area" size="20" required></TD>
</TR>
<TR>
	<TD> bloodgroup</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="text" NAME="bg" PLACEHOLDER="bloodgroup" size="20" required></TD>
</TR>





<TR>
	<TD></TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="SUBMIT" NAME="SUBMIT" VALUE="submit">
	<INPUT TYPE="RESET" NAME="RESET" VALUE="reset">
	</TD>
</TR>

</TABLE>
</FORM>
</CENTER>
</BODY>
</HTML>

<?php
$host="localhost";
$username="root";
$password="";
$dbname="demo";
$connection = mysqli_connect($host,$username,$password,$dbname);
if($_POST)
{
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$dob=date("y-m-d");
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	$password=$_POST['pass'];
	$area=$_POST['area'];
	$bloodgroup=$_POST['bg'];


$q=mysqli_query($connection,"insert into student(name,gender,dob,email,mobile,address,password,area,bloodgroup)
values('{$name}','$gender','$dob','$email','$mobile','$address','$password','$area','$bloodgroup')") 
or die("Error".mysqli_error($connection));
//check connection
if($q)
{
	echo "<script>alert('record added');</script>";
}
}
?>