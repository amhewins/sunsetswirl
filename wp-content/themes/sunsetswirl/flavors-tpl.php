<?php
/*
* Template Name: Flavors Template
*
*/
?>
<?php
  get_header();
 ?>


   <div class="home-content container">

     <div class="home-flavor-container">

       <h1 class="title mainstay">
         <?php echo get_field('title') ?>
       </h1>

       <div class="about-us-content">
       </div>

      </div>

      <div class="flavor-container">

       <?php
        $args = array( 'post_type' => 'flavors', 'posts_per_page' => 10, 'orderby'=> 'title', 'order' => 'ASC' );
        $loop = new WP_Query( $args );

        while ( $loop->have_posts() ) : $loop->the_post();?>

        <div class="flavor">
          <div class="flavor-name">
            <?php echo get_field('flavor_name') ?>
          </div>

          <div class="flavor-image">
            <img src="<?php the_field('flavor_image'); ?>">
          </div>

          <div class="flavor-ingredients">
            <div class="ingredients-title">Ingredients:</div>
            <div class="ingredients-list"><?php echo get_field('flavor_ingredients') ?></div>
          </div>
        </div>

         <?php
        endwhile;
       ?>

       <div class="flavors-end">
         <p>Keep an eye out for our other flavors that we rotate weekly.</p>
       </div>

     </div>

<?php
  get_footer();
?>
