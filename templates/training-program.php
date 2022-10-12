<?php /* Template Name: Training Program */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="trainingProgram">
			<?php get_template_part( 'snippets/hero'); ?>

			<?php $sectionOne = get_field('section_one'); ?>
			<section id="sectionOne">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 left">
							<?php $img = $sectionOne['image']; ?>
							<div class="outer-wrapper" style = "background-image: url('<?php echo $img['url']; ?>'); ">
								<div class="content-wrapper offset-left">
									<div class="wysiwyg oswald">
										<?php echo $sectionOne['overlay_text']; ?>
									</div><!-- .wysiwyg -->
								</div><!-- .content-wrapper -->	
							</div><!-- .outer-wrapper -->
						</div><!-- .col-lg-4 -->
						<div class="col-lg-8 right py-5">
							<div class="wysiwyg">
								<?php echo $sectionOne['content']; ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-lg-8 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionOne -->

			<?php $sectionTwo = get_field('section_two'); ?>
			<section id="sectionTwo">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h5 class="midline"><span><?php echo $sectionTwo['title']; ?></span></h5>
						</div><!-- .col-sm-12 -->
						<div class="col-lg-8">
							<div class="wysiwyg">
								<?php echo $sectionTwo['content']; ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-lg-8 -->
						<div class="col-lg-4">
							<?php $img = $sectionTwo['image']; ?>
							<img src = "<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
						</div><!-- .col-lg-4 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionTwo -->

			<section id="sectionThree">
				<?php get_template_part( 'snippets/gallery'); ?>
			</section><!-- #sectionThree -->
			
		</div><!-- #trainingProgram -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>