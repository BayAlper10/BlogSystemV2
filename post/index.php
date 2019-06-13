<?php
require("../Modules/Head/index.php");
require("../Modules/Navbar/index.php");
require("../Modules/TopImage/index.php");
require("../Modules/MainPosts/index.php");
require("../Modules/Footer/index.php");
require("../Modules/Post/index.php");
$head = new Head("Post");
$navbar = new Navbar();
$topimage = new TopImage("../img/post-bg.jpg", "Örnek Post", "Örnek Post Açıklaması");
$mainposts = new MainPosts();
$footer = new Footer();
$post = new Post();
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <?php $head->getHead(); ?>
 <body>
   <?php $navbar->getNavbar(); ?>
   <?php $topimage->getTopImage(); ?>
   <?php $post->getPost(); ?>
   <?php $footer->getFooter(); ?>
   <?php $head->downPage(); ?>
 </body>
 </html>
