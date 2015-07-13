<?php
/*
Plugin Name: Starry ASSETS: POST TYPES AND SHORTCODES
Plugin URI: http://themeforest.net
Description: Declares a plugin that will create all the custom post types and some inline shortcode for STARRY
Version: 1.0
Author: 2F
Author URI: http://themeforest.net/user/2Fwebd
License: GPLv2
*/
/**
 * Define custom posts and taxonomies
 */

/**
 * Register a PORTFOLIO post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
add_action( 'init', 'create_portfolio_type' );

function create_portfolio_type() {

	$labels = array(
		'name'               => __( 'Portfolio', 'starry' ),
		'singular_name'      => __( 'Project', 'starry' ),
		'menu_name'          => __( 'Portfolio', 'starry' ),
		'name_admin_bar'     => __( 'Project', 'starry' ),
		'add_new'            => __( 'Add New', 'starry' ),
		'new_item'           => __( 'Preoject', 'starry' ),
		'edit_item'          => __( 'Edit Project', 'starry' ),
		'view_item'          => __( 'View Project', 'starry' ),
		'all_items'          => __( 'All Projects', 'starry' ),
		'search_items'       => __( 'Search Project', 'starry' ),
		'not_found'          => __( 'No Project found.', 'starry' ),
		'not_found_in_trash' => __( 'No Project found in Trash.', 'starry' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'menu_icon' => 'dashicons-portfolio',
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'excerpt','thumbnail'  )
	);

	register_post_type( 'portfolio', $args );

	$labels = array(
		'name'              => __( 'Portfolio Categories', 'starry' ),
		'singular_name'     => __( 'Portfolio Category', 'starry' ),
		'search_items'      => __( 'Search Portfolio Categories', 'starry' ),
		'all_items'         => __( 'All Portfolio Categories', 'starry' ),
		'edit_item'         => __( 'Edit Category', 'starry' ),
		'update_item'       => __( 'Update Portfolio Category', 'starry' ),
		'add_new_item'      => __( 'Add New Portfolio Category', 'starry' ),
		'new_item_name'     => __( 'New Portfolio Category', 'starry' ),
		'menu_name'         => __( 'Categories', 'starry' ),
	);

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolio-category' ),
	);

	register_taxonomy( 'portfolio-category', array( 'portfolio' ), $args );

	flush_rewrite_rules();

}

/**
 * Register a TEAM post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
add_action( 'init', 'create_team_type' );

function create_team_type() {

	$labels = array(
		'name'               => __( 'Team', 'starry' ),
		'singular_name'      => __( 'Teammate', 'starry' ),
		'menu_name'          => __( 'Team', 'starry' ),
		'name_admin_bar'     => __( 'Teammate', 'starry' ),
		'add_new'            => __( 'Add New', 'starry' ),
		'add_new_item'       => __( 'Teammate', 'starry' ),
		'new_item'           => __( 'Teammate', 'starry' ),
		'edit_item'          => __( 'Edit Teammate', 'starry' ),
		'view_item'          => __( 'View team members', 'starry' ),
		'all_items'          => __( 'All Teammates', 'starry' ),
		'search_items'       => __( 'Search Teammate', 'starry' ),
		'not_found'          => __( 'No Teammate found.', 'starry' ),
		'not_found_in_trash' => __( 'No Teammate found in Trash.', 'starry' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'menu_icon' => 'dashicons-groups',
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'team' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'excerpt','thumbnail'  )
	);

	register_post_type( 'team', $args );

	$labels = array(
		'name'              => __( 'Team Categories', 'starry' ),
		'singular_name'     => __( 'Team Category', 'starry' ),
		'search_items'      => __( 'Search Team Categories', 'starry' ),
		'all_items'         => __( 'All Team Categories', 'starry' ),
		'edit_item'         => __( 'Edit Category', 'starry' ),
		'update_item'       => __( 'Update Skill Team', 'starry' ),
		'add_new_item'      => __( 'Add New Team Category', 'starry' ),
		'new_item_name'     => __( 'New Team Category', 'starry' ),
		'menu_name'         => __( 'Categories', 'starry' ),
	);

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'team-category' ),
	);

	register_taxonomy( 'team-category', array( 'team' ), $args );

	flush_rewrite_rules();
}

/**
 * Register a PARTNERS post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
add_action( 'init', 'create_partners_type' );

function create_partners_type() {

	$labels = array(
		'name'               => __( 'Partners', 'starry' ),
		'singular_name'      => __( 'Partner', 'starry' ),
		'menu_name'          => __( 'Partners', 'starry' ),
		'name_admin_bar'     => __( 'Partner', 'starry' ),
		'add_new'            => __( 'Add New', 'starry' ),
		'new_item'           => __( 'Partner', 'starry' ),
		'edit_item'          => __( 'Edit Partner', 'starry' ),
		'view_item'          => __( 'View Partner', 'starry' ),
		'all_items'          => __( 'All Partners', 'starry' ),
		'search_items'       => __( 'Search Partner', 'starry' ),
		'not_found'          => __( 'No Partner found.', 'starry' ),
		'not_found_in_trash' => __( 'No Partner found in Trash.', 'starry' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'menu_icon' => 'dashicons-networking',
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'partners' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail'  )
	);

	register_post_type( 'partners', $args );

}

/**
 * Register a SKILL post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
add_action( 'init', 'create_skills_type' );

function create_skills_type() {

	$labels = array(
		'name'               => __( 'Skills', 'starry' ),
		'singular_name'      => __( 'Skill', 'starry' ),
		'menu_name'          => __( 'Skills', 'starry' ),
		'name_admin_bar'     => __( 'Skill', 'starry' ),
		'add_new'            => __( 'Add New', 'starry' ),
		'new_item'           => __( 'Skill', 'starry' ),
		'edit_item'          => __( 'Edit Skill', 'starry' ),
		'view_item'          => __( 'View Skill', 'starry' ),
		'all_items'          => __( 'All Skills', 'starry' ),
		'search_items'       => __( 'Search Skill', 'starry' ),
		'not_found'          => __( 'No Skill found.', 'starry' ),
		'not_found_in_trash' => __( 'No Skill found in Trash.', 'starry' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'menu_icon' => 'dashicons-awards',
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'skills' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor'  )
	);

	register_post_type( 'skills', $args );

	$labels = array(
		'name'              => __( 'Skills Categories', 'starry' ),
		'singular_name'     => __( 'Skill Category', 'starry' ),
		'search_items'      => __( 'Search Skills Categories', 'starry' ),
		'all_items'         => __( 'All Skills Categories', 'starry' ),
		'edit_item'         => __( 'Edit Category', 'starry' ),
		'update_item'       => __( 'Update Skill Category', 'starry' ),
		'add_new_item'      => __( 'Add New Skill Category', 'starry' ),
		'new_item_name'     => __( 'New Skill Category', 'starry' ),
		'menu_name'         => __( 'Categories', 'starry' ),
	);

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'skills-category' ),
	);

	register_taxonomy( 'skills-category', array( 'skills' ), $args );

	flush_rewrite_rules();

}

/**
 * ADD INLINE SHORTCODE TO THE EDITOR
 * @internal
 */
/* DROPCAP */
function dropcaps($atts, $content = null) {
    return '<span class="dropcap">' . do_shortcode($content) . '</span>';
}
add_shortcode('dropcap', 'dropcaps');
/* HIGHLIGHT */
function highlights($atts, $content = null) {
    return '<span class="surline">' . do_shortcode($content) . '</span>';
}
add_shortcode('highlight', 'highlights'); 
/* ADD SHORTCODES TO EDITOR BAR */
add_action('media_buttons','add_sc_select',11);
function add_sc_select(){
    global $shortcode_tags;
    /** Any Shortcodes that should be excluded from this list should be added below */
    $exclude = array("wp_caption", "embed");
    echo '<select id="sc_select">
    <option>Insert inline shortcode...</option>';
    echo '<option value="[highlight][/highlight]">Highlight: [highlight]YourContent[/highlight]</option>';
    echo '<option value="[dropcap][/dropcap]">Dropcap: [dropcap]L[/dropcap]</option>';
    echo '</select>';
}
add_action('admin_head', 'button_js');
function button_js() {
    echo '<script type="text/javascript">
		    jQuery(document).ready(function(){
		        jQuery("#sc_select").change(function() {
		            window.send_to_editor(jQuery("#sc_select :selected").val());
		                return false;
		        });
		    });
		  </script>';
}
?>