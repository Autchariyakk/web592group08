
<!doctype html>
<html>
 <head>
 <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>itoffside.com shopping cart</title>
 
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/nava.css" rel="stylesheet">
 
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
 <meta charset="utf-8">
 <title>WEBWEB</title>
 </head>
 <link rel="stylesheet" href="kk.css">
 <body>
  <div class="container">
 
            <!-- Static navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Shopping Cart - ItOffside.com</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">หน้าแรกสินค้า</a></li>
                            <li><a href="cart.php">ตะกร้าสินค้าของฉัน <span class="badge"><?php echo $meQty; ?></span></a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </div>
 
            <!-- Main component for a primary marketing message or call to action -->
 
            <h3>หน้าแรกของสินค้า</h3>
<?php
if($action == 'exists'){
    echo "<div class=\"alert alert-warning\">เพิ่มจำนวนสินค้าแล้ว</div>";
}
if($action == 'add'){
    echo "<div class=\"alert alert-success\">เพิ่มสินค้าลงในตะกร้าเรียบร้อยแล้ว</div>";
}
if($action == 'order'){
	echo "<div class=\"alert alert-success\">สั่งซื้อสินค้าเรียบร้อยแล้ว</div>";
}
if($action == 'orderfail'){
	echo "<div class=\"alert alert-warning\">สั่งซื้อสินค้าไม่สำเร็จ มีข้อผิดพลาดเกิดขึ้นกรุณาลองใหม่อีกครั้ง</div>";
}
?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>รหัสสินค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th>รายละเอียด</th>
                        <th>ราคา</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($meResult = mysql_fetch_assoc($meQuery))
                    {
                        ?>
                        <tr>
                            <td><img src="images/<?php echo $meResult['product_img_name']; ?>" border="0"></td>
                            <td><?php echo $meResult['product_code']; ?></td>
                            <td><?php echo $meResult['product_name']; ?></td>
                            <td><?php echo $meResult['product_desc']; ?></td>
                            <td><?php echo number_format($meResult['product_price'],2); ?></td>
                            <td>
                                <a class="btn btn-primary btn-lg" href="updatecart.php?itemId=<?php echo $meResult['id']; ?>" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                    หยิบใส่ตะกร้า</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
 
        </div> <!-- /container -->
 
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="bootstrap/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
 <center>
 
<h1 style="color:black;background-color:white;"" align="center" id="css">WEB Home Page</h1>
 <marquee behavior="alternate" direction="up" width="100%"> <marquee direction="right" behavior="alternate"><h2 style="color:red"><b>Wellcome</b></h2></marquee> </marquee>
 <center><img WIDTH=1280  HEIGHT=720   src="https://i.ytimg.com/vi/TSXEq1Vd_AA/maxresdefault.jpg"></center>
<BODY background="https://i.ytimg.com/vi/tQPSiIHI_go/hqdefault.jpg"></BODY>
<h2 style="color:#8888ff;background-color:pink" align="center">หนังสือการ์ตูนใหม่</h2>
<div style="color:red;background-color:yellow" align="center" id="css">
สมาชิก
583021156-6 นางสาว อัจฉริยา ชาเคน
583021154-0 นาย อนุสิษฐ โพธิ์เย็น
583021151-6 นาย สรวิชญ์ ไชยเดช
583021124-9 นาย กัณชาติ อภิสิทธิสานนท์
สาขาเทคโนโลยีสารสนเทศและการสื่อสาร
คณะวิทยาศาสตร์  KKU
</div>
<ul id='menubox'>
<h1 style="color:gold;background-color:white" align="center" id="css">โหมดต่อสู้</h1>
<h2><a href=home.html>ดูเพิ่ม</a><br></h2>

<h1 style="color:gold;background-color:white" align="center" id="css">โหมดแฟนตาซี</h1>
<h2><a href=work3.html>ดูเพิ่ม</a><br></h2>
<h1 style="color:gold;background-color:white" align="center" id="css">โหมดโรแมนติก</h1>
<h2><a href=work4.php>ดูเพิ่ม</a><br></h2>
<h1 style="color:gold;background-color:white" align="center" id="css">โหมดความรู้</h1>
<h2><a href=work5.php>ดูเพิ่ม</a><br></h2>

</ul>
</style> 
 </body>
</html>
