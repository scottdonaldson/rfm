	</div><!-- #main -->
	
    <footer class="clearfix">
    	<div class="white"></div>
        
		<?php wp_nav_menu(array( 'theme_location' => 'footer')); ?>
        
        <div class="white"></div>
        
        <div class="footer-bottom"></div>
  	</footer>
    
</div><!-- #container -->    

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo bloginfo('template_url'); ?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/plugins.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/script.js"></script>

	<?php wp_footer(); ?>

</body>
</html>