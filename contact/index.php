<?php
require("../Modules/Head/index.php");
require("../Modules/Navbar/index.php");
require("../Modules/TopImage/index.php");
require("../Modules/MainPosts/index.php");
require("../Modules/Footer/index.php");
require("../Modules/Contact/index.php");
$head = new Head("İletişim");
$navbar = new Navbar();
$topimage = new TopImage("../img/contact-bg.jpg", "İletişim", "Bu sayfa üzerinden benimle iletişime geçebilirsiniz.");
$mainposts = new MainPosts();
$footer = new Footer();
$contact = new Contact();
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <?php $head->getHead(); ?>
 <body>
   <?php $navbar->getNavbar(); ?>
   <?php $topimage->getTopImage(); ?>
   <?php $contact->getContact(); ?>
   <?php $footer->getFooter(); ?>
   <?php $head->downPage(); ?>
 </body>
 </html>
