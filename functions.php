<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images, 
sidebars, comments, ect.
*/

// Get Bones Core Up & Running!
require_once('library/bones.php');            // core functions (don't remove)
require_once('library/plugins.php');          // plugins & extra functions (optional)
require_once('library/custom-post-type.php'); // custom post type example

// Admin Functions (commented out by default)
// require_once('library/admin.php');         // custom admin functions

// This theme styles the visual editor with editor-style.css to match the theme style.
add_editor_style();
require_once('library/tinymce-kit.php');

/************* THUMBNAIL SIZE OPTIONS *************/

add_action( 'after_setup_theme', 'imageSetup' );  
function imageSetup() {
	//add_theme_support( 'post-thumbnails' ); // This feature enables post-thumbnail support for a theme  
	    // To enable only for posts:  
	    //add_theme_support( 'post-thumbnails', array( 'post' ) );  
	    // To enable only for posts and custom post types:  
	    //add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) );  
	      
	    // Register a new image size.  
	    // This means that WordPress will create a copy of the post image with the specified dimensions  
	    // when you upload a new image. Register as many as needed.  
	    // Adding custom image sizes (name, width, height, crop)   
    //add_image_size( 'sidebar-thumb', 150, 120, true ); // Hard Crop Mode
    add_image_size( 'small-image', 150, 250 ); // Soft Crop Mode
    //add_image_size( 'singlepost-thumb', 590, 9999 ); // Unlimited Height Mode 
} 

add_filter( 'image_size_names_choose', 'custom_image_sizes_choose' );  
function custom_image_sizes_choose( $sizes ) {  
    $custom_sizes = array(  
        'small-image' => 'Small' 
    );  
    return array_merge( $sizes, $custom_sizes );  
}  




/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
    register_sidebar(array(
    	'id' => 'sidebar1',
    	'name' => 'Sidebar',
    	'description' => 'The first (primary) sidebar.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));
    
    register_sidebar(array(
    	'id' => 'sidebar2',
    	'name' => 'Footer Widgets',
    	'description' => 'Widgets for the footer (3 columns)',
    	'before_widget' => '<div id="%1$s" class="fCol %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h3>',
    	'after_title' => '</h3>',
    ));
    

} // don't remove this bracket!

/************* COMMENT LAYOUT *********************/
		
// Comment Layout
function bones_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<header class="comment-author vcard">
				<?php echo get_avatar($comment,$size='32',$default='<path_to_url>' ); ?>
				<?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
				<time><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s'), get_comment_date(),  get_comment_time()) ?></a></time>
				<?php edit_comment_link(__('(Edit)'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
       			<div class="help">
          			<p><?php _e('Your comment is awaiting moderation.') ?></p>
          		</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
    <!-- </li> is added by wordpress automatically -->
<?php
} // don't remove this bracket!

/************* SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch($form) {
    $form = '<form role="search" method="get" id="smallSearch_form" action="' . home_url( '/' ) . '" >
    <input type="text" class="smallSearch_Input" value="' . get_search_query() . '" name="s" id="s" placeholder="Search" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
    </form>';
    return $form;
} // don't remove this bracket!

/*
function bones_wpsearch($form) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <label class="screen-reader-text" for="s">' . __('Search for:', 'bonestheme') . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search the Site..." />
    <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
    </form>';
    return $form;
}
*/

/************* Testimonials Box *****************/
function testimonials_box($testCatID, $numPosts){
	?>	
		<div id="sideBox">
			<div id="slideShow">
				
				<?php
					$recentPosts = new WP_Query();
					$recentPosts->query('showposts=5&cat=13');
					while ($recentPosts->have_posts()) :
					$recentPosts->the_post();
				?>
				<div class="slide_entry">
					<?php the_post_thumbnail('medium', array('title' => get_the_title(), 'class' => 'slide_image')); ?>
					<h4 class="slide_title">
						<a href='<?php the_permalink() ?>'><?php echo get_the_title(); ?></a>
					</h4>
					<div class="slide_text">
						<?php the_content(); ?>
					</div>
				</div>
				<?php endwhile; ?>
			
			</div>
			<div id="slide_current">
				<h4 id="slide_current_title">&nbsp;</h4>
				<div id="slide_current_text">
					&nbsp;
				</div>
			</div>
			<div id="slideControls">
				<p id="slide_next">&aring;</p>
				<p id="slide_prev">&acirc;</p>
			</div>
		</div>
		
		
		
	<?php
//	wp_reset_query()
}

/****************** WooCommerce Modifications *************/
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
remove_action( 'woocommerce_product_tabs', 'woocommerce_product_reviews_tab', 30);

?>