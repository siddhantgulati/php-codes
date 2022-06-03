<?php
$x=10;
echo "siddhant"."\n";
function myfun()
{
	$y=20;
	echo"$y<br>";
	echo $GLOBALS['x']."<br>";
}
myfun();
?>