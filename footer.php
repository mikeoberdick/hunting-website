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
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<ul class = "list-unstyled d-flex justify-content-center mb-3">	
					<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="social-link"><a target="_blank" href="https://www.facebook.com/pixelstrike/"><i class="fa fa-lg fa-facebook" aria-hidden="true"></i></a></li>

					<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="social-link"><a target="_blank" href="https://www.instagram.com/pixelstrikecreative/"><i class="fa fa-lg fa-instagram" aria-hidden="true"></i></a></li>	

					<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="social-link"><a target="_blank" href="https://www.linkedin.com/company/pixelstrike-creative-llc"><i class="fa fa-lg fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
				<footer id="colophon" class="site-footer text-center small">
					<div class="container">
						<div class="col-sm-12">
							<p id="copyrightAndTerms">
								&copy; <?php echo date('Y') . ' ' . get_bloginfo( 'name' ) . '. All rights reserved. ' ?><a href="/terms-and-conditions">Terms & Conditions</a>
							</p>
							<p class = "mb-0">Website Designed & Developed by <a target = "_blank" href="https://pixelstrikecreative.com">Pixelstrike Creative</a></p>
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