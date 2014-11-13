<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<section class="masthead">
    <!-- <div class="background">&nbsp;</div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h1><?php echo get_field('headline') ?></h1>
                <p><?php echo get_field('subheading') ?></p>  
                <div style="margin-top:25px">                    
                    <a href="#features" class="btn btn-lg btn-primary"><i class="fa fa-music fa-left"></i> See Features</a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="#pricing" class="btn btn-lg btn-primary">Start Free Trial <i class="fa fa-arrow-circle-right fa-right"></i></a>                    
                </div>              
            </div>
        </div>
    </div>
</section>

<section class="block bg-light" id="features">           
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 text-left">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/car.png" alt="<?php bloginfo('description'); ?>">
            </div>            
            <div class="col-md-5">
                <h2>Pain Point #1</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu felis, viverra ut mauris sit amet, hendrerit auctor nunc. Aenean enim nisi, egestas vel enim et, sollicitudin ornare ipsum. 
                </p>
                <p>
                    Donec vel enim at augue elementum convallis sed vel odio. Donec sodales metus urna, et aliquam libero feugiat et. Pellentesque tristique eget lacus congue suscipit. Aenean venenatis semper massa vel iaculis. Nunc risus mi, viverra sed orci nec.
                </p>
                <a href="#features2" class="btn btn-lg btn-primary"><i class="fa fa-arrow-circle-down fa-left"></i>See More</a> 
            </div>
        </div>
    </div>
</section>

<section class="block bg-dark" id="features2">           
    <div class="container-fluid">
        <div class="row">            
            <div class="col-md-6 text-left">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/drag-racer.png" alt="<?php bloginfo('description'); ?>">
            </div>
            <div class="col-md-5">
                <h2>Pain Point #2</h2>
                <p>
                    Donec vel enim at augue elementum convallis sed vel odio. Donec sodales metus urna, et aliquam libero feugiat et. Pellentesque tristique eget lacus congue suscipit. Aenean venenatis semper massa vel iaculis. Nunc risus mi, viverra sed orci nec.
                </p>
                <a href="#features3" class="btn btn-lg btn-primary"><i class="fa fa-arrow-circle-down fa-left"></i>See More</a> 
            </div>            
        </div>
    </div>
</section>

<section class="block bg-light" id="features3">           
    <div class="container-fluid">     
        <div class="row">
            <div class="col-md-6 text-left">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/truck.png" alt="<?php bloginfo('description'); ?>">
            </div>
            <div class="col-md-5">
                <h2>Pain Point #3</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu felis, viverra ut mauris sit amet, hendrerit auctor nunc. Aenean enim nisi, egestas vel enim et, sollicitudin ornare ipsum. 
                </p>
                <p>
                    Donec vel enim at augue elementum convallis sed vel odio. Donec sodales metus urna, et aliquam libero feugiat et. Pellentesque tristique eget lacus congue suscipit. Aenean venenatis semper massa vel iaculis. Nunc risus mi, viverra sed orci nec.
                </p>
                <a href="#features4" class="btn btn-lg btn-primary"><i class="fa fa-arrow-circle-down fa-left"></i>See More</a> 
            </div>
<!--             <div class="col-md-6 text-right">
                <img class="img-responsive" src="<?php // echo get_template_directory_uri(); ?>/assets/images/car.png" alt="<?php // bloginfo('description'); ?>">
            </div> -->
        </div>
    </div>
</section>

<section class="block bg-dark" id="features4">           
    <div class="container-fluid">
        <div class="row">            
            <div class="col-md-5 text-right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/premium-blue.png" alt="<?php bloginfo('description'); ?>">
            </div>
            <div class="col-md-5">
                <h2>Call to Action</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu felis, viverra ut mauris sit amet, hendrerit auctor nunc. Aenean enim nisi, egestas vel enim et, sollicitudin ornare ipsum. 
                </p>
                <p>
                    Donec vel enim at augue elementum convallis sed vel odio. Donec sodales metus urna, et aliquam libero feugiat et. Pellentesque tristique eget lacus congue suscipit. Aenean venenatis semper massa vel iaculis. Nunc risus mi, viverra sed orci nec.
                </p>
                <a href="#pricing" class="btn btn-lg btn-primary">Get Started</a> 
                <p>
                    <a href="#top">Back to top</a>
                </p>                
            </div>            
        </div>
    </div>
</section>

<section class="block bg-light" id="pricing">           
    <div class="container">
        <div class="row">            
            <h2 class="text-center">Practice all the latest tunes</h2>
            <div class="col-md-3  plan">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3>Personal</h3>
                        <p>$10.00/month</p>
                    </div> 
                    <div class="panel-body">           
                        <ul class="features">
                            <li>1 Project</li>
                            <li>1 Page</li>
                            <li>1 User</li>
                            <li>1 Organization</li>
                        </ul>
                        <div class="call-to-action">
                            <a class="btn btn-primary btn-large btn-primary btn-block" href="/koudoku/subscriptions/new?plan=1">Sign Up</a>
                        </div> <!-- call-to-action -->         
                    </div> <!-- .panel-body -->
                </div> <!-- .panel -->
            </div> <!-- .col -->
            <div class="col-md-3  plan plan-primary">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3>Team</h3>
                        <p>$30.00/month</p>
                    </div> 
                    <div class="panel-body">           
                        <ul class="features">
                            <li>3 Projects</li>
                            <li>3 Pages</li>
                            <li>3 Users</li>
                            <li>3 Organizations</li>
                        </ul>
                        <div class="call-to-action">
                            <a class="btn btn-primary btn-large btn-primary btn-block" href="/koudoku/subscriptions/new?plan=2">Sign Up</a>
                        </div> <!-- call-to-action -->         
                    </div> <!-- .panel-body -->
                </div> <!-- .panel -->
            </div> <!-- .col -->
            <div class="col-md-3  plan ">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3>Enterprise</h3>
                        <p>$100.00/month</p>
                    </div> 
                    <div class="panel-body">           
                        <ul class="features">
                            <li>10 Projects</li>
                            <li>10 Pages</li>
                            <li>10 Users</li>
                            <li>10 Organizations</li>
                        </ul>
                        <div class="call-to-action">
                            <a class="btn btn-primary btn-large btn-primary btn-block" href="/koudoku/subscriptions/new?plan=3">Sign Up</a>
                        </div> <!-- call-to-action -->         
                    </div> <!-- .panel-body -->
                </div> <!-- .panel -->
            </div> <!-- .col -->

<div class="col-md-3 social-proof">
    <blockquote>
        <h4>"Some Great Quote"</h4> — Person at Place
    </blockquote>
</div>

             
        </div> <!-- .row -->
    </div>
</section>

<!-- <a href="#top">Back to top</a> -->

<?php get_footer(); ?> 