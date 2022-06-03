<?php
echo "siddhant<br>";
if(!file_exists("test.txt"))
{
die("File Not Found !!");
}
else
{
$myfile("test.txt","w");
}