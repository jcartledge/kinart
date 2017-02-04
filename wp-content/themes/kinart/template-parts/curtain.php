<?php
require_once dirname( __FILE__ ) . '/../inc/colour-pairs.inc.php';
$colours = front_page_colour_pairs();
$pair = end( $colours );
reset( $colours );
?>
<div class="curtain">
	<div
		class="curtain__foreground"
		style="background-color: <?php echo $pair['fg']; ?>"></div>
	<svg
		class="curtain__background"
		version="1.1" xmlns="http://www.w3.org/2000/svg">
		<polygon
			points="3000 0, 3000 2000, 0 2000"
			stroke="none"
			style="fill: <?php echo $pair['bg']; ?>" />
	</svg>
	<script>
		window.colourPairs = <?php echo json_encode($colours); ?>;
	</script>
</div>
