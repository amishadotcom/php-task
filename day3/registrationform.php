<HTML>
<HEAD>
<TITLE>Registrastion form</TITLE>
</HEAD>
<BODY>
<CENTER>
<FONT COLOR="blue" SIZE="5" ALIGN="CENTER"><B>Regestration Form</B></FONT><BR>
<FORM action="displayform.php" method="POST">
<TABLE ALIGN="CENTER" bgcolor="FFE4E1" >
<TR>
	<TD>Enter Your First name</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="TEXT" NAME="FNAME" PLACEHOLDER="First Name" size="20" required></TD>
</TR>
<TR>
	<TD>Enter Your Last name</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="TEXT" NAME="LNAME" PLACEHOLDER="Last Name" size="20" required></TD>
</TR>
<TR>
	<TD>Enter Your Password</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="PASSWORD" NAME="PASSWORD" size="20" PLACEHOLDER="Password" required></TD>
</TR>
<TR>
	<TD>ReEnter Your Password</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="PASSWORD" NAME="REPASSWORD" size="20" PLACEHOLDER="RePassword" required></TD>
</TR>
<TR>
	<TD>Enter Your E-mail</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="EMAIL" NAME="EMAIL" size="20" PLACEHOLDER="E-mail" required></TD>
</TR>
<TR>
	<TD>Enter Your Mobile</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="NUMBER" NAME="MOB" size="20" PLACEHOLDER="+91" required></TD>
</TR>
<TR>
	<TD>Select Your Date Of Birth</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="DATE" NAME="DOB" size="20" required></TD>
</TR>
<TR>
	<TD>Select Your Gender</TD>
	<TD><INPUT TYPE="RADIO" NAME="GENDER" VALUE="MALE" >Male&nbsp;&nbsp;
        <INPUT TYPE="RADIO" NAME="GENDER" VALUE="FEMALE" >Female&nbsp;&nbsp;
	</TD>
</TR>
<TR>
	<TD>Enter Your City</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="TEXT" NAME="CITY" size="20" PLACEHOLDER="City" required></TD>
</TR>
<TR>
	<TD>Select Your State</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD>
	<SELECT NAME="STATE">
	<OPTION VALUE="GUJARAT">Gujarat
	<OPTION VALUE="MUMBAI" >Mumbai
	<OPTION VALUE="RAJSTHAN" >Rajsthan
	<OPTION VALUE="DELHI" >Delhi
	<OPTION VALUE="KARNATAKA">Karnataka 
	<OPTION VALUE="JAMMU & KASHMIR" >Jammu & Kashmir
	<OPTION VALUE="TAMILNADU" >Tamilnadu
	<OPTION VALUE="KERALA">Kerala
	<OPTION VALUE="PUNE"  >Pune
	<OPTION VALUE="CHANDIGADH">Chandigadh
	</SELECT>
</TD>
</TR>

<TR>
	<TD>Enter Your Address</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><TEXTAREA ROWS="5" COLS="23" NAME="ADDRESS" PLACEHOLDER="Address" required></TEXTAREA></TD>
</TR>
<TR>
	<TD>Select Your Hobbies</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="CHECKBOX" NAME="READING" CHECKED>Reading<BR>
		<INPUT TYPE="CHECKBOX" NAME="LISTENING" CHECKED>Listening Song<BR>
		<INPUT TYPE="CHECKBOX" NAME="CYCLING" CHECKED>Cycling<BR>
		<INPUT TYPE="CHECKBOX" NAME="WRITTING" CHECKED>Writting<BR>
		<INPUT TYPE="CHECKBOX" NAME="TEACHING" CHECKED>Teaching<BR>
		<INPUT TYPE="CHECKBOX" NAME="PHOTOGRAPHY">Photography<BR>
	</TD>
</TR>
<TR>
	<TD>Upload Your  Photo</TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<TD><INPUT TYPE="FILE" NAME="Choose File" size="20" ></TD>
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
