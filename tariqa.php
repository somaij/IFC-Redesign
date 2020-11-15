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
<section id="tariqa-intro" class="intro">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-8 text-center">
				<h2><?php the_sub_field( 'header' ); ?></h2>
				<div class="regular-text"><?php the_sub_field( 'content' ); ?></a>
					<a href="<?php the_sub_field( 'link' ); ?>" class="btn-ar"><?php the_sub_field( 'link_text' ); ?></a>
				</div>
			</div>
		</div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<section id="tariqa">
	<div class="container">
		<?php
if( have_rows('timeline') ): $i = 0;
while ( have_rows('timeline') ) : the_row(); $i++;?>
		<div class="row <?php if(!($i % 2 == 0)): echo 'justify-content-end'; endif;?>">
			<div class="timebox col-12 col-lg-6">
				<a href="<?php echo '#popup-'.$i;?>" data-rel="lightcase">
				<h3><?php the_sub_field( 'year' ); ?></h3>
				<h4 class="sub"><?php the_sub_field( 'name' ); ?></h4>
				
				</a>
				<div id="<?php echo 'popup-'.$i;?>" style="display:none;">
				<div class="content">
					<?php the_sub_field( 'content' ); ?>
				</div>
				</div>
			</div>
		</div>
			<?php endwhile; endif; ?>
	</div>
</section>

<?php get_footer(); ?>
