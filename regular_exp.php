<?php
$str = "web_developer_css";
$ptrn = "/web/i";

echo "siddhant<br>";
echo preg_match($ptrn, $str);

echo "<br>";
echo preg_match_all($ptrn, $str);

echo "<br>";
echo preg_replace($ptrn, "siddhant", $str);
?>

<?php
$pattern = "/^color/im";
$text = "Color red is more visible than \ncolor blue in daylight.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found."
?>

<?php
$pattern = '/\bcar\w*/';
$replacement = '<b>$0</b>';
$text = 'Words begining with car: cart, carrot, cartoon. Words ending with car: scar, oscar, supercar.';
echo "<br>";
echo preg_replace($pattern, $replacement, $text);
?>
