<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; ?>

<div id="js-heightControl" style="height: 0;">&nbsp;</div>

<div id="wrapperFooter">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12 text-center text-lg-start">
			<?php wp_nav_menu(
				array(
					'theme_location'  => 'footer',
					'container_class' => '',
					'container_id'    => 'footerMenuContainer',
					'menu_class'      => 'd-flex d-inline-lg-flex list-unstyled',
					'fallback_cb'     => '',
					'menu_id'         => 'footerMenu',
					'depth'           => 1,
					'after'			  => '<span> |</span>',
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				) ); ?>
			<?php $phone = preg_replace('/[^0-9]/', '', get_field('phone_number', 'option')); ?>
			<a class = "text-decoration-none" href="tel:<?php echo $phone ?>"><h5 class = "yellow mb-1 oswald"><?php the_field('phone_number', 'option'); ?></h5></a>
			<a class = "text-decoration-none" href="mailto:<?php the_field('email_address','option'); ?>"><h5 class = "yellow mb-0 oswald"><?php the_field('email_address','option'); ?></h5></a>
			</div><!-- .col-sm-12 -->
			<div class="col-md-12">
				
				<footer id="colophon" class="site-footer text-center source-serif-pro">
					<div class="container">
						<div class="col-sm-12">
							<hr>
							<p id="copyrightAndTerms" class = "small mb-0">
								&copy; <?php echo date('Y') . ' ' . get_bloginfo( 'name' ) . '. All rights reserved. ' ?>
							</p>
							<p class = "mb-0 small">Website Designed & Developed by <a class = "text-white" target = "_blank" href="https://designs4theweb.com">Designs 4 The Web</a></p>
						</div><!-- .col-sm-12 -->
					</div><!-- .container -->
				</footer><!-- #colophon -->
			</div><!--.col-sm-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #wrapperFooter -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<?php if (is_page_template('templates/homepage.php')) : ?>
<script>
	jQuery(document).ready(function() {
  		jQuery('#heroSlider').slick({
  			arrows: false,
  			dots: true,
  			appendDots: jQuery('#heroDots'),
		    slidesToShow: 1,
		    slidesToScroll: 1,
		    fade: true,
		    cssEase: 'ease-in-out'
  		});
	});
</script>
<?php endif; ?>

</body>
</html>