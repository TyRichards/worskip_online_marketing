<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<section class="masthead">
    <!-- <div class="background">&nbsp;</div> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div style="padding-top:250px; padding-bottom:250px; margin-right:30px" class="text-center">Image goes here</div>     
            </div>
            <div class="col-md-5">
                <h1 style="padding-top:60px;"><?php echo get_field('headline') ?></h1>
                <?php echo get_field('subheading') ?>              
                <div class="row">             
                    <div class="col-sm-6">
                        <a href="#" class="btn btn-clear btn-block">View Demo<i class="fa fa-play-circle fa-right"></i></a>
                    </div>                                              
                    <div class="col-sm-6">
                        <a href="#blip" class="btn btn-clear btn-block">Why Worship Online?<i class="fa fa-question-circle fa-right"></i></a>
                    </div>                    
                    <div class="clearfix"></div>   
                    <div class="col-xs-12">                 
                        <a href="/pricing" class="btn btn-lg btn-primary btn-block" style="margin: 20px 0 0 0;">Start Free Trial<i class="fa fa-arrow-circle-right fa-right"></i></a>                  
                    </div>                                    
                </div>                
            </div>            
        </div>        
    </div>
</section>

<section class="block bg-dark blip" id="blip" style="padding-top:130px; padding-bottom:200px;">           
    <div class="container-fluid">
        <div class="row">           
            <div class="col-md-offset-1 col-md-4">
                <h3>Lead rehearsals you can be proud of</h2>            
                <p>
                    Imagine walking into rehearsal and every musician on stage knows their part for every song.  Rehearsal goes by like a breeze and that means more time to relax in prayer.
                </p>               
                <a href="#features" class="btn btn-primary">
                    Learn More<i class="fa fa-arrow-circle-down fa-right"></i>
                </a>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <h3>See how easily you can improve your band with this tool</h2>            
                <p>
                    Whether you’re an individual musician, or a worship leader seeking to equip your team, we have the tools to excellently prepare you for worship.  With tutorials, lessons, chord/number charts, and tabs, you can learn master your setlist with ease!” 
                </p>
                <a href="#" class="btn btn-primary">
                    View Demo<i class="fa fa-play-circle fa-right"></i>
                </a>               
            </div>
        </div>
    </div>
</section>

<section class="block bg-light" id="features">           
    <div class="container-fluid">
        <div class="row">           
            <div class="col-md-offset-6 col-md-5">
                <h2>Kiss trainwrecks goodbye</h2>            
                <p>
                    Improving your band and rehearsals comes down to two basic elements. The macro and the micro. Your musicians need to know the overall structure of the song and the nuanced technique of their individual parts. To have a cohesive band, each player has to master both of these.
                </p>
                <p>
                    But it's extremely hard to find worship song tutorials that are in line with either one of these elements. Players usually weed through dozens of junk videos on YouTube to find one that gets anywhere close to what they need. 
                </p>
                <p>
                    Imagine you can find the exact song you are looking for and send the parts out to your team in an instant. You'd never have to worry if the parts are accurate. Your players will show up knowing their stuff and be able to focus on what matters the most – Worship.
                </p>
                <a href="#features2" class="btn btn-primary">See More<i class="fa fa-arrow-circle-down fa-right"></i></a> 
            </div>
        </div>
    </div>
</section>

<section class="block bg-dark" id="features2">           
    <div class="container-fluid">
        <div class="row">            
            <div class="col-md-offset-1 col-md-5">
                <h2>Create a standard of excellence</h2>
                <p>
                    Low quality video can make it impossible for bandmembers to learn the songs well. Overcompressed audio and fuzzy footage are the last thing your players need when they are trying to learn an intricate lead or strumming pattern. 
                </p>
                <p>
                    Worship Online offers high-quality video and audio production on all of our video lessons so your musicians can nail the parts as they were intended and rehearsal can run without a hitch.
                </p>
                <a href="#features3" class="btn btn-primary">See More<i class="fa fa-arrow-circle-down fa-right"></i></a>                 
            </div>            
        </div>
    </div>
</section>

<section class="block bg-light" id="features3">           
    <div class="container-fluid">     
        <div class="row">
            <div class="col-md-offset-6 col-md-5">
                <h2>Eliminate all guesswork</h2>
                <p>
                    Most worship song tutorials are too basic. Many times, your team ends up hearing a strange hodge-podge guitar part that doesn't sound anything like what's on the original recording. Most videos and charts just aren't advanced enough and don't cover all of the parts you need. What if your guitarist needs see how to play the rhythm electric guitar part which is different than the acoustic guitar's rhythm part. 
                </p>
                <p>
                    Worship online features individual videos for acoustic and electric guitar parts, lead and rhythm and show you exactly how to play each one. Not to mention we've got all the charts and tabs you'll ever need.
                </p>
                <a href="#features4" class="btn btn-primary">See More<i class="fa fa-arrow-circle-down fa-right"></i></a> 
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
                <h2>Empower your band to play with confidence</h2>
                <p>
                    No more stumbling through rehearsal. No more trainwrecks in the middle of the service. Worship Online will help your band eliminate the guess-work so they can focus on playing the part. Now your team can be fully prepared for downbeat on sunday. They won't have to waste their precious spare time digging through YouTube videos and bad charts. 
                </p>
                <p>
                    With Worship Online, your players get high-quality video tutorials that walk them through the exact parts they need to learn. Streamline your rehearsals and get your band geling once and for all.
                </p>                
                <div class="row">             
                    <div class="col-sm-6">
                        <a href="#" class="btn btn-clear btn-block"><i class="fa fa-play-circle fa-left"></i>View Demo</a>
                    </div>                                              
                    <div class="col-sm-6">
                        <a href="/features" class="btn btn-clear btn-block"><i class="fa fa-th-list fa-left"></i>View Features</a>
                    </div>                    
                    <div class="clearfix"></div>   
                    <div class="col-xs-12">                 
                        <a href="/pricing" class="btn btn-lg btn-primary btn-block" style="margin: 20px 0 0 0;">Start Your Free Trial<i class="fa fa-arrow-circle-right fa-right"></i></a>                  
                    </div>                                    
                </div>                  
<!--                 <p>
                    <a href="#top">Back to top</a>
                </p>                 -->
            </div>            
        </div>
    </div>
</section>

<!-- <a href="#top">Back to top</a> -->

<?php get_footer(); ?> 