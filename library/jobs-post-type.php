<?php
// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );
// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}
// let's create the function for the custom type
function custom_post_type() { 
	// creating (registering) the custom type 
	register_post_type( 'jobs', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Jobs', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Job', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Jobs', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Job', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Job', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Job', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Job', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Jobs', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Jobs Listings', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'job', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => false, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail', 'revisions')
		) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type( 'category', 'jobs_cat' );
	
}
	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_type');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
	register_taxonomy( 'jobs_cat', 
		array('jobs'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'Jobs Categories', 'bonestheme' ), /* name of the custom taxonomy */
				'singular_name' => __( 'Job Category', 'bonestheme' ), /* single taxonomy name */
				'search_items' =>  __( 'Search Jobs Categories', 'bonestheme' ), /* search title for taxomony */
				'all_items' => __( 'All Jobs Categories', 'bonestheme' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent Jobs Category', 'bonestheme' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent Jobs Category:', 'bonestheme' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit Jobs Category', 'bonestheme' ), /* edit custom taxonomy title */
				'update_item' => __( 'Update Jobs Category', 'bonestheme' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Jobs Category', 'bonestheme' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Jobs Category Name', 'bonestheme' ) /* name title for taxonomy */
			),
			'show_admin_column' => true, 
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'jobs-cat' ),
		)
	);
?>