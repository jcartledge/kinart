<?php
/**
 * @package kinart
 */

$category = array_pop( get_the_category() );
?>
<p class="page-title category-title">&lsaquo; <?php echo $category->name; ?></p>
<?php get_template_part( 'template-parts/project_list' );

