<?php
/**
 * Template Name: Gallery
 * @package IFC
 */

get_header();
get_template_part( 'template-parts/page-header');?>

<section id="gallery-intro" class="intro">
	<?php if ( have_rows( 'intro' ) ) : ?>
	<?php while ( have_rows( 'intro' ) ) : the_row(); ?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-8 text-center">
				<div class="sub">
					<small><?php the_sub_field( 'subtitle' ); ?></small>
					<h2><?php the_sub_field( 'title' ); ?></h2>
					<div class="regular-text"><?php the_sub_field( 'text' ); ?></div>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
</section>
<?php $gallery_images = get_field( 'gallery' ); ?>
<?php if ( $gallery_images ) :  ?>
<section id="gallery">
    <div class="container">
        <div class="row">
	<?php foreach ( $gallery_images as $gallery_image ): ?>
		<a href="<?php echo esc_url( $gallery_image['url'] ); ?>" class="col-6 col-md-4 col-lg-3" data-rel="lightcase:gallery" data-lc-caption="<?php echo $gallery_image['caption']; ?>" >
			<img src="<?php echo esc_url( $gallery_image['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $gallery_image['alt'] ); ?>" />
		</a>
    <?php endforeach; ?>
    </div>
    </div>
</section>
<?php endif; ?>
<?php
get_footer();
