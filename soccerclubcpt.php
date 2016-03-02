<?php
/**
 * @package Hello_Dolly
 * @version 1.6
 */
/*
Plugin Name: SoccerClub Custom Post Types
Plugin URI: http://0effortthemes.com/
Description: Creates the necessary post types for SoccerClub theme.
Author: Itobuz Technologies
Version: 1.0
Author URI: http://0effortthemes.com/
*/
require_once('classes/soccerclubcptclass.php');

if(class_exists('SoccerClubCPTClass'))
{
	$post_type_details = array(
		'team' => array(
			'labels' => array(
				'name' => esc_html_x( 'Teams', 'soccerclub' ),
				'singular_name' => esc_html_x( 'Team', 'soccerclub' ),
				'add_new' => esc_html_x( 'Add New', 'soccerclub' ),
				'add_new_item' => esc_html_x( 'Add New Team', 'soccerclub' ),
				'edit_item' => esc_html_x( 'Edit Team', 'soccerclub' ),
				'new_item' => esc_html_x( 'New Team', 'soccerclub' ),
				'view_item' => esc_html_x( 'View Teams', 'soccerclub' ),
				'search_items' => esc_html_x( 'Search Teams', 'soccerclub' ),
				'not_found' => esc_html_x( 'No Teams found', 'soccerclub' ),
				'not_found_in_trash' => esc_html_x( 'No Teams found in Trash', 'soccerclub' ),
				'menu_name' => esc_html_x( 'Teams', 'soccerclub' ),
			),
			'args' => array(
				'labels' 				=> array(),
				'public' 				=> true,
				'publicly_queryable' 	=> true,
				'show_ui' 				=> true,
				'query_var' 			=> true,
				//'rewrite' 				=> apply_filters( 'sp_feature_posttype_rewrite_args', array( 'slug' => 'feature', 'with_front' => false ) ),
				'capability_type' 		=> 'post',
				'hierarchical' 			=> false,
				'menu_position' 		=> null,
				'exclude_from_search'	=> true,
				'menu_icon'				=> 'dashicons-admin-generic',
				'has_archive' 			=> true,
				'supports' 				=> array( 'title','editor')
			)
		),
		'event' => array(
			'labels' => array(
				'name' => esc_html_x( 'Events', 'soccerclub' ),
				'singular_name' => esc_html_x( 'Event', 'soccerclub' ),
				'add_new' => esc_html_x( 'Add New', 'soccerclub' ),
				'add_new_item' => esc_html_x( 'Add New Event', 'soccerclub' ),
				'edit_item' => esc_html_x( 'Edit Event', 'soccerclub' ),
				'new_item' => esc_html_x( 'New Event', 'soccerclub' ),
				'view_item' => esc_html_x( 'View Events', 'soccerclub' ),
				'search_items' => esc_html_x( 'Search Events', 'soccerclub' ),
				'not_found' => esc_html_x( 'No Events found', 'soccerclub' ),
				'not_found_in_trash' => esc_html_x( 'No Events found in Trash', 'soccerclub' ),
				'menu_name' => esc_html_x( 'Events', 'soccerclub' ),
			),
			'args' => array(
				'labels' 				=> array(),
				'public' 				=> true,
				'publicly_queryable' 	=> true,
				'show_ui' 				=> true,
				'query_var' 			=> true,
				//'rewrite' 				=> apply_filters( 'sp_feature_posttype_rewrite_args', array( 'slug' => 'feature', 'with_front' => false ) ),
				'capability_type' 		=> 'post',
				'hierarchical' 			=> false,
				'menu_position' 		=> null,
				'exclude_from_search'	=> true,
				'menu_icon'				=> 'dashicons-admin-generic',
				'has_archive' 			=> true,
				'supports' 				=> array( 'title','editor')
			)
		),
	);
	
	$SoccerClubCPTObj = new SoccerClubCPTClass($post_type_details);
	
	
}