<?php
/**
 * @package kinart
 */

$category = get_the_category()[0];
$projects = get_posts([
	'posts_per_page' => -1,
	'category_name' => $category->name,
	'post_type' => 'project',
]);
$ids = implode(',', array_map(function($project) {
	return $project->ID;
}, $projects));
$args = [
	'include' => $ids,
	'post_type' => 'project',
	'title_li' => '',
];
?>
<ul class="project-list menu">
<?php wp_list_pages( $args ); ?>
</ul>
