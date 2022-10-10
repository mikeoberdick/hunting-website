<?php /* Template Name: About */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="about">
			<?php get_template_part( 'snippets/hero'); ?>

			<?php $sectionOne = get_field('section_one'); ?>
			<section id="sectionOne">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-8 left py-5">
							<h5 class = "yellow"><?php echo $sectionOne['subheader']; ?></h5>
							<h3 class = "mb-3 text-white"><?php echo $sectionOne['header']; ?></h3>
							<div class="wysiwyg text-white">
								<?php echo $sectionOne['content']; ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-lg-8 -->
						<div class="col-lg-4 right">
							<?php $img = $sectionOne['image']; ?>
							<img src = "<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
						</div><!-- .col-lg-4 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionOne -->

			<?php $sectionTwo = get_field('section_two'); $bg = $sectionTwo['background_image']; ?>
			<section id="sectionTwo" class = "py-5" style = "background: url('<?php echo $bg['url']; ?>'); ">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-4 left">
							<div class="wysiwyg yellow text-right">
								<?php echo $sectionTwo['quote']; ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-lg-4 -->
						<div class="col-lg-8 right">
							<div class="inner-wrapper">
								<h5 class = "yellow"><?php echo $sectionTwo['subheader']; ?></h5>
								<h3 class = "mb-3 text-white"><?php echo $sectionTwo['header']; ?></h3>
								<div class="wysiwyg text-white">
									<?php echo $sectionTwo['content']; ?>
								</div><!-- .wysiwyg -->	
							</div><!-- .inner-wrapper -->
						</div><!-- .col-lg-8 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionTwo -->

			<?php $sectionThree = get_field('section_three'); ?>
			<section id="sectionThree">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-3">
							<div class="wysiwyg green py-5">
								<?php echo $sectionThree['quote_one']; ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-lg-3 -->
						<div class="col-lg-6 center">
							<div class="inner-wrapper">
								<h5 class = "yellow"><?php echo $sectionThree['subheader']; ?></h5>
								<h3 class = "mb-3 text-white"><?php echo $sectionThree['header']; ?></h3>
								<div class="wysiwyg text-white">
									<?php echo $sectionThree['content']; ?>
								</div><!-- .wysiwyg -->	
							</div><!-- .inner-wrapper -->
						</div><!-- .col-lg-6 -->
						<div class="col-lg-3">
							<div class="wysiwyg green py-5">
								<?php echo $sectionThree['quote_two']; ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-lg-3 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionThree -->

			<?php $sectionFour = get_field('section_four'); ?>
			<section id="sectionFour" class = "pt-5">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h5 class="midline"><span><?php echo $sectionFour['title']; ?></span></h5>
						</div><!-- .col-sm-12 -->
						<div class="col-lg-8">
							<div class="wysiwyg">
								<?php echo $sectionFour['content']; ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-lg-8 -->
						<div class="col-lg-4">
							<?php $img = $sectionFour['image']; ?>
							<img src = "<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
						</div><!-- .col-lg-4 -->
						<div class="col-sm-12">
							<div class="text-center my-4 fw-bold">
								<?php echo $sectionFour['licenses']; ?>
							</div><!-- .text-center -->
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
				<div class="quote-container py-5">
					<div class="quote">
						<div class="wysiwyg green w-50 mx-auto green text-center">
							<?php echo $sectionFour['lower_quote']; ?>
						</div><!-- .wysiwyg -->
					</div><!-- .quote -->
				</div><!-- .quote-container -->
			</section><!-- #sectionFour -->
			
		</div><!-- #about -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>