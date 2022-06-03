<?php
$array3=array("siddhant"=>"31","vansh"=>"41","jasnoor"=>"39","aatif"=>"40");
ksort($array3);
foreach($array3 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
?>