<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>
		</div><!--.body-content-->	
		
		<footer class="footer">	
			<?php // get_footer('lg'); ?>
      		<section class="small-footer">
      			<div class="container">
      				<div class="row">
	      				<div class="">
			        		<div class="text-center footer-menu">
			        			<?php dynamic_sidebar('footer-credits'); ?>
			        		</div>
		        		</div>
			        </div> <!-- .row -->				        
	        	</div> <!-- .container -->
	        </section>	
      		<section class="credit-footer background-dark">
      			<div class="container-fluid">		        
					<div class="row">
			        	<div class="col-sm-4">
			        		<div class="pull-left footer-credits">		        			
			        			<small>
			        				<a href="<?php echo esc_url(home_url('/')); ?>">
			        					© <?php echo date("Y"); ?> <?php echo esc_attr(get_bloginfo('name', 'display')); ?>
			        				</a>
			        			</small>		        			
			        		</div>			
			        	</div>	        	
			        	<div class="col-sm-4 text-center">
			        		<ul class="list-inline">
			        			<li><a href="https://instagram.com/worshiponline" title="Instagram"><i class="fa fa-instagram fa-2x"></i></a></li>
			        			<li><a href="https://twitter.com/worshiponline" title="Twitter"><i class="fa fa-twitter fa-2x"></i></a></li>
			        			<li><a href="https://www.facebook.com/WorshipOnline" title="Facebook"><i class="fa fa-facebook fa-2x"></i></a></li>
			        			<li><a href="http://youtube.com/worshiponline" title="YouTube"><i class="fa fa-youtube fa-2x"></i></a></li>
			        		</ul>
			        	</div>
		        		<div class="col-sm-4">
			        		<div class="pull-right footer-paradox text-right">
			        			<a href="http://paradoxcreative.com" target="_blank">
			        				<img class="img-responsive" width="135" height="27" src="<?php echo get_template_directory_uri(); ?>/assets/images/paradox-footer.png" />
			        			</a>
			        		</div>
			        	</div>				        	
			        </div>
			    </div>
			</section>
      	</footer>	
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
		<!-- Typekit -->
		<script src="//use.typekit.net/yln6zrk.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
	</body>
</html>