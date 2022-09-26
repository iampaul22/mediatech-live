<?php
/**
 * Plugin Name: BuddyPress Analytics Lite by Dessky
 * Plugin URI:  https://dessky.com
 * Description: Analytics plugin for BuddyPress. This is lite version of the premium BuddyPress Analytics plugin.
 * Author:      Dessky
 * Version:     1.0.2
 * Author URI:  https://dessky.com
 * Network:     false
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) die;

// Consts
if(!defined('BPA_VERSION'))
    define('BPA_VERSION', '1.0.2');

   
// Install analytics tables
function bpa_databases_install() {
    
    global $wpdb;
    $bpa_db_version = "1.0";
    $collate = '';

    if ( $wpdb->has_cap( 'collation' ) ) {
		if( ! empty($wpdb->charset ) )
			$collate .= "DEFAULT CHARACTER SET $wpdb->charset";
		if( ! empty($wpdb->collate ) )
			$collate .= " COLLATE $wpdb->collate";
    }
    
    $sql = "
    CREATE TABLE {$wpdb->prefix}bpa_query (
    query_id bigint(20) NOT NULL auto_increment,
    query tinytext NOT NULL,
    count int(12) NOT NULL DEFAULT 1,
    PRIMARY KEY (query_id)
    ) $collate;
    CREATE TABLE {$wpdb->prefix}bpa_query_history (
    id bigint(20) NOT NULL auto_increment,
    query_id bigint(20) NOT NULL,
    user int(12) NOT NULL DEFAULT 0,
    ip tinytext NOT NULL,
    time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
    ) $collate;
    CREATE TABLE {$wpdb->prefix}bpa_users (
    id bigint(20) NOT NULL auto_increment,
    user_id bigint(20) NOT NULL,
    count int(12) NOT NULL DEFAULT 1,
    PRIMARY KEY (id)
    ) $collate;
    CREATE TABLE {$wpdb->prefix}bpa_page (
    id bigint(20) NOT NULL auto_increment,
    page_id bigint(20) NOT NULL,
    count int(12) NOT NULL DEFAULT 1,
    PRIMARY KEY (id)
    ) $collate;
    CREATE TABLE {$wpdb->prefix}bpa_group (
    id bigint(20) NOT NULL auto_increment,
    group_id bigint(20) NOT NULL,
    statistic_id bigint(20) NOT NULL,
    PRIMARY KEY (id)
    ) $collate;
    CREATE TABLE {$wpdb->prefix}bpa_visits (
    id bigint(20) NOT NULL auto_increment,
    user_id bigint(20) NOT NULL,
    page_id bigint(20) NOT NULL,
    ip tinytext NOT NULL,
    time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
    ) $collate;
    CREATE TABLE {$wpdb->prefix}bpa_time_spent (
    id bigint(20) NOT NULL auto_increment,
    user_id bigint(20) NOT NULL,
    page_id bigint(20) NOT NULL,
    ip tinytext NOT NULL,
    spent bigint(200) NOT NULL,
    time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
    ) $collate;
    ";
    
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
    
    add_option( "bpa_db_version", $bpa_db_version );
    
    if ( ! get_option('site_visitor_counter') )
	
	update_option( 'site_visitor_counter', 1 );
}
register_activation_hook( __FILE__, 'bpa_databases_install' );    
    
// On BuddyPress init, so wil not loaded at all without BP
add_action('bp_init', 'bpa_load');
function bpa_load(){
    // Smth I want to see only in wp-admin area
    if ( is_admin() && (is_super_admin() || is_network_admin()) ){
        // The main functionality
        include(dirname(__FILE__) . '/includes/bpa-core.php');

        // include the core
        include(dirname(__FILE__) . '/includes/bpa-admin.php');
        include(dirname(__FILE__) . '/includes/bpa-cssjs.php');
        
        // Check update
        include(dirname(__FILE__) . '/includes/bpa-update.php');

        // i18n support
        load_plugin_textdomain( 'bpa', false, dirname( plugin_basename( __FILE__ ) ) . '/langs/' );
    }
    
}

function analytics_load() {
    
    // chart functions
    include(dirname(__FILE__) . '/includes/bpa-chart.php');
}
add_action('init', 'analytics_load');
?>