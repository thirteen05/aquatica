<?php

@ini_set( ‘upload_max_size’ , ‘1024M’ );
@ini_set( ‘post_max_size’, ‘1024M’);
@ini_set( ‘max_execution_time’, ‘1000’ );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

add_theme_support( 'post-thumbnails' );

add_action( 'init', 'cpt_floor_plan_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function cpt_floor_plan_init() {
	$labels = array(
		'name'               => _x( 'Floor Plans', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Floor Plan', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Floor Plans', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Floor Plan', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'floor-plan', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Floor Plan', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Floor Plan', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Floor Plan', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Floor Plan', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Floor Plans', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Floor Plans', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Floor Plans:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No floor plans found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No floor plans found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'floor-plan' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
	);

	register_post_type( 'floor-plan', $args );
}

include 'metabox/metabox_floor_plans.php';

function get_bedrooms_number( $bedroom_val ){  
  
  switch ($bedroom_val) {
      case "bedrooms1":
          return "1";
          break;
      case "bedrooms2":
          return "2";
          break;
      case "bedrooms3":
          return "3";
          break;
      case "bedrooms4":
          return "4";
          break;
      case "bedrooms5":
          return "5";
          break;
      default:
          echo "";
  }
}

function get_bathrooms_number( $bathroom_val ){  
  
  switch ($bathroom_val) {
      case "bathrooms1":
          return "1";
          break;
      case "bathrooms1half":
          return "1 1/2";
          break;
      case "bathrooms2":
          return "2";
          break;
      case "bathrooms2half":
          return "2 1/2";
          break;
      case "bathrooms3":
          return "3";
          break;
      case "bathrooms3half":
          return "3 1/2";
          break;
      case "bathrooms4":
          return "4";
          break;
      case "bathrooms4half":
          return "4 1/2";
          break;
      case "bathrooms5":
          return "5";
          break;
      case "bathrooms5half":
          return "5 1/2";
          break;
      default:
          echo "";
  }
}

?>