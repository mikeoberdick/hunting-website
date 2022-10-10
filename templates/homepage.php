<?php /* Template Name: Homepage */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="homepage">
			<?php get_template_part('snippets/hero'); ?>

			<?php $sectionOne = get_field('section_one'); ?>
			<div id="sectionOne">
				<?php while(have_rows('section_one')) : the_row(); ?>
					<?php while(have_rows('page_buckets')) : the_row(); ?>
						<?php $bg = get_sub_field('background_image'); ?>
						<div class="page-bucket d-flex flex-column justify-content-center align-items-center" data-link = "<?php the_sub_field('link'); ?>" style = "background-image: url('<?php echo $bg['url']; ?>'); ">
							<h5 class = "yellow"><?php the_sub_field('subheader'); ?></h5>
							<h3 class = "text-white"><?php the_sub_field('header'); ?></h3>
						</div><!-- .page-bucket -->
					<?php endwhile; ?>
				<?php endwhile; ?>
			</div><!-- #sectionOne -->

			<?php $sectionTwo = get_field('section_two'); ?>
			<section id="sectionTwo" class = "py-5">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h5 class="midline"><span><?php echo $sectionTwo['header']; ?></span></h5>
						</div><!-- .col-sm-12 -->
						<?php $testimonials = $sectionTwo['testimonials'];							
						    foreach( $testimonials as $post ): 
						        // Setup this post for WP functions (variable must be named $post).
						        setup_postdata($post); ?>
						        <div class="testimonial col-lg-4">
						        	<img class = "mb-1" src="<?php echo get_stylesheet_directory_uri() . '/img/stars.png'; ?>" alt="star rating">
						        	<h5 class = "mb-2"><?php the_field('callout'); ?></h5>
						        		<?php $trimmed_text = wp_trim_excerpt_modified( get_field('content'), 40 );
										$last_space = strrpos( $trimmed_text, ' ' );
							            $modified_trimmed_text = substr( $trimmed_text, 0, $last_space );

							            echo '<div class="the-excerpt">' . $modified_trimmed_text . '...</div>' ?>
						        </div><!-- .testimonial -->
						    <?php endforeach; 
						    // Reset the global post object so that the rest of the page works correctly.
						    wp_reset_postdata(); ?>
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionTwo -->

			<?php $sectionThree = get_field('section_three'); ?>
			<div id="sectionThree">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 left">
							<?php $img = $sectionThree['image']; ?>
							<div class="image-holder" style = "background-image: url('<?php echo $img['url']; ?>'); "></div><!-- .image-holder -->
						</div><!-- .col-lg-6 -->
						<div class="col-lg-6">
							<h5 class = "yellow"><?php echo $sectionThree['subheader']; ?></h5>
							<h3 class = "text-white"><?php echo $sectionThree['header']; ?></h3>
							<div class="wysiwyg text-white">
								<?php echo $sectionThree['content']; ?>
							</div><!-- .wysiwyg -->
							<a href = "<?php echo $sectionThree['button_link']; ?>"><button role = "button" class = "btn"><?php echo $sectionThree["button_text"]; ?></button></a>
						</div><!-- .col-lg-6 -->
				</div><!-- .container -->
			</div><!-- #sectionThree -->

		</div><!-- #homepage -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>