<?php
echo "siddhant<br>";
$cars = array("Lamborgini", "Audi", "Toyota");
sort($cars);
print_r($cars);
echo "<br>";
$numbers = array(15, 10, 90, 22, 11);
rsort($numbers);
print_r($numbers);
echo "<br>";
$age = array("vishal" => "12", "Siddhant" => "19", "Vansh" => "34");
asort($age);
print_r($age);
echo "<br>";
$age = array("vishu" => "56", "Aman" => "43", "Naman" => "18");
ksort($age);
print_r($age);
echo "<br>";
$age = array("samarth" => "17", "bahvya" => "48", "Upanshu" => "47");
arsort($age);
print_r($age);
echo "<br>";
$age = array("sarthak" => "11", "tushar" => "39", "Devina" => "22");
krsort($age);
print_r($age);
echo "<br>";
