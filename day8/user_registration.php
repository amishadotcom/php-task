<HTML>
<HEAD>
<TITLE>Registrastion form</TITLE>
</HEAD>
<BODY>
<CENTER>
<FONT COLOR="blue" SIZE="5" ALIGN="CENTER"><B>Regestration Form</B></FONT><BR>
<FORM action="" method="POST">
<TABLE ALIGN="CENTER" bgcolor="" >
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
	<TD> Mobile</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="NUMBER" NAME="mobile" size="20" PLACEHOLDER="+91" required></TD>
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
	$mobile=$_POST['mobile'];
	


$q=mysqli_query($connection,"insert into user(user_name,user_gender,user_mobile)
values('$name','$gender','$mobile')") 
or die("Error".mysqli_error($connection));
//check connection
if($q)
{
	echo "<script>alert('record added');</script>";
}
}
echo "<a href='display.php'>display record</a>";
?>