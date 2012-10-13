<?php
/*
Template Name: Testimonials
*/
?>

<?php get_header(); ?>
			
<div id="rightCol" role="main">
<?php testimonials_box(1,2) ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
	<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
		<header>
			<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
									
		</header> <!-- end article header -->

		<section class="post_content clearfix" itemprop="articleBody">
			<?php the_post_thumbnail('medium', array('title' => get_the_title(), 'class' => 'featured_image')); ?>
			<?php the_content(); ?>		
		</section> <!-- end article section -->
						
		<footer>
			<div class="meta">Written by <?php the_author_posts_link(); ?> &nbsp;&nbsp; <?php //sfc_like_button() ?></div>
		</footer> <!-- end article footer -->
					
	</article> <!-- end article -->
						
	<?php //comments_template(); ?>
						
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