<div id="leftCol">
	<nav role="navigation">
		<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
	</nav>

	<div id="sidebar1" role="complementary">

		<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

			<?php dynamic_sidebar( 'sidebar1' ); ?>

		<?php endif; ?>

	</div><!-- end #sidebar1 -->
</div><!-- end #leftCol -->