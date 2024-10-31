<?php
/*
Plugin Name: Post Admin Social Stats
Plugin URI: http://gearsidecreative.com/post-admin-social-stats
Description: Add social stats to the Edit Post page of the Wordpress admin.
Version: 1.0.6
Author: Chris Blakley
Author URI: http://gearside.com
License: GPL2
*/
/*
Copyright 2013  Chris Blakley  (email : chris@gearside.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if(!class_exists('Post_Admin_Social_Stats'))
{
	class Post_Admin_Social_Stats
	{   
		/**
		 * Activate the plugin
		 */
		public static function activate()
		{
			// Do nothing
		} // END public static function activate
	
		/**
		 * Deactivate the plugin
		 */		
		public static function deactivate()
		{
			// Do nothing
		} // END public static function deactivate
	} // END class Post_Admin_Social_Stats
} // END if(!class_exists('Post_Admin_Social_Stats'))

if(class_exists('Post_Admin_Social_Stats'))
{
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('Post_Admin_Social_Stats', 'activate'));
	register_deactivation_hook(__FILE__, array('Post_Admin_Social_Stats', 'deactivate'));

	// instantiate the plugin class
	$Post_Admin_Social_Stats = new Post_Admin_Social_Stats();	
	
	add_action( 'admin_enqueue_scripts', 'postAdminSocialStatsStyle' );
	function postAdminSocialStatsStyle() {
		wp_enqueue_style( 'post-admin-social-stats-style', plugins_url('style.css', __FILE__) );
	}
	
	add_action( 'add_meta_boxes', 'post_meta_box' );  
	function post_meta_box() {  
	    add_meta_box( 'post-admin-social-stats', 'Social Stats', 'postAdminSocialStatsContent', 'post', 'side', 'high' );
	    add_meta_box( 'post-admin-social-stats', 'Social Stats', 'postAdminSocialStatsContent', 'page', 'side', 'high' );
	}
	function postAdminSocialStatsContent() {
		include 'postpage.php';
	}
	add_action( 'wp_dashboard_setup', 'dashboard_meta_box' );
	function dashboard_meta_box() {
		wp_add_dashboard_widget( 'post-admin-social-stats', 'Social Stats', 'dashboardAdminSocialStatsContent' );
	}
	function dashboardAdminSocialStatsContent() {
		include 'dashboard.php';
	}
			
}