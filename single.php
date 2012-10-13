<?php get_header(); ?>
			
<div id="rightCol" role="main">
					
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	
		<header>
			
			<h1 class="single-title" itemprop="headline"><?php the_title(); ?><?php the_post_thumbnail('medium', array('title' => get_the_title(), 'class' => 'featured_image')); ?></h1>
			
			<div class="post_info">
				<?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?>.
			</div>
		
		</header> <!-- end article header -->
	
		<section class="post_content clearfix" itemprop="articleBody">
			<!--<?php the_post_thumbnail('medium', array('title' => get_the_title(), 'class' => 'featured_image')); ?>-->
			<?php the_content(); ?>
			
	
		</section> <!-- end article section -->
		
		<footer>
			<div class="meta">
				Posted in <?php the_category(', '); ?>
				<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?> &nbsp;&nbsp;
				<?php //sfc_like_button() ?>
			</div>
		</footer> <!-- end article footer -->
		
		<?php //comments_template(); ?>

	</article> <!-- end article -->
	
	<?php endwhile; ?>			
	
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