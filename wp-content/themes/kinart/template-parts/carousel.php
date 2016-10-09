<?php
/**
 * @package kinart
 */

$slides = get_attached_media( 'image' );

?>
<div class="carousel">
	<div class="carousel__container">
		<?php foreach ( $slides as $slide ) : ?>
			<div class="carousel__slide">
				<?php echo wp_get_attachment_image( $slide->ID, [ 900, 600 ], false, ['class' => 'carousel__image'] ); ?>
			</div>
		<?php endforeach; ?>
	</div>
	<?php if ( count( $slides ) ) : ?>
		<div class="carousel__pagination">
			<span class="carousel__prev">&lsaquo;</span>
			<span class="carousel__current">1</span>
			of
			<span class="carousel__total"><?php echo count($slides); ?></span>
			<span class="carousel__next">&rsaquo;</span>
		</div>
	<?php endif; ?>
</div>