<?php
  include_once("config.php");
  $phpfile="body_$page.php";
  if(file_exists($phpfile)){
     include($phpfile);
  }else{
     echo "ไม่พบไฟล์  $phpfile ";
  }  
?>  
