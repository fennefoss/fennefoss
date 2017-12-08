<?php
/**
 *
 * Template Name: landing-page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fennefoss
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			<section class="newest-social">
				<div class="newest-social__instagram">
					<script type="text/javascript">
						var feed = new Instafeed({
						    get: 'user',
						    userId: '3925944234',
						    clientId: '	6ab05fbe7e6144b7819e214f1870930e',
						    accessToken: '3925944234.6ab05fb.825c4e3e941146a4852790c4af478442',
						    resolution: 'low_resolution',
						    limit: '4',
						    sortBy: 'most-recent',
						    template: '<a href="{{link}}"><img src="{{image}}" /></a>' +
						    '<div class="instagram-overlay">{{caption}}{{likes}}</div>'
						});
						feed.run();
					</script>
					<div id="instafeed" class="instagram-wrapper"></div>
				</div>

				<div class="newest-social__youtube">
				<iframe id="ytplayer" type="text/html" width="640" height="360"
				    src="https://www.youtube.com/embed?listType=user_uploads&list=Fenn3"
				    frameborder="0">
				</iframe>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
