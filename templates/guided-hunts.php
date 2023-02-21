<?php /* Template Name: Guided Hunts */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="guidedHunts">
			<?php get_template_part( 'snippets/hero'); ?>

			<?php $sectionOne = get_field('section_one'); ?>
			<section id="sectionOne" class = "py-5">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-7">
							<h5 class = "yellow"><?php echo $sectionOne['subheader']; ?></h5>
							<h3 class = "text-white oswald"><?php echo $sectionOne['header']; ?></h3>
							<div class="wysiwyg text-white pb-5">
								<?php echo $sectionOne['content']; ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-lg-7 -->
						<div class="col-lg-5">
							<?php $img = $sectionOne['image']; ?>
							<img src = "<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
						</div><!-- .col-lg-5 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionOne -->

			<section id="sectionTwo">
			<?php $custom_query_args = array(
				'post_type' => 'guided-hunt', 
				'posts_per_page' => '-1',
			);
			$custom_query = new WP_Query( $custom_query_args );

			while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
				<?php $bg = get_field('featured_image'); ?>
            	<div class="page-bucket d-flex flex-column justify-content-center align-items-center" data-link = "<?php the_permalink(); ?>" style = "background-image: url('<?php echo $bg['url']; ?>'); ">
					<h2 class = "text-white oswald"><?php the_title(); ?></h2>
				</div><!-- .page-bucket -->
    		<?php endwhile; wp_reset_query(); ?>
			
			</section><!-- #sectionTwo -->

			<section id="sectionThree">
				<?php get_template_part('snippets/gallery'); ?>
			</section><!-- #sectionThree -->

		</div><!-- #guidedHunts -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>