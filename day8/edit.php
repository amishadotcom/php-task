<?php 
	$connection = mysqli_connect("localhost","root","","demo");
	if (!isset($_GET['id'])||empty($_GET['id'])) {
		header("location:display.php");
	}



	$editid=$_GET['id'];
		
		$editq=mysqli_query($connection,"select * from user where id='{$editid}'") or die ("Error".mysqli_error($connection));
		$editdata=mysqli_fetch_array($editq);
		if ($_POST) 
		{
			$name=$_POST['name'];
			$gender=$_POST['gender'];
			$mobile=$_POST['mobile'];
			
			$uq=mysqli_query($connection,"update user set user_name='{$name}',user_gender='{$gender}',user_mobile='{$mobile}' where id='{$editid}'") or die ("Error".mysqli_error($connection));
			if($uq)
		{
			echo "<script>alert('Record updated');"."window.location='display.php';</script>";
		}		
			
		}
?>

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
	<TD><INPUT TYPE="TEXT" value="<?php echo $editdata['user_name'];?>"  NAME="name" PLACEHOLDER="Name" size="20" required></TD>
</TR>
<TR>
	<TD>Gender</TD>
	<TD><INPUT TYPE="RADIO"
		<?php if($editdata['user_gender']=="MALE"){ echo "checked";} ?> NAME="gender" VALUE="MALE" >Male&nbsp;&nbsp;
        <INPUT TYPE="RADIO" 
        <?php if($editdata['user_gender']=="FEMALE"){ echo "checked";} ?> NAME="gender" VALUE="FEMALE" >Female&nbsp;&nbsp;
	</TD>
</TR>
<TR>
	<TD> Mobile</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="NUMBER" value="<?php echo $editdata['user_mobile'];?>"  NAME="mobile" size="20" PLACEHOLDER="+91" required></TD>
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
