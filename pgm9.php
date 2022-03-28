<?php
$states = "Mississipi Alabanna Texas Massachusetts kanas";
$statesArray = [];
$states1 = explode(' ',$states);
echo "original Array : <br>";
foreach($states1 as $i => $value)
print("STATES[$i] = $value<br>");
foreach($states1 as $states)
{
	if(preg_match('/xas$/',($states)))
	$statesArray[0] = ($states);
}
foreach($states1 as $states)
{
	if(preg_match('/^k.*s$/i',($states)))
	$statesArray[1] = ($states);
}
foreach($states1 as $states)
{
	if(preg_match('/^M.*s$/',($states)))
	$statesArray[2] = ($states);
}
foreach($states1 as $states)
{
	if(preg_match('/a$/',($states)))
	$statesArray[3] = ($states);
}
echo "<br><br>Resultant Array :<br>";
foreach($statesArray as $array => $value)
print("STATES[$array] = $value <br>");

?>
