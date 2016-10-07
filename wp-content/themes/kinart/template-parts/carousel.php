<?php
/**
 * @package kinart
 */

$slides = get_attached_media( 'image' );

?>
<!-- Slider main container -->
<div class="swiper-container">
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">
		<!-- Slides -->
		<?php foreach ( $slides as $slide ) : ?>
			<div class="swiper-slide">
				<?php echo wp_get_attachment_image( $slide->ID, 'carousel' ); ?>
			</div>
		<?php endforeach; ?>
	</div>
	<!-- If we need pagination -->
	<div class="swiper-pagination"></div>

	<!-- If we need navigation buttons -->
	<div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div>

	<!-- If we need scrollbar -->
	<div class="swiper-scrollbar"></div>
</div>
