<?php
/**
 * Template Name: About Us Page
 * @package IFC
 */

get_header();
get_template_part( 'template-parts/page-header');
?>
<section class="imam-section">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php if ( get_field( 'imam_image') ) { ?>
				<img src="<?php the_field( 'imam_image' ); ?>" />
				<?php } ?>
			</div>
			<div class="col">
				<h2><?php the_field( 'imam_section_title' ); ?></h2>
				<div class="regular-text"><?php the_field( 'imam_section_content' ); ?></div>
			</div>
		</div>
	</div>
</section>
<section class="about-container">
	<div class="container">
		<div class="row">
			<div class="d-none d-md-block col-3">
				<div class="about-side">
					<div class="sidebar-inner">
						<ul class="sidebar">
							<?php
                            if( have_rows('content') ):
                            $i = 0;
                            while ( have_rows('content') ) : the_row(); 
                            $i++;
                            ?>
							<li>
								<a href="#<?php echo $i;?>">
									<?php the_sub_field('header'); ?>
								</a>
							</li>
							<?php endwhile; endif;?>
					</div>
				</div>
			</div>
			<div class="col offset-lg-1 about-content">

				<?php
if( have_rows('content') ):
$z = 0;
   while ( have_rows('content') ) : the_row();
        $z++;?>
				<section id="<?php echo $z;?>" class="regular-text">
					<h2><?php the_sub_field('header'); ?></h2>
					<?php the_sub_field('content'); ?>
				</section>

				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
