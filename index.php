<?php
/**
 * Index
 *
 * Theme index.
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
<section id="blog">
	<div class="container">
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
			<div class="col-12 col-lg-6">
				<h1><?php the_title(); ?></h1>
				<?php the_excerpt();?>
			</div>
			<?php endwhile; endif;?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
