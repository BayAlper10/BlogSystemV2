<?php
require("../Modules/Head/index.php");
require("../Modules/Navbar/index.php");
require("../Modules/TopImage/index.php");
require("../Modules/MainPosts/index.php");
require("../Modules/Footer/index.php");
require("../Modules/About/index.php");
$head = new Head("Hakkımda");
$navbar = new Navbar();
$topimage = new TopImage("../img/about-bg.jpg", "Hakkımızda", "Hakkımda daha fazla bilgiyi burada bulabilirsiniz.");
$mainposts = new MainPosts();
$footer = new Footer();
$about = new About();
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <?php $head->getHead(); ?>
 <body>
   <?php $navbar->getNavbar(); ?>
   <?php $topimage->getTopImage(); ?>
   <?php $about->getAbout(); ?>
   <?php $footer->getFooter(); ?>
   <?php $head->downPage(); ?>
 </body>
 </html>
