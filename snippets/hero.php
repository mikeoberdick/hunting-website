<?php
if (is_home() || is_category() || is_singular('post')) {
	$hero = get_field('hero', '172');
} else {
	$hero = get_field('hero');
}
if ($hero['background_image']) {
	$img = $hero['background_image'];
	$bg = $img['url'];
} else {
	$bg = get_stylesheet_directory_uri() . '/img/default_hero_bg.png';
} ?>
<section class = "hero mb-4<?php if ( is_page_template( array ('templates/classroom-solutions.php', 'templates/clinical-solutions.php', 'templates/international-solutions.php') ) ) { echo ' lg-hero'; } ?>" style = "background: url('<?php echo $bg; ?>'); ">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="content-container">
					<h1 class = "title">
						<?php if ( is_singular('case-study') ) {
						echo 'International Solutions'; } else {
							echo $hero['header'];
						} ?></h1>
					<?php if( $hero['copy'] ): ?>
						<p><?php echo $hero['copy']; ?></p>
					<?php endif; ?>		
				</div><!-- .content-container -->
			</div><!-- .col-sm-12 -->
		</div><!-- .row -->
	</div><!-- .container -->	
</section><!-- .hero -->