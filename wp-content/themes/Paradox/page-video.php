<?php
/*
Template Name: Video
*/
?>

<?php get_header(); ?>

<section class="primary-content">           
  <div class="container">
    <div class="row">
      <section class="main-col col-md-10 col-md-offset-1 page-content">                
          <div id="main" class="site-main" role="main">
              <?php 
              while (have_posts()) {
                the_post();

                get_template_part('content', 'page');

                echo "\n\n";
                
                // If comments are open or we have at least one comment, load up the comment template
                if (comments_open() || '0' != get_comments_number()) {
                  comments_template();
                }

                echo "\n\n";

              } //endwhile;
              ?> 
          </div>           
      </section>               
    </div>
  </div>
</section>

<?php get_footer(); ?> 
