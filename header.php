<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
	<!-- OPTIONAL GOOGLE TRACKING ID SET WITH CUSTOM FIELD -->
	<?php if( get_field('tracking_code', 'option') ): $tracking_code = get_field('tracking_code', 'option'); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $tracking_code; ?>"></script>
	<script>
	  	window.dataLayer = window.dataLayer || [];
	  	function gtag(){dataLayer.push(arguments);}
	  	gtag('js', new Date());

		gtag('config', '<?php echo $tracking_code; ?>');
	</script>
	<?php endif; ?>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

	<!-- FACEBOOK AND TWITTER SOCIAL SHARE IMAGES -->
	<meta property="og:image" content="/wp-content/themes/THEME-NAME/img/social_share_image.png">
	<meta name="twitter:image" content="/wp-content/themes/THEME-NAME/img/social_share_image.png">

	<!-- FAVICONS -->
	<!-- DON'T FORGET ME! -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

<!-- ******************* The Navbar Area ******************* -->
<header id="wrapper-navbar" class = "fixed-top">

	<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

	<nav id="main-nav" class="navbar navbar-expand-md" aria-labelledby="main-nav-label">
		<h2 id="main-nav-label" class="screen-reader-text"><?php esc_html_e( 'Main Navigation', 'understrap' ); ?></h2>

		<div class="container">
			<a id = "logoLink" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
				<?php $logo = get_field('logo', 'options'); ?>
				<img id = "headerLogo" class = "img-fluid" src="<?php echo $logo['url']; ?>" alt="<?php echo get_bloginfo( 'name'); ?>"></a>

			<button id = "mobileNavLauncher" class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#modalNav" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
						<i class="fa fa-bars fa-3x" aria-hidden="true"></i>
					</button>

			<!-- The WordPress Menu goes here -->
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarNavDropdown',
					'menu_class'      => 'navbar-nav ms-auto',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 2,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			);
			?>

		</div><!-- .container -->
	</nav><!-- .site-navigation -->
</header><!-- #wrapper-navbar end -->

<!-- MODAL NAV -->
<div class="modal" id="modalNav" tabindex="-1" role="dialog" aria-labelledby="mobileNavLauncher" aria-hidden="true">
  <div class="modal-dialog m-0 h-100">
    <div class="modal-content h-100">
    	<div class="container">
			<div class="row">

				<div id = "modalTop" class = "col-sm-12">
					<img id = "logo" class = "d-block" src="<?php echo $logo['url']; ?>" alt="<?php echo get_bloginfo( 'name'); ?>">
					<div type="button" class = "nav-modal-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="fa fa-times fa-3x" aria-hidden="true"></i>
					</div>
				</div><!-- #modalTop -->
				<div class="col-sm-12">
					<div class="d-flex flex-column">
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'navbar-nav',
								'fallback_cb'     => '',
								'menu_id'         => 'mobileMenu',
								'depth'           => 2,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						); ?>
						<div class="d-flex justify-content-center align-items-center">
							<ul id = "socialMenu" class = "list-unstyled d-inline-flex justify-content-end">
								<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="social-link"><a target="_blank" href=""><i class="fa fa-lg fa-facebook" aria-hidden="true"></i></a></li>	

								<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="social-link"><a target="_blank" href=""><i class="fa fa-lg fa-linkedin" aria-hidden="true"></i></a></li>

								<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="social-link"><a target="_blank" href=""><i class="fa fa-lg fa-youtube" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div><!-- .col-sm-12 -->
			</div><!-- .row -->
		</div><!-- .container -->
    </div><!-- .modal-content -->
  </div><!-- .modal-dialog -->
</div><!-- .modal -->