<?php

$uname="hey!";
$pwd="admin";

session_start();

if(isset($_SESSION['uname']))
{
   echo "<h1>Welcome".$_SESSION['uname']."</h1>";

   echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
}
else{
   if($_POST['uname']==$uname && $_POST['pwd'] == $pwd)
   {
      
      $_SESSION['uname'] = $uname;

      echo "<script>location.href='welcome.php'</script>";
   }
   else{
      echo "<script>alert('username or password incorrect!')</script>";
   }
}
?>