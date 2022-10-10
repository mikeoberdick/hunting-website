<?php /* Template Name: About */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="about">
			<?php get_template_part( 'snippets/hero'); ?>
			
		</div><!-- #about -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>