<html>
<head>
<title>leap year</title>
</head>
<body>
<?php
function checkLeapYear($year) {
    return checkdate(2, 29, $year);
}
echo checkLeapYear(2016) ? "2016 is a leap year." : "2016 is not a leap year. ";
echo '<br/>';
echo checkLeapYear(2017) ? "2017 is a leap year." : "2017 is not a leap year. ";
?>
</body>
</html>