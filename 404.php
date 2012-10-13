<?php get_header(); ?>
			
<div id="rightCol" role="main">
					
	<article id="post-not-found" class="clearfix">
							
						
		<section class="post_content">
			<img src="<?php echo get_template_directory_uri(); ?>/images/404.png" id="not_found_img">
			
			<h1 id="not_found_title">Page not found</h1>
			<div id="not_found_text">
				<p>You tried going to <span class="msg"><?php echo get_bloginfo('url') ?></span> and it doesn't exist.</p>
				<p>All is not lost!  You can click back and try again or search what you're looking for:</p>
								
				<?php get_search_form() ?>
			</div>
						
	
		</section> <!-- end article section -->
		
						
	</article> <!-- end article -->
					
</div> <!-- end #rightCol -->
					

<?php get_footer(); ?>