<?php
class TopImage{

  function __construct($img_src, $title, $desc){
    $this->img_src = $img_src;
    $this->title = $title;
    $this->desc = $desc;
  }
  public function getTopImage(){
    ?>
    <header class="masthead" style="background-image: url('<?php echo $this->img_src; ?>')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1><?php echo $this->title; ?></h1>
              <span class="subheading"><?php echo $this->desc; ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <?php
  }
}
 ?>
