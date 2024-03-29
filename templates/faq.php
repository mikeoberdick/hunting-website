<?php /* Template Name: FAQ */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="faq">
			<?php get_template_part( 'snippets/hero'); ?>

			<?php $sectionOne = get_field('section_one'); ?>
			<section id="sectionOne" class = "py-5">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-8">
							<h2 class="green oswald"><?php echo $sectionOne['header']; ?></h2>
							<div class="wysiwyg">
								<?php echo $sectionOne['content']; ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-lg-8 -->
						<div class="col-lg-4 right d-none d-lg-flex">
							<?php $img = $sectionOne['image']; ?>
							<img src = "<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
						</div><!-- .col-lg-4 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionOne -->

			<section id="sectionTwo">
				<div class="container">
					<div class="row">
						<div id = "questionContainer" class="col-sm-12">
							<div class="w-100 accordion md-accordion" id="faqAccordion" role="tablist" aria-multiselectable="true">
								<?php $i = 0; ?>
								<?php while ( have_rows('questions_and_answers') ) : the_row(); ?>
						        	<div class="question-container">
						        		<div class="card-wrapper" role="tab" id="<?php echo 'question-' . $i; ?>">
				  							<div data-bs-toggle="collapse" data-bs-target="<?php echo '#collapse-question-' . $i; ?>" aria-expanded="<?php if ( $i == 0 ) {echo 'true';} else {echo 'false';}; ?>" aria-controls="<?php echo 'collapse-question-' . $i; ?>">
				  								<div class = "question">
				  									<div class = "plus-to-minus">
													  <span></span>
													  <span></span>
													</div><!-- .plus-to-minus -->
				    								<h3 class="question-text d-inline mb-0 h5 oswald maroon"><?php the_sub_field('question'); ?></h3>
				  								</div><!-- .question -->
				  							</div>
				        					<div id="<?php echo 'collapse-question-' . $i; ?>"
				        					class = "<?php if ( $i == 0 ) {echo 'collapse show';} else {echo 'collapse';}; ?>" role="tabpanel" aria-labelledby="<?php echo 'question-' . $i; ?>" data-bs-parent="#faqAccordion">
										      	<div class="card-body">
													<?php the_sub_field('answer'); ?>
										      	</div><!-- .card-body -->
				    						</div><!-- .collapse -->
				  							
										</div><!-- card-wrapper -->
									</div><!-- .question-container -->
								<?php $i++ ?>
								<?php endwhile; ?>
							</div><!-- .accordion -->
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionTwo -->
			
		</div><!-- #faq -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>