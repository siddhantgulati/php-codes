<?php
echo "siddhant"."\n";
   function track() {
      STATIC $count = 0;
      $count++;
      echo $count."\n";
   }
   
   track();
   track();
   track();
?>