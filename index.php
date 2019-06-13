<?php
require("./Modules/Head/index.php");
require("./Modules/Navbar/index.php");
require("./Modules/TopImage/index.php");
require("./Modules/MainPosts/index.php");
require("./Modules/Footer/index.php");
$head = new Head("Ana Sayfa");
$navbar = new Navbar();
$topimage = new TopImage("img/home-bg.jpg", "Merhaba Ben Alper DURSUN", "Yazılım hakkında oluşturduğum kişisel bloğuma hoşgeldiniz.");
$mainposts = new MainPosts();
$footer = new Footer();
 ?>
<!DOCTYPE html>
<html lang="en">
<?php $head->getHead(); ?>
<body>
  <?php $navbar->getNavbar(); ?>
  <?php $topimage->getTopImage(); ?>
  <?php $mainposts->getMainPosts(); ?>
  <?php $footer->getFooter(); ?>
  <?php $head->downPage(); ?>
</body>
</html>
