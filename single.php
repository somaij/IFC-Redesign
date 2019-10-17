<?php
/**
 * Single Post
 *
 * Theme Single Post.
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<section id="post">
	<div class="container">
        <div class="row text-center">
        <h1><?php the_title(); ?></h1>
        </div>
		<div class="row justify-content-center">
			<div class="col-10">
				<?php the_excerpt();?>
			</div>
			
		</div>
	</div>
</section>
<?php endwhile; endif;?>
<?php get_footer(); ?>
