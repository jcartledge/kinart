<?php
/**
 * @package kinart
 */

$category = array_pop( get_the_category() );
?>
<a href="<?php echo get_category_link( $category->term_id ); ?>" class="category-title">
  <i class="fa fa-angle-left"></i>
  <?php echo $category->name; ?>
</a>
<?php get_template_part( 'template-parts/project_list' );

