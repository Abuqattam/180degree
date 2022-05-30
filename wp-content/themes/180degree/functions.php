<?php
function add_styles_to_theme()
{


	wp_enqueue_style('Mash_style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');

	wp_enqueue_style('Mash_style2', get_template_directory_uri() . '/assets/css/style-res.css', array(), '1.0.0', 'all');



	wp_enqueue_script('Mash1', get_template_directory_uri() . '/assets/js/jquery-2.2.2.min.js', array(), '1.0', false);
	wp_enqueue_script('Mash2', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0', false);
	wp_enqueue_script('Mash4', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), '1.0', false);
	wp_enqueue_script('Mash3', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0', false);
	wp_enqueue_script('Mash11', get_template_directory_uri() . '/assets/js/aos.js', array(), '1.0', false);
	wp_enqueue_script('vid', get_template_directory_uri() . '/assets/js/jquery.vide.min.js', array(), '1.0', false);
	wp_enqueue_script('notic', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), '1.0', false);
	wp_enqueue_script('niceselect', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array(), '1.0', false);
	wp_enqueue_script('Mash12', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', false);

}

add_action('wp_enqueue_scripts', 'add_styles_to_theme');




function degree_features()
{
	/*Header menu */
	register_nav_menu('main_location', 'Main_Location');
	/*footer menu */
	register_nav_menu('footer_location', 'Footer_Location');	
}
add_action('after_setup_theme', 'degree_features');


/*custom posts*/
function tech_post_types()
{



	//Services
	register_post_type('services', array(
		'show_in_rest' => true,
		'supports' => array('title', 'editor','thumbnail','excerpt'),
		'rewrite' => array('slug' => 'service'),
		'has_archive' => true, 'public' => true,
		'labels' => array('name' => 'Services',
						  'add_new_item' => 'Add New Service',
						  'edit_item' => 'Edit Service',
						  'all_items' => 'All Services',
						  'singular_name' => 'Service'
						 ),
		'menu_icon' => 'dashicons-image-filter'
	));




	register_post_type('courses', array(
		'show_in_rest' => true,
		'supports' => array('title', 'editor','thumbnail','excerpt','comments'),
		'rewrite' => array('slug' => 'course-page'),
		'has_archive' => true, 'public' => true,

		'labels' => array('name' => 'Courses',
						  'add_new_item' => 'Add New Course',
						  'edit_item' => 'Edit Course',
						  'all_items' => 'All Courses',
						  'singular_name' => 'Courses'
						 ),
		'menu_icon' => 'dashicons-embed-video'
	));
    
	 
	register_post_type('vlogs', array(
		'show_in_rest' => true,
		'supports' => array('title', 'editor','thumbnail'),
		'rewrite' => array('slug' => 'course'),
		'has_archive' => true, 'public' => true,

		'labels' => array('name' => 'Vlogs',
						  'add_new_item' => 'Add New Vlog',
						  'edit_item' => 'Edit Vlog',
						  'all_items' => 'All Vlogs',
						  'singular_name' => 'Vlogs'
						 ),
		'menu_icon' => 'dashicons-video-alt2
'
	));
	
	
	
	
	
	
	register_post_type('testimonals', array(
		'show_in_rest' => true,
		'supports' => array('title', 'editor',),
		'rewrite' => array('slug' => 'testimonal'),
		'has_archive' => true, 'public' => true,
		'labels' => array('name' => 'Testimonals',
						  'add_new_item' => 'Add New Review',
						  'edit_item' => 'Edit Review',
						  'all_items' => 'All Reviews',
						  'singular_name' => 'Testimonal'
						 ),
		'menu_icon' => 'dashicons-testimonial'
	));
	
		register_post_type('customers', array(
		'show_in_rest' => true,
		'supports' => array('title', 'editor','thumbnail'),
		'rewrite' => array('slug' => 'client'),
		'has_archive' => true, 'public' => true,
		'labels' => array('name' => 'Clients',
						  'add_new_item' => 'Add New Client',
						  'edit_item' => 'Edit Client',
						  'all_items' => 'All Clients',
						  'singular_name' => 'Client'
						 ),
		'menu_icon' => 'dashicons-universal-access'
	));
	

}

add_action('init', 'tech_post_types');


acf_add_options_page(array(
	'page_title' => 'Theme options',
	'menu_title' => 'Theme options',
	'menu_slug' => 'theme_options',
	'capability' => 'edit_posts',
	'redirect' => false
));


//Shortcodes

function banner()
{
	ob_start();
	get_template_part('templates/banner');
	return ob_get_clean();
}

add_shortcode('banner_temp', 'banner');

function services_blocks()
{
	ob_start();
	get_template_part('templates/services_blocks');
	return ob_get_clean();
}

add_shortcode('services_blocks_temp', 'services_blocks');

function services()
{
	ob_start();
	get_template_part('templates/services');
	return ob_get_clean();
}

add_shortcode('services_temp', 'services');


function courses()
{
	ob_start();
	get_template_part('templates/courses');
	return ob_get_clean();
}

add_shortcode('courses_temp', 'courses');

function testimonals()
{
	ob_start();
	get_template_part('templates/testimonals');
	return ob_get_clean();
}

add_shortcode('testimonals_temp', 'testimonals');

function blog()
{
	ob_start();
	get_template_part('templates/blog');
	return ob_get_clean();
}

add_shortcode('blog_temp', 'blog');


function contact()
{
	ob_start();
	get_template_part('templates/contact');
	return ob_get_clean();
}

add_shortcode('contact_temp', 'contact');

function blog_all()
{
	ob_start();
	get_template_part('templates/blog_all');
	return ob_get_clean();
}

add_shortcode('blog_all_temp', 'blog_all');


function blog_inner_banner()
{
	ob_start();
	get_template_part('templates/blog_inner_banner');
	return ob_get_clean();
}

add_shortcode('blog_inner_banner_temp', 'blog_inner_banner');


function blog_categories()
{
	ob_start();
	get_template_part('templates/blog_categories');
	return ob_get_clean();
}

add_shortcode('blog_categories_temp', 'blog_categories');



function side_part_inner_course()
{
	ob_start();
	get_template_part('templates/side_part_inner_course');
	return ob_get_clean();
}

add_shortcode('side_part_inner_course_temp', 'side_part_inner_course');


function more_courses()
{
	ob_start();
	get_template_part('templates/more_courses');
	return ob_get_clean();
}

add_shortcode('more_courses_temp', 'more_courses');


function courses_page()
{
	ob_start();
	get_template_part('templates/courses_page');
	return ob_get_clean();
}

add_shortcode('courses_page_temp', 'courses_page');



function course_rating()
{
	ob_start();
	get_template_part('templates/course_rating');
	return ob_get_clean();
}

add_shortcode('course_rating_temp', 'course_rating');



function vlogs()
{
	ob_start();
	get_template_part('templates/vlogs');
	return ob_get_clean();
}

add_shortcode('vlogs_temp', 'vlogs');


function clients()
{
	ob_start();
	get_template_part('templates/clients');
	return ob_get_clean();
}

add_shortcode('clients_temp', 'clients');

function breadcrumb()
{
	ob_start();
	get_template_part('templates/breadcrumb');
	return ob_get_clean();
}

add_shortcode('breadcrumb_temp', 'breadcrumb');



function early_bird()
{
	ob_start();
	get_template_part('templates/early_bird');
	return ob_get_clean();
}

add_shortcode('early_bird_temp', 'early_bird');



function public_courses_what_we_do()
{
	ob_start();
	get_template_part('templates/public_courses_what_we_do');
	return ob_get_clean();
}

add_shortcode('public_courses_what_we_do_temp', 'public_courses_what_we_do');
// blog nav 


function wpdocs_add_post_link_next( $html ){
	$html = str_replace( '<a ', '<a class="next" ', $html );
	return $html;
}
add_filter( 'next_post_link', 'wpdocs_add_post_link_next' );

function wpdocs_add_post_link_prev( $html ){
	$html = str_replace( '<a ', '<a class="prev" ', $html );
	return $html;
}
add_filter( 'previous_post_link', 'wpdocs_add_post_link_prev' );


//Courses Taxonomy 
function courses_taxonomy() {
	register_taxonomy(
		'Courses',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'courses',             // post type name
		array(

			'hierarchical' => true,
			'label' => 'Categories', // display name
			'query_var' => true,
			'rewrite' => array(
				'slug' => 'cat'   // This controls the base slug that will display before each term

			)
		)
	);
}
add_action( 'init', 'courses_taxonomy');








