 <?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
 <?php
   include_once("config.php");
   $list = [
     ["home","HOME"],
	 ["product","PRODUCT"],
	 ["about","TEAM"]
   ];
   
 ?>

  <?php
    foreach($list as $m){
	 $cs="";
	 if($m[0]==$page)$cs=" class=active ";
	 if($m[0]=="product") 
	    include("menu_product.php");
	 else 
	    echo "<li $cs><a href=\"index.php?p=$m[0]\">$m[1]</a></li>";
	}
  ?>


        