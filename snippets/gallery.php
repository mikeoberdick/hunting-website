<?php $images = get_field('gallery'); ?>
<div class="gallery-wrapper">
    <?php foreach( $images as $image ) : ?>
        <img class = "gallery-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endforeach; ?>    
</div><!-- .gallery-wrapper -->