		<span class="clearFix">&nbsp;</span>
	</div><!-- end .wrapper -->
</div><!-- end #mainContent -->

<footer role="contentinfo" id="footer">
	<div id="footerGrass">
		<div class="wrapper">
			<div id="footerImage">
				<img src="<?php echo get_template_directory_uri(); ?>/images/footer_baby.png" width="202" height="321"/>
			</div>
				
			<?php dynamic_sidebar( 'sidebar2' ); ?>
				
			<a href="http://nupen.us" id="designedBy" rel="generator">Website designed by Matt Nupen</a>
			<div id="copyright">&copy; <? echo(strftime("%G")) ?> Catherine Burns</div>
			<div id="footerContact">Contact Catherine at 612-227-3071</div>
			<div class="clearFix">&nbsp;</div>
				
		</div>
	</div>
</footer><!-- end footer -->

<?php wp_footer(); // js scripts are inserted using this function ?>
<!-- The javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->          
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/libs/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/superfish.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.bgiframe.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.hoverIntent.minified.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/flexslider/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/fancybox/jquery.fancybox.pack.js"></script>
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/mamabebe.js"></script>
	
	
	
	
	
	
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	
</body>
</html>


