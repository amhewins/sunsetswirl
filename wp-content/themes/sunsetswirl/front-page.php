<?php
  get_header();
 ?>

 <div class="home-container is-hidden-tablet is-hidden-desktop is-hidden-widescreen is-hidden-fullhd" style="background-image: url(<?php the_field('hero_image_widescreen')?>); height: 30vh; background-size: cover; background-repeat: no-repeat;">
 </div> <!--mobile-->

 <div class="home-container is-hidden-mobile is-hidden-desktop is-hidden-widescreen is-hidden-fullhd" style="background-image: url(<?php the_field('hero_image_widescreen')?>); height: 30vh; background-size: contain; background-attachment: fixed; background-repeat: no-repeat;">
 </div> <!--tablet-->

 <div class="home-container is-hidden-touch" style="background-image: url(<?php the_field('hero_image_widescreen')?>); height: 400px; width: 100%; margin: 0 auto; background-size: auto; background-attachment: fixed; background-repeat: no-repeat; max-width: 1200px; background-position: top;">
 </div> <!--desktop & widescreen-->

   <div class="home-content container">

<div class="home-about-container">

  <h1 class="title">
    <?php echo get_field('title') ?>
  </h1>

  <div class="left-info-box purple">
    <?php echo get_field('home_left_text_box') ?>
  </div>

  <div class="picture-right">
    <img src="https://sunsetswirl.com/wp-content/uploads/2019/02/GMarksPhoto-SunsetSwirl-Jan19-083.jpg">
  </div>

  <div class="right-info-box pink">
    <?php echo get_field('home_right_text_box') ?>
  </div>

  <div class="picture-left">
    <img src="https://sunsetswirl.com/wp-content/uploads/2019/03/GMarksPhoto-SunsetSwirl-Jan19-120.jpg">
  </div>

</div>

<?php
  get_footer();
 ?>
