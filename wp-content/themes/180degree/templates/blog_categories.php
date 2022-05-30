<?php $orig_post = $post;
global $post;
$categories = get_the_category($post->ID);
if ($categories) {
	$category_ids = array();
	foreach ($categories as $individual_category) {
		$category_ids[] = $individual_category->term_id;
	}

	$args = array(
		'post_type' => 'post',
		'category__in' => implode(',', $category_ids),
		'post__not_in' => array($post->ID),
		'posts_per_page' => 3, // Number of related posts that will be shown.
	);

	$my_query = new wp_query($args);
	if ($my_query->have_posts()) {
		echo '<div class="side-card col-md-3 col-xs-12"><h4>YOU MAY ALSO LIKE</h4><ul>';
		while ($my_query->have_posts()) {
			$my_query->the_post(); ?>


            <li>
                <div class="s-img">
                    <img src="<?= get_field('image_post'); ?>" alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="s-data">
                    <h5><?php echo get_the_date(); ?></h5>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
            </li>


			<?php
		}
		echo '</ul></div>';
	}
}
$post = $orig_post;
wp_reset_query();
?>