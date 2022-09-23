<?php
/**
 * Zoom integration filters
 *
 * @package BuddyBoss\Zoom
 * @since 1.0.4
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_filter( 'bbp_pro_core_install', 'bp_zoom_pro_core_install_zoom_integration' );
add_filter( 'bbp_pro_update_to_1_0_4', 'bp_zoom_pro_update_to_1_0_4' );
add_action( 'bbp_pro_update_to_1_0_7', 'bp_zoom_pro_update_to_1_0_7' );
add_action( 'bp_init', 'bp_zoom_pro_has_access_meeting_web', 10 );
add_action( 'bp_template_redirect', 'bp_zoom_pro_has_access_recording_url', 999999 );

/**
 * Install or upgrade zoom integration.
 *
 * @since 1.0.4
 */
function bp_zoom_pro_core_install_zoom_integration() {
	require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	$switched_to_root_blog = false;

	// Make sure the current blog is set to the root blog.
	if ( ! bp_is_root_blog() ) {
		switch_to_blog( bp_get_root_blog_id() );
		$switched_to_root_blog = true;
	}

	$sql             = array();
	$charset_collate = $GLOBALS['wpdb']->get_charset_collate();
	$bp_prefix       = bp_core_get_table_prefix();

	$sql[] = "CREATE TABLE {$bp_prefix}bp_zoom_meetings (
				id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				group_id bigint(20) NOT NULL,
				activity_id bigint(20) NOT NULL,
				user_id bigint(20) NOT NULL,
				host_id varchar(150) NOT NULL,
				type int(10) NOT NULL DEFAULT 2,
				title varchar(300) NOT NULL,
				description varchar(800) NULL,
				start_date datetime NOT NULL,
				start_date_utc datetime NOT NULL,
				timezone varchar(150) NOT NULL,
				password varchar(150) NOT NULL,
				duration int(11) NOT NULL,
				join_before_host bool DEFAULT 0,
				host_video bool DEFAULT 0,
				participants_video bool DEFAULT 0,
				mute_participants bool DEFAULT 0,
				waiting_room bool DEFAULT 0,
				meeting_authentication bool DEFAULT 0,
				recurring bool DEFAULT 0,
				auto_recording varchar(75) DEFAULT 'none',
				alternative_host_ids text NULL,
				meeting_id varchar(150) NOT NULL,
				hide_sitewide bool DEFAULT 0,
				parent varchar(150) DEFAULT 0,
				zoom_type varchar(150) DEFAULT 'meeting',
				KEY group_id (group_id),
				KEY activity_id (activity_id),
				KEY meeting_id (meeting_id)
			) {$charset_collate};";

	$sql[] = "CREATE TABLE {$bp_prefix}bp_zoom_meeting_meta (
				id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				meeting_id bigint(20) NOT NULL,
				meta_key varchar(255) DEFAULT NULL,
				meta_value longtext DEFAULT NULL,
				KEY meeting_id (meeting_id),
				KEY meta_key (meta_key(191))
			) {$charset_collate};";

	$sql[] = "CREATE TABLE {$bp_prefix}bp_zoom_recordings (
				id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				recording_id varchar(255) NOT NULL,
				meeting_id bigint(20) NOT NULL,
				uuid varchar(255) NOT NULL,
				details varchar(800) NULL,
				file_type varchar(800) NULL,
				password varchar(150) NOT NULL,
				start_time datetime NOT NULL,
				KEY recording_id (recording_id),
				KEY meeting_id (meeting_id)
			) {$charset_collate};";

	dbDelta( $sql );

	if ( $switched_to_root_blog ) {
		restore_current_blog();
	}
}

/**
 * BuddyBoss Pro zoom update to 1.0.4
 *
 * @since 1.0.4
 */
function bp_zoom_pro_update_to_1_0_4() {
	global $wpdb;
	$bp_prefix = bp_core_get_table_prefix();

	$zoom_meeting_query = "DELETE FROM {$bp_prefix}bp_zoom_recordings WHERE file_type = 'TIMELINE'";
	$wpdb->query( $zoom_meeting_query ); // phpcs:ignore WordPress.DB.DirectDatabaseQuery.DirectQuery, WordPress.DB.DirectDatabaseQuery.NoCaching, WordPress.DB.PreparedSQL.NotPrepared
}

/**
 * BuddyBoss Pro zoom update to 1.0.7
 *
 * @since 1.0.7
 */
function bp_zoom_pro_update_to_1_0_7() {
	global $wpdb;
	$bp_prefix = bp_core_get_table_prefix();

	$zoom_meeting_query = "UPDATE {$bp_prefix}bp_zoom_meetings SET hide_sitewide = 1 WHERE parent = 0 AND zoom_type = 'meeting' AND type = 8 AND recurring = 1;";
	$wpdb->query( $zoom_meeting_query ); // phpcs:ignore WordPress.DB.DirectDatabaseQuery.DirectQuery, WordPress.DB.DirectDatabaseQuery.NoCaching, WordPress.DB.PreparedSQL.NotPrepared
}

/**
 * Check user access to singular posts if recording url hit, otherwise returns 404.
 */
function bp_zoom_pro_has_access_recording_url() {
	$recording_id = filter_input( INPUT_GET, 'zoom-recording', FILTER_VALIDATE_INT );

	if ( is_singular() && ! empty( $recording_id ) && ! bp_is_group() ) {

		if ( ! apply_filters( 'bp_zoom_pro_has_access_recording_url', current_user_can( 'read', get_the_ID() ) ) ) {
			bp_do_404();

			return;
		}

		// get recording data.
		$recordings = bp_zoom_recording_get( array(), array( 'id' => $recording_id ) );

		// check if exists in the system and has meeting id.
		if ( empty( $recordings[0]->meeting_id ) ) {
			bp_do_404();

			return;
		}

		$recording_file = json_decode( $recordings[0]->details );

		$download_url = filter_input( INPUT_GET, 'download', FILTER_VALIDATE_INT );

		// download url if download option true.
		if ( ! empty( $recording_file->download_url ) && ! empty( $download_url ) && 1 === $download_url ) {
			wp_redirect( $recording_file->download_url ); // phpcs:ignore WordPress.Security.SafeRedirect.wp_redirect_wp_redirect
			exit;
		}

		if ( ! empty( $recording_file->play_url ) ) {
			wp_redirect( $recording_file->play_url ); // phpcs:ignore WordPress.Security.SafeRedirect.wp_redirect_wp_redirect
			exit;
		}

		bp_do_404();

		return;
	}
}

/**
 * Zoom web meeting start div element to footer.
 *
 * @since 1.0.8
 */
function bp_zoom_pro_has_access_meeting_web() {
	$zoom_web_meeting = filter_input( INPUT_GET, 'wm', FILTER_VALIDATE_INT );
	$meeting_id       = filter_input( INPUT_GET, 'mi', FILTER_SANITIZE_STRING );

	if ( ! empty( $meeting_id ) && 1 === $zoom_web_meeting ) {

		// Check for block.
		if ( is_singular() && ! bp_is_group() && apply_filters( 'bp_zoom_pro_start_meeting_web', current_user_can( 'read', get_the_ID() ) ) ) {
			add_action( 'wp_footer', 'bp_zoom_pro_add_zoom_web_meeting_append_div' );
		}
	}
}

/**
 * Zoom web meeting start div element to footer.
 *
 * @since 1.0.8
 */
function bp_zoom_pro_add_zoom_web_meeting_append_div() {
	?>
	<div id="bp-zoom-dummy-web-div" style="position:absolute;z-index:9999;top: 0;background-color: black;width: 99999999px;height: 999999999999px;"></div>
	<?php
}
