<?php
/*
Template Name: Pricing
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
                    <a href="#features" class="btn btn-lg btn-primary"><i class="fa fa-question-circle fa-left"></i> Why Worship Online?</a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="#pricing" class="btn btn-lg btn-primary">Start Free Trial <i class="fa fa-arrow-circle-right fa-right"></i></a>                    
                </div>              
            </div>
        </div>
    </div>
</section>

<section class="block bg-dark" id="pricing">           
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