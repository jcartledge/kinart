<?php
/**
 * @package kinart
 */

$category = array_pop( get_the_category() );
?>
<a href="/#shownav" class="category-title">
  <?php echo $category->name; ?>
</a>
<?php get_template_part( 'template-parts/project_list' );

