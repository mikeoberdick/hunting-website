<?php /* Template Name: Contact */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="contact">
			<?php get_template_part( 'snippets/hero'); ?>

			<?php $sectionOne = get_field('section_one'); ?>
			<section id = "sectionOne">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 left pt-5">
							<h2 class="h3 oswald"><?php echo $sectionOne['section_header']; ?></h2>
							<hr>
							<div class="contact d-flex">
								<div class="d-flex flex-column me-5">
									<h5 class = "oswald">Call Us</h5>
									<?php $phone = preg_replace('/[^0-9]/', '', get_field('phone_number', 'option')); ?>
									<a href="tel:<?php echo $phone ?>"><?php the_field('phone_number', 'option'); ?></a>
								</div><!-- .left -->
								<div class="d-flex flex-column">
									<h5 class = "oswald">Visit Us</h5>
									<?php echo get_field('address_line_1', 'option') . ', ' . get_field('address_line_2', 'option'); ?>
								</div><!-- .right -->
							</div><!-- .contact -->
							<hr>
							<h5 class = "oswald"><?php echo $sectionOne['form_header']; ?></h5>
							<?php echo do_shortcode ('[ninja_form id=1]'); ?>
						</div><!-- .col-lg-8 -->
						<div class="col-lg-4 right">
							<?php $img = $sectionOne['image']; ?>
							<img src = "<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
						</div><!-- .col-lg-4 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionOne -->
			
		</div><!-- #contact -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>