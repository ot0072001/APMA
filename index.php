<?php
// create an array with data for title, and meta, for each page
$pgdata = array();
$pgdata['index'] = array(
  'title'=>'AUSTRALIAN PROPERTY MANAGEMENT ALLIANCE',
  'description'=>'Home page description',
  'keywords'=>'APMA, property manager, property management'
);
$pgdata['about'] = array(
  'title'=>'About',
  'description'=>'Description for About',
  'keywords'=>'about'
);
$pgdata['services'] = array(
  'title'=>'Services we supply',
  'description'=>'All services we supply',
  'keywords'=>'services'
);
$pgdata['forum'] = array(
  'title'=>'Forum',
  'description'=>'Forum',
  'keywords'=>'forum'
);
$pgdata['contactus'] = array(
  'title'=>'Contact us',
  'description'=>'Contact us, email, phone number',
  'keywords'=>'Contact us'
);

// set the page name
$pgname = isset($_GET['pg']) ? trim(strip_tags($_GET['pg'])) : 'index';

// get title, and meta data for current /accessed page
$title = $pgdata[$pgname]['title'];
$description = $pgdata[$pgname]['description'];
$keywords = $pgdata[$pgname]['keywords'];

// set header for utf-8 encode
header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>" />
        <meta name="keywords" content="<?php echo $keywords; ?>" />
        <!--<meta name="viewport" content="width=device-width, initial-scale=1" />-->
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <script src="script/menuscript.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div id="header">
            <img class="chineseTitle" src="images/chineseTitle.png">
            <img class="logoImg" src="images/logo.png">
            
            
            
            
            
            
       </div>
        
        <div id="cssmenu">
            <ul>
             <?php echo '<li ';?> <?php if ( !isset($_GET['pg'])) echo 'class="active"';?> <?php echo '><a href="index.php" title="Home page"><span>Home</span></a></li> ';?>
             <?php echo '<li';?> <?php if (isset($_GET['pg'])&&$_GET['pg']=="about") echo 'class="active"';?> <?php echo '><a href="index.php?pg=about" title="About"><span>About us</span></a></li>';?>
             <?php echo '<li';?> <?php if (isset($_GET['pg'])&&$_GET['pg']=="services") echo 'class="active"';?> <?php echo '><a href="index.php?pg=services" title="Service"><span>Services</span></a>'
             . '<ul class="levelTwo">'
                     . '<li><a href="http://www.my.renet.com.au/">Renet</a></li>'
                        .'<li><a href="http://www.tica.com.au/login.php">TICA</a></li>'
                        .'<li><a href="http://rewards.onthemove.com.au/otm/">On The Move</a></li>'
                        .'<li><a href="http://www.ebminsurance.com.au/">EBM Insurance</a></li></ul></li>';?>
             <?php echo '<li';?> <?php if (isset($_GET['pg'])&&$_GET['pg']=="forum") echo 'class="active"';?> <?php echo '><a href="http://apmaonestop.com.au/forum/" title="Forum"><span>Forum</span></a>'
             .'<ul class="levelTwo">'
                        .'<li><a href="http://apmaonestop.com.au/forum/forum.php">FREE MEMBER</a></li>'
                        .'<li><a href="http://apmaonestop.com.au/forum/forum.php?mod=forumdisplay&fid=49">PREMIUM MEMBER</a></li></ul></li>';?>
             <?php echo '<li';?> <?php if (isset($_GET['pg'])&&$_GET['pg']=="contactus") echo 'class="active"';?> <?php echo '><a href="index.php?pg=contactus" title="Contact us"><span>Contact us</span></a></li>';?>
            </ul>    
        </div>

        <div id="content">
            <?php 
                if ( !isset($_GET['pg'])) 
                    include 'home.php';
                if (isset($_GET['pg'])&&$_GET['pg']=="about")
                    include 'about.php';
                if (isset($_GET['pg'])&&$_GET['pg']=="services")
                    include 'services.php';
                if (isset($_GET['pg'])&&$_GET['pg']=="contactus")
                    include 'contactus.php';
            ?>
            
        </div>
       <div id="footer">
           
       </div>

    </body>
</html>
