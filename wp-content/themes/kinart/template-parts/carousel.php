<?php
/**
 * @package kinart
 */

$slides = get_post_meta( $post->ID, 'image', false );

?>
<div class="carousel">
	<div class="carousel__container">
		<?php foreach ( $slides as $slide ) : ?>
			<div class="carousel__slide">
				<?php echo wp_get_attachment_image( $slide['ID'], [ 900, 600 ], false, ['class' => 'carousel__image'] ); ?>
			</div>
		<?php endforeach; ?>
	</div>
	<?php if ( count( $slides ) ) : ?>
		<div class="carousel__pagination">
			<span class="carousel__prev"><i class="fa fa-angle-left"></i></span>
			<span class="carousel__current">1</span>
			/
			<span class="carousel__total"><?php echo count($slides); ?></span>
			<span class="carousel__next"><i class="fa fa-angle-right"></i></span>
		</div>
	<?php endif; ?>
</div>
