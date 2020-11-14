<?php
/**
 * Template Name: Donate Page
 * @package IFC
 */

get_header();
?>
<?php if ( have_rows( 'masthead' ) ) : ?>
<?php while ( have_rows( 'masthead' ) ) : the_row(); ?>
<section id="donate-masthead" style="background-image:linear-gradient(to right, rgba(18, 60, 105, 0.70), rgba(0, 0, 0, 0.20)),url(<?php the_sub_field( 'background_image' ); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
				<h1><?php the_sub_field( 'title' ); ?></h1>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 text-center">
			<div class="d-flex">
				<div class="sub">Current Phase</div>
				<h3><?php the_sub_field( 'current_phase' ); ?></h3>
			</div>
			<div class="progress">
				<div role="progressbar" style="width: <?php the_sub_field( 'progress_bar_percentage' ); ?>%;"
					class="progress-bar">
					<span class="inner-text"><?php the_sub_field( 'progress_bar_inner_text' ); ?></span>
					<span class="outer-text"><?php the_sub_field( 'progress_bar_outer_text' ); ?></span>
				</div>
			</div>
		</div>

	</div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<div id="madrasah-video-embed"><?php the_field( 'video_embed' ); ?></div>
<?php if ( have_rows( 'frequently_asked_questions' ) ) : ?>
<?php while ( have_rows( 'frequently_asked_questions' ) ) : the_row(); ?>
<section id="faqs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
				<h2><?php the_sub_field( 'title' ); ?></h2>
			</div>
		</div>
		<div class="row">
			<?php if ( have_rows( 'questions' ) ) : ?>
			<?php while ( have_rows( 'questions' ) ) : the_row(); ?>
			<div class="col-12 col-lg-6 question">
				<h3><?php the_sub_field( 'question' ); ?></h3>
				<p><?php the_sub_field( 'answer' ); ?></p>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
