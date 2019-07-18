<?php
/*
* Template Name: Find Us Template
*
*/
?>
<?php
  get_header();
 ?>

 <div class="home-container is-hidden-tablet is-hidden-desktop is-hidden-widescreen is-hidden-fullhd" style="background-image: url(<?php the_field('find_us_background')?>); height: 30vh; background-size: cover; background-repeat: no-repeat;">
 </div> <!--mobile-->

 <div class="home-container is-hidden-mobile is-hidden-desktop is-hidden-widescreen is-hidden-fullhd" style="background-image: url(<?php the_field('find_us_background')?>); height: 30vh; background-size: contain; background-attachment: fixed; background-repeat: no-repeat;">
 </div> <!--tablet-->

 <div class="home-container is-hidden-touch" style="background-image: url(<?php the_field('find_us_background')?>); height: 400px; width: 100%; margin: 0 auto; background-size: contain; background-attachment: fixed; background-repeat: no-repeat;">
 </div> <!--desktop & widescreen-->

   <div class="home-content container">

<div class="home-about-container">

  <h1 class="title">
    <?php echo get_field('title') ?>
  </h1>

  <div class="left-info-box peach find-us-left">
    <?php echo get_field('find_us_left_box_text') ?>
  </div>

  <div class="picture-right">
    <img src="https://sunsetswirl.com/wp-content/uploads/2019/04/GMarksPhoto-SunsetSwirl-Jan19-079.jpg">
  </div>

  <div class="right-info-box pink find-us-right">
    <?php echo get_field('find_us_right_box_text') ?>
  </div>

  <div class="picture-left">
    <img src="https://sunsetswirl.com/wp-content/uploads/2019/03/fullsizeoutput_16fa-min.png">
  </div>

</div>

<?php
  get_footer();
 ?>
