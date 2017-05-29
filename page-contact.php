<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Piccolo Theme</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/jquery.lightbox-0.5.css">
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
<script src="js/jquery.custom.js"></script>


</head>

<body>
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container main-container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
         <div class="span5 logo">
        	<a href="index.php"><img src="img/pp.png" alt="" /></a>
            <h1>MOOPA BIPOLAR GIRL... SHOP</h1>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li class="dropdown active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="index.php">Home <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php">หน้าแรก</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="page-double-sidebar.php">Admin<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  
                    <li><a href="page-double-sidebar.php">information</a></li>
                </ul>
            </li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="gallery-4col.php">product<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="gallery-4col-circle.php">All product</a></li>
                </ul>
             </li>
             <li><a href="page-contact.php">Contact</a></li>
            </ul>
           
            </div>

            <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="">Navigate...</option>
                    <option value="index.php">Home</option>
                        <option value="index.php">- หน้าแรก</option>
                    <option value="page-full-width.php">Admin</option>
                        <option value="page-double-sidebar.php">- information</option>
                    <option value="gallery-4col.php">product</option>
                        <option value="gallery-4col-circle.php">- All product</option>
                    <option value="page-contact.php">Contact</option>
                </select>
                </div>
                </form>

        </div>
        
      </div><!-- End Header -->
     
     
    <!-- Page Content
    ================================================== --> 
    <div class="row"><!--Container row-->

        <div class="span8 contact"><!--Begin page content column-->

            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna.</p>

            <div class="alert alert-success">
                Well done! You successfully read this important alert message. 
            </div>

            <form action="#" id="contact-form">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input class="span4" id="prependedInput" size="16" type="text" placeholder="Name">
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input class="span4" id="prependedInput" size="16" type="text" placeholder="Email Address">
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-globe"></i></span>
                    <input class="span4" id="prependedInput" size="16" type="text" placeholder="Website URL">
                </div>
                <textarea class="span6"></textarea>
                <div class="row">
                    <div class="span2">
                        <input type="submit" class="btn btn-inverse" value="Send Message">
                    </div>
                </div>
            </form>

        </div> <!--End page content column-->

        <!-- Sidebar
        ================================================== --> 
        <div class="span4 sidebar page-sidebar"><!-- Begin sidebar column -->
            <h5 class="title-bg">Our Location</h5>
            <address>
            <strong>Piccolo</strong><br>
            123 Main St, Suite 600<br>
            San Francisco, CA 94107<br>
            <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>
             
            <address>
            <strong>Jimmy Doe</strong><br>
            <a href="mailto:#">first.last@gmail.com</a>
            </address>

            <h5 class="title-bg">Map Us</h5>
            <img src="img/location-map.jpg" alt="map">

        </div><!-- End sidebar column -->

    </div><!-- End container row -->
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->

	<div class="footer-container"><!-- Begin Footer -->
    	
            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Information Communication Tecnology </span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="#">
                            </span>
                       
                    </div>
                </div>
            </div><!-- End Sub Footer -->

        </div>
    </div><!-- End Footer --> 
    
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    
</body>
</html>
