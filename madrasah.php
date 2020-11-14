<?php
/**
 * Template Name: Madrasah Page
 * @package IFC
 */

get_header();
?>
<section id="madrasah-slider">
	<?php if ( have_rows( 'slides' ) ) : ?>
	<?php while ( have_rows( 'slides' ) ) : the_row(); ?>
	<div class="slide"
		style="background-image:url(<?php if ( get_sub_field( 'image' ) ) : the_sub_field( 'image' ); endif;?>);">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-7">
                    <div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
					<h1><?php the_sub_field( 'title' ); ?></h1>
					<p><?php the_sub_field( 'text' ); ?></p>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
	<?php else : ?>
	<?php // no rows found ?>
	<?php endif; ?>
</section>

<section id="madrasah-section-1" class="madrasah-section">
	<?php if ( have_rows( 'section_1' ) ) : ?>
	<?php while ( have_rows( 'section_1' ) ) : the_row(); ?>
	<div class="container">
		<div class="row justify-content-center">
			<?php $image = get_sub_field( 'image' ); ?>
			<?php if ( $image ) : ?>
			<div class="col-12 col-lg-6">
				<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
			</div>
			<?php endif; ?>
			<div class="col-12 col-lg-6">
				<h2><?php the_sub_field( 'title' ); ?></h2>
				<p><?php the_sub_field( 'text' ); ?></p>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
</section>
<section id="madrasah-section-2" class="madrasah-section">
	<?php if ( have_rows( 'section_2' ) ) : ?>
	<?php while ( have_rows( 'section_2' ) ) : the_row(); ?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-6">
				<h2><?php the_sub_field( 'title' ); ?></h2>
				<p><?php the_sub_field( 'text' ); ?></p>
				<?php $button_link = get_sub_field( 'button_link' ); ?>
				<?php if ( $button_link ) : ?>
				<a href="<?php echo esc_url( $button_link) ; ?>"
					class="btn-sq blue"><?php the_sub_field( 'button_text' ); ?></a>
				<?php endif; ?>
			</div>
			<?php $image = get_sub_field( 'image' ); ?>
			<?php if ( $image ) : ?>
			<div class="col-12 col-lg-6">
				<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
			</div>
			<?php endif; ?>
		</div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
</section>

<?php if ( have_rows( 'middle_cta' ) ) : ?>
<?php while ( have_rows( 'middle_cta' ) ) : the_row(); ?>
<section class="cta d-flex flex-column flex-md-row align-items-center justify-content-center">
	<h3><?php the_sub_field( 'text' ); ?></h3>
	<?php if ( $link ) : ?>
	<a href="<?php echo esc_url( $link) ; ?>" class="btn-sq-outline white"><?php the_sub_field( 'button_text' ); ?></a>
	<?php endif; ?>
</section>
<?php endwhile; ?>
<?php endif; ?>

<section id="gallery">
	<?php if ( have_rows( 'gallery_section' ) ) : ?>
	<?php while ( have_rows( 'gallery_section' ) ) : the_row(); ?>
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
            <div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
            <h2><?php the_sub_field( 'title' ); ?></h2>
            </div>
        </div>
        <div class="row">

        </div>
        <div class="row">
            <div class="col-12 text-center">
            <?php $button_link = get_sub_field( 'button_link' ); ?>
            <?php if ( $button_link ) : ?>
            <a href="<?php echo esc_url( $button_link) ; ?>" class="btn-ar"><?php the_sub_field( 'button_text' ); ?></a>
            <?php endif; ?>
            </div>
        </div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
</section>


<?php
get_footer();
