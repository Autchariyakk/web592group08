 
	
	<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/prettyPhoto.css" />
<link rel="stylesheet" href="css/custom-styles.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.quicksand.js"></script>
<script src="js/jquery.custom.js"></script>
<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/prettyPhoto.css" />
<link rel="stylesheet" href="css/custom-styles.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.quicksand.js"></script>
<script src="js/jquery.custom.js"></script>
<?php
 $gid=$_GET['g'];
 use google\appengine\api\users\UserService;
 use google\appengine\api\cloud_storage\CloudStorageTools;
 if(!isset($db['groups'][$gid])){
   echo "ไม่พบข้อมูลกลุ่มสินค้า";
   return;
 } 
 $grec = $db['groups'][$gid];
 $list = [];
 if(isset($db['items'][$gid]))$list=$db['items'][$gid];
 
  $i=1;
 
    $i=1;
echo '<body>';
	echo '<div class="color-bar-1"></div>';
  echo '  <div class="color-bar-2 color-bg"></div>';
    
   echo ' <div class="container main-container">';
    
      echo '<div class="row header">';
   echo ' <div class="row">';

        
       echo ' <div class="span12 gallery-single">';

            echo '<div class="row">';
              echo '  <div class="span6">';
				
			    foreach($list as $pid=>$prec){
		$imgtag="";
	 if(isset($prec['picfile']) && file_exists($prec['picfile'])){
		 $img=CloudStorageTools::getImageServingUrl($prec['picfile'],["size"=>500]);
		 $imgtag2 = "<img src ='$img' class='img-centered' height='500'>";
	 }
	 echo ' </div>';
                echo ' <div class="span6">	 ';
   echo "<h2>$prec[name]</h2>";
    echo '<hr class="star-primary">';
		 echo " $imgtag2
		
		 <h3>==== รายละเอียด ====</h3>
		 $prec[detail] 
		 "; 	  
   echo '</div>';
                echo ' <div class="span6">';
                     echo '<ul class="project-info">';
                         echo '<li><h6>Date:</h6> 09/12/15</li>';
                         echo '<li><h6>Client:</h6> John Doe, Inc.</li>';
                        echo ' <li><h6>Services:</h6> Design, Illustration</li>';
                        echo ' <li><h6>Art Director:</h6> Jane Doe</li>';
                        echo ' <li><h6>Designer:</h6> Jimmy Doe</li>';
                    echo ' </ul>';

                     echo '<button class="btn btn-inverse pull-left" type="button">Visit Website</button>';
                    echo ' <a href="#" class="pull-right"><i class="icon-arrow-left"></i>Back to Gallery</a>';
                echo ' </div>';
            echo ' </div>';

         echo '</div>';

     echo '</div>';
    
    echo ' </div>'; 

  $i++;
  
 }
                
   
   if(UserService::isCurrentUserAdmin()){
    echo "<a href='index.php?p=additem&g=$gid'>Add</a>";
 }
			 
			   
			 
 ?>