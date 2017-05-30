<?php
 // สว่ นตงั้คา่ เรยี กใชง้าน UserService ของ Google
 use google\appengine\api\users\User;
 use google\appengine\api\users\UserService;
 global $user,$userdata,$appid;

 $user = UserService::getCurrentUser();
 if($user){
 $uid = $user->getUserId();
 $userfile = "gs://$appid/user_$uid.json";
 $userdata = array();
 if(file_exists($userfile)){
 // จะโหลดข ้อมูลในไฟล์ json
 $filedata = file_get_contents($userfile);
 $userdata = json_decode($filedata,true);
 }else{
 $userdata['nick']=$user->getNickname();
}


// $url = UserService::createLogoutUrl('index.php');
 // แสดงภาพผใู้ช ้โดยการเรยี กฟังกช์ นั userpic จากข ้อที่ 1
echo "<img src='".userpic($uid)."' width='25' img class='img-circle'><br>";
 echo $userdata['nick'];
 ?>
 
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $user->getNickname() ?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index_body_useredit.php?p=useredit">My Account</a></li>
                <li><a href="<?= UserService::createLogoutUrl('/') ?>">Logout</a></li>
              </ul>
            </li>	
 
<?php	
   if(UserService::isCurrentUserAdmin()){
     include("menu_admin.php"); 
   }
} else {
  echo sprintf('<li><a href="%s">Sign in or register</a>',
               UserService::createLoginUrl('/'));
}
?>
 