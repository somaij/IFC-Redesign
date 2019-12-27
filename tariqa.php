<?php
/**
 * Template Name: Tariqa Page
 * @package IFC
 */

get_header();
get_template_part( 'template-parts/page-header');
?>

<?php if ( have_rows( 'intro_section' ) ) : ?>
<?php while ( have_rows( 'intro_section' ) ) : the_row(); ?>
<section id="tariqa-intro">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2><?php the_sub_field( 'header' ); ?></h2>
				<div class="regular-text"><?php the_sub_field( 'content' ); ?></a>
					<a href="<?php the_sub_field( 'link' ); ?>"><?php the_sub_field( 'link_text' ); ?></a>
				</div>
			</div>
		</div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php
if( have_rows('timeline') ):
while ( have_rows('timeline') ) : the_row();?>
<div class="timebox">
<h3><?php the_sub_field( 'year' ); ?></h3>
<h4><?php the_sub_field( 'name' ); ?></h4>
<div class="content">
<?php the_sub_field( 'content' ); ?>
</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
