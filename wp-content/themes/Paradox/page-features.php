<?php
/*
Template Name: Features
*/
?>

<?php get_header(); ?>

<section class="block bg-dark">           
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h1 class="text-center title">The best way to learn worship songs</h1>
      </div>
    </div>    
    <div class="row">
        <section class="col-sm-5 col-sm-offset-1 features">                                    
            <div class="features-boxes">
                <div class="box">                      
                    <h2><i class="fa fa-music fa-left"></i> Large Song Catalog</h2>
                    <p>Worship online has an ever-growing list of songs to pick from. Pick from some of the most popular worship songs.</p>
                </div>   
                <div class="box">                      
                    <h2><i class="fa fa-list-ul fa-left"></i> All Guitar Parts</h2>
                    <p>A generic lesson won't do you any good. Worship Online gives you specific lessons for acoustic AND electric guitars.</p>
                </div>   
                <div class="box">                      
                    <h2><i class="fa fa-users fa-left"></i> Share With Band Members</h2>
                    <p>For band accounts it is simple to share lessons with your team. This makes it easy to designate who plays what.</p>
                </div>   
                <div class="box">                      
                    <h2><i class="fa fa-thumbs-up fa-left"></i> 25+ Years Experience</h2>
                    <p>Worship Online is 100% created by musicians for musicians. We have a combined experience of over 25 years playing music in the church.</p>
                </div>                                                                    
            </div> <!-- Features -->                
        </section>
        <section class="col-sm-5 features">                                    
            <div class="features-boxes">
                <div class="box">                      
                    <h2><i class="fa fa-play-circle fa-left"></i> High-Quality Video</h2>
                    <p>Quality matters when you are trying to get pick up a new song. For this reason each lesson is well crafted.</p>
                </div>   
                <div class="box">                      
                    <h2><i class="fa fa-file fa-left"></i> Charts & Tabs</h2>
                    <p>Chord charts and guitar tabs are key to learning the parts and for visual cues during worship. We got 'em.</p>
                </div>   
                <div class="box">                      
                    <h2><i class="fa fa-youtube-play fa-left"></i> Lesson + Demo</h2>
                    <p>Each guitar part has a lesson as well as a demonstration so you can hear the song in context with everything.</p>
                </div>   
                <div class="box">                      
                    <h2><i class="fa fa-desktop fa-left"></i><i class="fa fa-mobile fa-left"></i> Web & Mobile</h2>
                    <p>Worship online makes it simple to view lessons on your desktop or mobile phone.</p>
                </div>                                                                     
            </div> <!-- Features -->                
        </section>        
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <a class="btn btn-lg btn-primary btn-block" style="margin-top:0">Start Learning Songs <i class="fa fa-arrow-circle-right fa-right"></i></a>
      </div>
    </div>      
    <div class="row">
      <section class="main-col col-sm-8 col-sm-offset-2 page-content">                
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
