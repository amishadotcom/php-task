<html>
<body>
<?php
$a=0;
$b=1;
echo "fibonaci series:<br> $a <br> $b <br>";
for($i=0;$i<15;$i++)
{
	$c=$a+$b;
	$a=$b;
	$b=$c;
	echo"$c <br>";
}
?>
</body>
</html>
