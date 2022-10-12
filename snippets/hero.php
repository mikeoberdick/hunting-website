<?php $hero = get_field('hero'); $bg = $hero['background_image']; ?>
<section class = "hero" style = "background: url('<?php echo $bg['url']; ?>'); ">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="content-wrapper offset-left offset-right w-50">
					<h3 class = "mb-2 yellow sofia"><?php echo $hero['subtitle']; ?></h3>
					<h1 class = "title text-white oswald"><?php echo $hero['title']; ?> </h1>
					<?php if( $hero['button'] == 'yes' ): ?>
						<a href = "<?php echo $hero['button_link']; ?>"><button role = "button" class = "btn"><?php echo $hero["button_text"]; ?></button></a>
					<?php endif; ?>		
				</div><!-- .content-container -->
			</div><!-- .col-sm-12 -->
		</div><!-- .row -->
	</div><!-- .container -->	
</section><!-- .hero -->