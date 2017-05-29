<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<!DOCTYPE html>
<?php
 $appid = "web592group08.appspot.com";
 $page = $_GET['p'];
 if($page=='') $page='index';
 $title = $page;
 function panel_include($title,$file,$ptype='default'){
echo "<div class='panel panel-$ptype'>";
echo "<div class='panel-heading'>$title</div>";
echo "<div class='panel-body'>";
if(file_exists($file)){
 include($file);
}else{
 echo "ไม่พบไฟล์ $file ";
}

echo "</div>";
echo "</div>";
 }
 
 use google\appengine\api\cloud_storage\CloudStorageTools;
function userpic($uid){
 global $appid;
 $userpic="gs://$appid/{$uid}.jpg";
 if(!file_exists($userpic)){
 return "user.png";
 }
 return CloudStorageTools::getImageServingUrl($userpic,["size"=>200]);
}

?>
<meta charset="UTF-8">
 <title><?= $page ?> </title>
 
<html lang="en">
<body role="document">
<button class="btn btn-small btn-inverse" type="button" ><?php panel_include("","index_user.php"); ?> </button>

</body>
</html>

<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container main-container">
    
      <div class="row header">
	<!-- Begin Header -->


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>WEBICTCARTOON</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/prettyPhoto.css" />
<link rel="stylesheet" href="css/flexslider.css" />
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
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.custom.js"></script>
<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});

</script>

</head>
<?php
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;

global $appid,$user,$userdata;

if(!$user) return;
if($_POST["nick"]){
 $uid = $user->getUserId();
 $userdata['nick']=$_POST['nick'];
 $userdata['fname']=$_POST['fname'];
 $userdata['lname']=$_POST['lname'];
 $userdata['color']=$_POST['color'];
 if($_FILES['pic']['tmp_name']!=''){
 $userpic = "gs://$appid/{$uid}.jpg";
 move_uploaded_file($_FILES['pic']['tmp_name'],$userpic);
 }
 $json = json_encode($userdata, JSON_PRETTY_PRINT);
 $userfile = "gs://$appid/user_$uid.json";
 file_put_contents($userfile,$json);
 echo "<br>บันทึกเรียบร้อย <a href='index_body_useredit.php?p=useredit'>ตกลง</a>";
 return;
}
?>
<form method="post" action="" enctype="multipart/form-data">
<div class="form-group col-md-12" >
 <label for="nick">Nick Name</label>
 <input class="form-control" type='text' name='nick' value="<?=$userdata['nick'] ?>">
</div>
<div class="form-group col-md-6">
<label for="file">First Name</label>
<input class="form-control" type='text' name='fname' value="<?=$userdata["fname"]?>">
</div>
<div class="form-group col-md-6">
<label for="file">Last Name</label>
<input class="form-control" type='text' name='lname' value="<?=$userdata["lname"]?>">
</div>
<div class="form-group col-md-6">
<label for="file">สีที่ชอบ</label>
<input class="form-control" type='color' name='color' value="<?=$userdata["color"]?>">
</div>
<div class="form-group col-md-6">
<label for="file">Picture</label>
<input class="form-control" type='file' name='pic'>
</div>
<button class="btn btn-primary"> Save </button><button class="btn btn-primary"><a href ="index.php"> Home </button>
</form>
<body class="home">

    
    
</body>
</html>
