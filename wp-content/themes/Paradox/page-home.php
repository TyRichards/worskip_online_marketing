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
                    <a href="#features" class="btn btn-lg btn-primary"><i class="fa fa-question-circle fa-left"></i> Why Worship Online?</a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="/pricing" class="btn btn-lg btn-primary">Start Learning Songs <i class="fa fa-arrow-circle-right fa-right"></i></a>                    
                </div>              
            </div>
        </div>
    </div>
</section>

<section class="block bg-light" id="features">           
    <div class="container-fluid">
        <div class="row">           
            <div class="col-md-offset-6 col-md-5">
                <h2>Tired of wasting your time on junk video tutorials?</h2>
                <p>
                    It's extremely hard to find worship song tutorials that are right. You have to weed through twenty junk videos on YouTube to find one that gets close to what you need. Imagine you can find the exact song you are looking for in a few seconds and never have to worry if the guitar parts are accurate. Worship Online gives you just that.
                </p>
                <a href="#features2" class="btn btn-lg btn-primary"><i class="fa fa-arrow-circle-down fa-left"></i>See More</a> 
            </div>
        </div>
    </div>
</section>

<section class="block bg-dark" id="features2">           
    <div class="container-fluid">
        <div class="row">            
            <div class="col-md-offset-1 col-md-5">
                <h2>Video quality matters</h2>
                <p>
                    A low quality video can make it impossible to learn a song accurately. Overcompressed audio and fuzzy footage are the last thing you need when you are trying to learn an intricate lead or strumming pattern. Worship Online offers high-quality video and audio production on all of our video lessons so you can nail the parts as they were intended.
                </p>
                <a href="#features3" class="btn btn-lg btn-primary"><i class="fa fa-arrow-circle-down fa-left"></i>See More</a> 
            </div>            
        </div>
    </div>
</section>

<section class="block bg-light" id="features3">           
    <div class="container-fluid">     
        <div class="row">
            <div class="col-md-offset-6 col-md-5">
                <h2>You don't want the dumbed-down version</h2>
                <p>
                    Most worship song tutorials are too basic. Many times, you end up seeing a strange hybrid guitar part that doesn't sound like anything you are hearing on the original recording. They just aren't advanced enough and don't cover all of the parts. You need to know exactly how to play the rhythm electric guitar part which is different than the acoustic guitar's rhythm part. Worship online will show you all acoustic and electric guitar parts, lead and rhythm and show you exactly how to play each one.
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
            <div class="col-md-offset-6 col-md-5">
                <h2>Say goodbye to guesswork</h2>
                <p>
                    No more stumbling through rehearsal because you didn't learn the right part. No more wasting countless hours on YouTube. Get high-quality worship song video lessons that walk you through the exact part you need to learn. 
                </p>
                <a href="/pricing" class="btn btn-lg btn-primary">Start Learning Songs</a> 
<!--                 <p>
                    <a href="#top">Back to top</a>
                </p>                 -->
            </div>            
        </div>
    </div>
</section>

<!-- <a href="#top">Back to top</a> -->

<?php get_footer(); ?> 