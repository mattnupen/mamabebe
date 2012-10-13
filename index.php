<?php get_header(); ?>
			
<div id="rightCol" role="main">
					
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
		
		<header>
			
			<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<div class="post_info">
				Written on <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> by <?php the_author_posts_link(); ?>
			</div>
		
		</header> <!-- end article header -->
	
		<section class="post_content clearfix">
			<?php the_content(_e('<span class="read-more">Read more on "'.the_title('', '', false).'" &raquo;</span>', "bonestheme")); ?>
	
		</section> <!-- end article section -->
		
		<footer>
			<div class="meta">
				Posted in <?php the_category(', '); ?>&nbsp;&nbsp;<?php //sfc_like_button() ?>
			</div>
			
		</footer> <!-- end article footer -->
	
	</article> <!-- end article -->
	
	<?php //comments_template(); ?>
	
	<?php endwhile; ?>	
	
	<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
		
		<?php page_navi(); // use the page navi function ?>
		
	<?php } else { // if it is disabled, display regular wp prev & next links ?>
		<nav class="wp-prev-next">
			<ul class="clearfix">
				<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
				<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
			</ul>
		</nav>
	<?php } ?>		
	
	<?php else : ?>
	
	<article id="post-not-found">
	    <header>
	    	<h1>Not Found</h1>
	    </header>
	    <section class="post_content">
	    	<p>Sorry, but the requested resource was not found on this site.</p>
	    </section>
	    <footer>
	    </footer>
	</article>
	
	<?php endif; ?>

</div> <!-- end #rightCol -->
    				


<?php get_footer(); ?>