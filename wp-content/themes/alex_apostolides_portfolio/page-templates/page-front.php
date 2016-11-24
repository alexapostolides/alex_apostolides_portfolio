<?php /* Template Name: Front Page*/

get_header(); ?>

<style type="text/css">
html, body {
  overflow: hidden;		
}
</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">




<script src="https://f.vimeocdn.com/js/froogaloop2.min.js"></script>
<iframe id="vimeo_player" src="https://player.vimeo.com/video/192266226?api=1&player_id=vimeo_player&autoplay=1&loop=1&preload=1&color=ffffff" width="960" height="540" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>





<!-- Mobile Logo -->
<img id="mobileLogo" src="http://localhost/Wordpress%20Sites/wordpress/wp-content/uploads/2016/02/mobileLogo.png">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

