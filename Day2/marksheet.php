<?php
$physics = 95;
$chemistry = 85;
$math = 74;
$english = 64;
$total = NULL;
$average = NULL;
$percentage = NULL;

$total = $physics + $chemistry + $math + $english ;

$percentage = ($total / 400.0) * 100;

echo "The Total marks   = " . $total . "/400\n";
echo "<br>";
echo "The Percentage    = " . $percentage . "%";

?>