<?php
/**
 * Page
 *
 * Theme Front Page
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
<?php if ( have_rows( 'masthead_content' ) ) : ?>
<?php while ( have_rows( 'masthead_content' ) ) : the_row(); 
$images = get_sub_field('background_images');
$rand = array_rand($images, 1);
?>

<div id="masthead"
	style="background-image:linear-gradient(to right, rgba(18, 60, 105, 0.70), rgba(0, 0, 0, 0.20)),url(<?php echo $images[$rand]['url']; ?>;">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8 content">
				<div class="sub brown">
					<small><?php the_sub_field( 'subtitle' ); ?></small>
					<h1><?php the_sub_field( 'title' ); ?></h1>
				</div>
				<div class="regular-text"><?php the_sub_field( 'text' ); ?></div>
				<div><a href="<?php the_sub_field( 'button_1_link' ); ?>"
						class="btn-sq brown"><?php the_sub_field( 'button_1_text' ); ?></a>
					<a href="<?php the_sub_field( 'button_2_link' ); ?>"
						class="btn-ar white-brown"><?php the_sub_field( 'button_2_text' ); ?></a></div>
			</div>
		</div>
	</div>
	<div class="masthead-prayer-times">
		<h3>Prayer Times</h3>
		<?php get_template_part( 'assets/template-parts/prayer-times');?>

	</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php if ( have_rows( 'madrasah_section' ) ) : ?>
<?php while ( have_rows( 'madrasah_section' ) ) : the_row(); ?>
<section id="madrasah-preview">
	<div class="container">
		<div class="row">
			<div class="image">
				<?php if ( get_sub_field( 'image') ) { ?>
				<img src="<?php the_sub_field( 'image' ); ?>" />
				<?php } ?>
			</div>
			<div class="text">
				<div class="top">
					<?php 
                $args = array( 'post_type' => 'testimonials', 'posts_per_page' => 3, 'taxonomy' => 'category',
                'term' => 'student', );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>
					<div>
						<h3><?php the_field( 'quote_text' );?></h3>
					</div>
					<?php endwhile;
                    wp_reset_query();?>
				</div>
				<div class="divider"></div>
				<div class="bottom">
					<h4><?php the_sub_field( 'title' ); ?></h4>
					<p><?php the_sub_field( 'text' ); ?></p>
					<a href="<?php the_sub_field( 'button_link' ); ?>"
						class="btn-sq brown"><?php the_sub_field( 'button_text' ); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php if ( have_rows( 'cta_1' ) ) : ?>
<?php while ( have_rows( 'cta_1' ) ) : the_row(); ?>
<section class="cta d-flex align-items-center justify-content-center">
	<h3><?php the_sub_field( 'text' ); ?></h3>
	<a href="<?php the_sub_field( 'button_link' ); ?>"
		class="btn-sq-outline white"><?php the_sub_field( 'button_text' ); ?></a>
</section>
<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'events_section' ) ) : ?>
<?php while ( have_rows( 'events_section' ) ) : the_row(); ?>
<section id="events-preview">
	<div class="container">
		<div class="row justify-content-center">
			<div class="sub blue text-center">
				<small><?php the_sub_field( 'subtitle' ); ?></small>
				<h2><?php the_sub_field( 'title' ); ?></h2>
			</div>
		</div>
		<div class="row events-list justify-content-stretch">
			<?php $events = tribe_get_events( array('posts_per_page' => 3,) );
				// Loop through the events, displaying the title
				// and content for each
				foreach ( $events as $event ) {
					echo "<a href='/events/$event->post_name' class='col-12 col-md event'>";
					echo "<small>" . tribe_get_start_date( $event ) . "</small>";
					echo "<h3>$event->post_title</h3><div class='divider'></div>";
					echo "<div class='text'>$event->post_excerpt</div>";
					echo "<span class='btn-sq-outline blue-brown'>See Event</span>";
					echo "</a>";
				} wp_reset_query();?>
		</div>
		<div class="event-cta row justify-content-center">
			<div>
				<?php the_sub_field( 'cta_text' ); ?>
			</div>
			<div><a href="<?php the_sub_field( 'button_link' ); ?>"
					class="btn-ar blue-brown"><?php the_sub_field( 'button_text' ); ?></a>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<section id="blog-preview">
	<?php global $post;
$args = array( 'posts_per_page' => 1); $myposts = get_posts( $args );?>
	<?php foreach ( $myposts as $post ) : setup_postdata( $post );  ?>
	<div class="first-post d-flex align-items-end"
		style="background-image:linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url(<?php the_post_thumbnail_url()?>);">
		<div class="container d-flex align-items-end justify-content-between">
			<div class="blog-preview">
				<h3><?php the_title();?></h3>
				<div class="author">By: <?php the_author();?></div>
				<div class="text">
					<?php the_excerpt();?>
				</div>
				<a href="<?php the_permalink(); ?>" class="btn-ar white-brown">Read More</a>
			</div>
			<a href="/blog" class="all-articles">See All Articles</a>
		</div>
	</div>
	<?php endforeach; 
wp_reset_postdata();
$args = array( 'posts_per_page' => 3, 'offset' => 1); $myposts = get_posts( $args );?>
	<div class="other-posts">
		<div class="container">
			<div class="row align-items-stretch">


				<?php foreach ( $myposts as $post ) : setup_postdata( $post );  ?>
				<a class="col-12 col-md-4 blog-preview" href="<?php the_permalink(); ?>">
					<div class="image">
						<img src="<?php the_post_thumbnail_url(); ?>" />
					</div>
					<div class="content">
						<h3><?php the_title();?></h3>
						<div class="author">By: <?php the_author();?></div>
						<div class="text">
							<?php the_excerpt();?>
						</div>
						<span class='btn-sq-outline blue-brown'>Read Article</span>
					</div>
				</a>
				<?php endforeach; 
wp_reset_postdata();?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
