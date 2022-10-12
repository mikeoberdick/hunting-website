<?php /* Template Name: Taxidermy */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="taxidermy">
			<?php get_template_part( 'snippets/hero'); ?>

			<?php $sectionOne = get_field('section_one'); ?>
			<section id="sectionOne" class = "py-5">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="wysiwyg text-white text-center w-50 mx-auto oswald">
								<?php echo $sectionOne['quote']; ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionOne -->

			<?php $sectionTwo = get_field('section_two'); ?>
			<section id="sectionTwo" class = "pt-5">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<h3 class = "oswald"><?php echo $sectionTwo['header']; ?></h3>
							<div class="wysiwyg">
								<?php echo $sectionTwo['content']; ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-lg-6 -->
						<div class="col-lg-6 right">
							<?php $img = $sectionTwo['image']; ?>
							<img src = "<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
						</div><!-- .col-lg-6 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionTwo -->

			<?php $sectionThree = get_field('section_three'); ?>
			<section id="sectionThree" class = "py-5">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h5 class="midline"><span><?php echo $sectionThree['title']; ?></span></h5>
						</div><!-- .col-sm-12 -->
						<?php while(have_rows('section_three')) : the_row(); ?>
							<?php while(have_rows('rates')) : the_row(); ?>
								<div class="col-lg-4">
									<?php $img = $sectionThree['image']; ?>
									<img class ="mb-3" src = "<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
									<h5 class = "maroon oswald"><?php the_sub_field('title'); ?></h5>
									<div class="wysiwyg">
										<?php the_sub_field('content'); ?>
									</div><!-- .wysiwyg -->
								</div><!-- .col-lg-4 -->
							<?php endwhile; ?>
						<?php endwhile; ?>
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionThree -->

			<section id="sectionFour">
				<?php get_template_part( 'snippets/gallery'); ?>
			</section><!-- #sectionFour -->

		</div><!-- #taxidermy -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>