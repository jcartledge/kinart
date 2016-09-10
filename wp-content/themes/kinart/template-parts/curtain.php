<?php
require_once dirname( __FILE__ ) . '/../inc/colour-pairs.inc.php';
$colours = front_page_colour_pair();
?>
<div class="curtain">
	<div
		class="curtain__foreground"
		style="background-color: <?php echo $colours->raw( 'foreground_colour' ); ?>"></div>
	<svg
		class="curtain__background"
		version="1.1" xmlns="http://www.w3.org/2000/svg">
		<polygon
			points="3000 0, 3000 2000, 0 2000"
			stroke="none"
			fill="<?php echo $colours->raw( 'background_colour' ); ?>" />
	</svg>
</div>
