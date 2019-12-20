<?php
/**
 * Page
 *
 * Theme Page
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
get_template_part( 'template-parts/page-header');?>
<section id="page">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<?php the_content();?>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif;?>
<?php get_footer(); ?>
