<?php $hero = get_field('hero'); ?>
<section class = "hero" style = "background: url('<?php echo $bg; ?>'); ">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="content-container">
					<h1 class = "title">
						<?php if ( is_singular('case-study') ) {
						echo 'International Solutions'; } else {
							echo $hero['header'];
						} ?></h1>
					<?php if( $hero['button_text'] && $hero['button_link'] ): ?>
						<a href = "<?php echo $hero['button_link']; ?>"><button role = "button" class = "btn"><?php echo $hero["button_text"]; ?></button></a>
					<?php endif; ?>		
				</div><!-- .content-container -->
			</div><!-- .col-sm-12 -->
		</div><!-- .row -->
	</div><!-- .container -->	
</section><!-- .hero -->