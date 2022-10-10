<?php
/**
 * The template for displaying all single guided hunts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="singleGuidedHunt">
			
			<?php get_template_part( 'snippets/hero'); ?>
			<div id="sectionOne">
				<div class="container">
					<div class="row">
						<div class="left col-md-4">
							<div class="general-overview">
								<h5 class="text-white">Hunting <?php echo get_the_title(); ?></h5>
								<div class="wysiwyg text-white">
									<?php the_field('general_overview'); ?>
								</div><!-- .wysiwyg -->
							</div><!-- .general-overview -->
							<div class="gallery d-flex flex-column">
								<?php $images = get_field('sidebar_images'); ?>
						    	<?php foreach( $images as $image ) : ?>
						        	<img class = "gallery-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						    	<?php endforeach; ?>
							</div><!-- .gallery -->
						</div><!-- .col-md-4 -->
						<div class="right col-lg-8">
							<h5 class="green">Target Species</h5>
							<div class="wysiwyg">
								<?php the_field('target_species'); ?>
							</div><!-- .wysiwyg -->
							<div class="rates">
								<h5 class="text-white">Rates</h5>
								<div class="wysiwyg text-white">
									<?php the_field('rates'); ?>
								</div><!-- .wysiwyg -->
							</div><!-- .rates -->
							<div class="main-content">
								<?php the_field('main_content'); ?>
							</div><!-- .main-content -->
						</div><!-- .col-lg-8 -->
						<div class="col-sm-12">
							<h5 class="midline"><span>Additional Information</span></h5>
							<div class="wysiwyg">
								<?php the_field('additional_information'); ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- #sectionOne -->

			<section id="sectionTwo">
			<?php $custom_query_args = array(
				'post_type' => 'guided-hunt', 
				'posts_per_page' => '-1',
			);
			$custom_query = new WP_Query( $custom_query_args );

			while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
				<?php $bg = get_field('featured_image'); ?>
            	<div class="page-bucket d-flex flex-column justify-content-center align-items-center" data-link = "<?php the_permalink(); ?>" style = "background-image: url('<?php echo $bg['url']; ?>'); ">
					<h5 class = "yellow">Learn More</h5>
					<h3 class = "text-white"><?php the_title(); ?></h3>
				</div><!-- .page-bucket -->
    		<?php endwhile; ?>
			
			</section><!-- #sectionTwo -->

		</div><!-- #singleGuidedHunt -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>