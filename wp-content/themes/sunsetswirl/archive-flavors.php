<?php
/*
* Template Name: Flavor Archive Template
*
*/
?>
<?php
  get_header();
 ?>

 <h1 class="title">
   Who We Are
 </h1>



<?php
 $args = array( 'post_type' => 'flavors', 'posts_per_page' => 10, 'orderby'=> 'title', 'order' => 'ASC' );
 $loop = new WP_Query( $args );

 while ( $loop->have_posts() ) : $loop->the_post();?>
 <div class="employee-individual-post">
 <div class="employee-bio column ">
    <div class="employee-headshot">
      <img class="employee-headshot-image" src="<?php the_field('employee_headshot'); ?>" />
    </div>
    <div class="employee-super-power-box">
      <div class="super-power-text">
        Superpower: <br />
        <?php the_field('employee_super_power'); ?>
      </div>
    </div>
    <div class="employee-name">
      <?php the_field('employee_name'); ?>
    </div>
    <div class="employee-job-title">
      <?php the_field('employee_job_title'); ?>
    </div>
    <div class="card employee-card">
      <div class="employee-quote view">
        <?php the_field('employee_quote'); ?>
      </div>
      <div class="employee-description">
        <?php the_field('employee_description'); ?>
      </div>
    </div>
  </div>
  </div>
  <?php
 endwhile;
?>




<?php
   get_footer();
  ?>
