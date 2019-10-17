<?php
/**
 * Template Name: About Us Page
 * @package IFC
 */

get_header();
?>

<section class="about-container">
	<div class="container">
		<div class="row">
			<div class="d-none d-md-block col-3">
				<div class="about-side">
					<div class="sidebar__inner">
						<h3>Table of Contents</h3>
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
			<div class="col">

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
