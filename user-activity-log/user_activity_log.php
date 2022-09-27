<?php
/*
 * Plugin Name: User Activity Log
 * Plugin URI: https://wordpress.org/plugins/user-activity-log/
 * Description: Log the activity of users and roles to monitor your site with actions
 * Author: Solwin Infotech
 * Author URI: https://www.solwininfotech.com/
 * Version: 1.4.9
 * Requires at least: 5.4
 * Tested up to: 6.0
 * Copyright: Solwin Infotech
 * License: GPLv2 or later
 *
 * Text Domain: user-activity-log
 * Domain Path: /languages/
 */

/*
 * Exit if accessed directly
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * Define variables
 */
define( 'UAL_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'UAL_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
require_once ABSPATH . 'wp-admin/includes/plugin.php';
if ( ! function_exists( 'is_plugin_active' ) ) {
	require_once ABSPATH . WPINC . '/pluggable.php';
}
require UAL_PLUGIN_DIR . 'user_functions.php';
require UAL_PLUGIN_DIR . 'user_settings_menu.php';
require_once UAL_PLUGIN_DIR . 'promo_notice.php';
add_action( 'admin_init', 'ual_filter_data' );
add_action( 'plugins_loaded', 'latest_news_solwin_feed' );
add_action( 'current_screen', 'ual_footer' );
add_filter( 'set-screen-option', 'ual_set_screen_option', 10, 3 );
add_filter( 'plugin_action_links_' . dirname( plugin_basename( __FILE__ ) ), 'user_activity_log_plugin_links' );
add_action( 'admin_head', 'ual_upgrade_link_css' );
add_action( 'admin_footer', 'ual_adv_popup' );

/**
 * Load plugin text domain (user-activity-log)
 */
add_action( 'plugins_loaded', 'load_text_domain_user_activity_log' );

if ( ! function_exists( 'load_text_domain_user_activity_log' ) ) {

	function load_text_domain_user_activity_log() {
		load_plugin_textdomain( 'user-activity-log', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}
}

/**
 * Add Admin Dashboard Widget - News from Solwin Infotech
 */
if ( ! function_exists( 'latest_news_solwin_feed' ) ) {

	function latest_news_solwin_feed() {
		// Register the new dashboard widget with the 'wp_dashboard_setup' action.
		add_action( 'wp_dashboard_setup', 'solwin_latest_news_with_product_details' );
		if ( ! function_exists( 'solwin_latest_news_with_product_details' ) ) {

			function solwin_latest_news_with_product_details() {
				add_screen_option(
					'layout_columns',
					array(
						'max'     => 3,
						'default' => 2,
					)
				);
				add_meta_box( 'wp_user_log_dashboard_widget', esc_html__( 'News From Solwin Infotech', 'user-activity-log' ), 'solwin_dashboard_widget_news', 'dashboard', 'normal', 'high' );
			}
		}
		if ( ! function_exists( 'solwin_dashboard_widget_news' ) ) {

			function solwin_dashboard_widget_news() {
				$title     = '';
				$link      = '';
				$thumbnail = '';
				echo '<div class="rss-widget">'
				. '<div class="solwin-news"><p><strong>' . esc_html__( 'Solwin Infotech News', 'user-activity-log' ) . '</strong></p>';
				wp_widget_rss_output(
					array(
						'url'          => 'https://www.solwininfotech.com/feed/',
						'title'        => esc_html__( 'News From Solwin Infotech', 'user-activity-log' ),
						'items'        => 5,
						'show_summary' => 0,
						'show_author'  => 0,
						'show_date'    => 1,
					)
				);
				echo '</div>';

				// get Latest product detail from xml file.
				$file = 'https://www.solwininfotech.com/documents/assets/latest_product.xml';
				echo '<div class="display-product">'
				. '<div class="product-detail"><p><strong>' . esc_html__( 'Latest Product', 'user-activity-log' ) . '</strong></p>';
				$response = wp_remote_get( $file );
				if ( is_wp_error( $response ) ) {
					$error_message = $response->get_error_message();
					echo '<p>' . esc_html__( 'Something went wrong', 'user-activity-log' ) . ' : ' . esc_html( $error_message ) . '</p>';
				} else {
					$body                = wp_remote_retrieve_body( $response );
					$xml                 = simplexml_load_string( $body );
					$title               = $xml->item->name;
					$thumbnail           = $xml->item->img;
					$link                = $xml->item->link;
					$allproducttext      = $xml->item->viewalltext;
					$allproductlink      = $xml->item->viewalllink;
					$moretext            = $xml->item->moretext;
					$needsupporttext     = $xml->item->needsupporttext;
					$needsupportlink     = $xml->item->needsupportlink;
					$customservicetext   = $xml->item->customservicetext;
					$customservicelink   = $xml->item->customservicelink;
					$joinproductclubtext = $xml->item->joinproductclubtext;
					$joinproductclublink = $xml->item->joinproductclublink;

					echo '<div class="product-name"><a href="' . esc_url( $link ) . '" target="_blank">'
					. '<img alt="' . esc_attr( $title ) . '" src="' . esc_url( $thumbnail ) . '"> </a>'
					. '<a href="' . esc_url( $link ) . '" target="_blank">' . esc_html( $title ) . '</a>'
					. '<p><a href="' . esc_url( $allproductlink ) . '" target="_blank" class="button button-default">' . esc_html( $allproducttext ) . ' &RightArrow;</a></p>'
					. '<hr>'
					. '<p><strong>' . esc_html( $moretext ) . '</strong></p>'
					. '<ul>'
					. '<li><a href="' . esc_url( $needsupportlink ) . '" target="_blank">' . esc_html( $needsupporttext ) . '</a></li>'
					. '<li><a href="' . esc_url( $customservicelink ) . '" target="_blank">' . esc_html( $customservicetext ) . '</a></li>'
					. '<li><a href="' . esc_url( $joinproductclublink ) . '" target="_blank">' . esc_html( $joinproductclubtext ) . '</a></li>'
					. '</ul>'
					. '</div>';
				}
				echo '</div></div><div class="clear"></div>'
				. '</div>';
			}
		}
	}
}

/**
 * Add Footer link
 */
if ( ! function_exists( 'ual_footer' ) ) {

	function ual_footer() {
		$screen = get_current_screen();
		if ( isset( $_GET['page'] ) && ( 'user_action_log' == $_GET['page'] || 'general_settings_menu' == $_GET['page'] ) ) {
			add_filter( 'admin_footer_text', 'ual_remove_footer_admin' ); // change admin footer text.
		}
	}
}

/**
 * Add rating html at footer of admin
 *
 * @return html rating
 */
if ( ! function_exists( 'ual_remove_footer_admin' ) ) {

	function ual_remove_footer_admin() {
		ob_start();
		?>
		<p id="footer-left" class="alignleft">
			<?php esc_html_e( 'If you like ', 'user-activity-log' ); ?>
			<a href="https://www.solwininfotech.com/product/wordpress-plugins/user-activity-log/" target="_blank"><strong><?php esc_html_e( 'User Activity Log', 'user-activity-log' ); ?></strong></a>
			<?php esc_html_e( 'please leave us a', 'user-activity-log' ); ?>
			<a class="bdp-rating-link" data-rated="Thanks :)" target="_blank" href="https://wordpress.org/support/plugin/user-activity-log/reviews/?filter=5#new-post">&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</a>
			<?php esc_html_e( 'rating. A heartly thank you from Solwin Infotech in advance!', 'user-activity-log' ); ?>
		</p>
		<?php
		return ob_get_clean();
	}
}
if ( is_plugin_active( 'gravityforms/gravityforms.php' ) ) {
	include UAL_PLUGIN_DIR . 'includes/ual-gravityform.php';
}
if ( is_plugin_active( 'easy-digital-downloads/easy-digital-downloads.php' ) ) {
	include UAL_PLUGIN_DIR . 'includes/ual-easy-digital-download.php';
}
if ( is_plugin_active( 'user-switching/user-switching.php' ) ) {
	include UAL_PLUGIN_DIR . 'includes/ual-user-switching.php';
}
if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
	include UAL_PLUGIN_DIR . 'includes/ual-woocommerce.php';
}
if ( is_plugin_active( 'wordpress-seo/wp-seo.php' ) ) {
	include UAL_PLUGIN_DIR . 'includes/ual-wordpress-seo.php';
}
if ( is_plugin_active( 'buddypress/bp-loader.php' ) ) {
	include UAL_PLUGIN_DIR . 'includes/ual-bubbypress.php';
}
if ( is_plugin_active( 'jetpack/jetpack.php' ) ) {
	include UAL_PLUGIN_DIR . 'includes/ual-jetpack.php';
}
if (is_plugin_active('wp-crontrol/wp-crontrol.php')) {
    include UAL_PLUGIN_DIR . 'includes/ual-wp-crontrol.php';
}
if (is_plugin_active('enable-media-replace/enable-media-replace.php')) {
    include UAL_PLUGIN_DIR . 'includes/ual-enable-media-replace.php';
}
if (is_plugin_active('limit-login-attempts/limit-login-attempts.php')) {
    include UAL_PLUGIN_DIR . 'includes/ual-limit-login-attempts.php';
}
if (is_plugin_active('redirection/redirection.php')) {
    include UAL_PLUGIN_DIR . 'includes/ual-redirection.php';
}
if (is_plugin_active('duplicate-post/duplicate-post.php')) {
    include UAL_PLUGIN_DIR . 'includes/ual-duplicate-post.php';
}
/**
 * Function for set the value in header
 */
if ( ! function_exists( 'ual_filter_data' ) ) :

	function ual_filter_data() {
		$u_role    = $u_name = $o_type = $txtsearch = $dateshow = $showip = '' ;
		$admin_url = admin_url( 'admin.php' ) . '?page=user_action_log';
		$paged     = isset( $_POST['paged'] ) ? intval( $_POST['paged'] ) : 1;

		$txtsearch = isset( $_POST['txtSearchinput'] ) ? sanitize_text_field( wp_unslash( $_POST['txtSearchinput'] ) ) : '';

		if ( isset( $_POST['role'] ) && '0' != $_POST['role'] ) {
			$u_role = sanitize_text_field( wp_unslash( $_POST['role'] ) );
		}
		if ( isset( $_POST['user'] ) && '0' != $_POST['user'] ) {
			$u_name = sanitize_text_field( wp_unslash( $_POST['user'] ) );
		}
		if ( isset( $_POST['post_type'] ) && '0' != $_POST['post_type'] ) {
			$o_type = sanitize_text_field( wp_unslash( $_POST['post_type'] ) );
		}
		if ( isset( $_POST['dateshow'] ) && '' != $_POST['dateshow'] ) {
		
			$dateshow = sanitize_text_field( wp_unslash( $_POST['dateshow'] ) );
		}
		if ( isset( $_POST['showip'] ) && '' != $_POST['showip'] ) {
			$showip = sanitize_text_field( wp_unslash( $_POST['showip'] ) );
		}
		// For filtering data.
		if ( isset( $_POST['btn_filter'] ) && ! empty( $_POST['btn_filter'] ) ) {
			header( "Location: $admin_url&paged=$paged&dateshow=$dateshow&showip=$showip&userrole=$u_role&username=$u_name&type=$o_type&txtsearch=$txtsearch", true );
			exit();
		}
		if ( isset( $_POST['btnSearch'] ) && ! empty( $_POST['btnSearch'] ) ) {
			header( "Location: $admin_url&paged=$paged&dateshow=$dateshow&showip=$showip&userrole=$u_role&username=$u_name&type=$o_type&txtsearch=$txtsearch", true );
			exit();
		}
	}

endif;
add_action( 'admin_menu', 'ual_user_activity' );

/*
 * for creating admin side pages
 */
if ( ! function_exists( 'ual_user_activity' ) ) :

	function ual_user_activity() {
		global $screen_option_page;
		$ual_is_optin = get_option( 'ual_is_optin' );
		if ( 'yes' == $ual_is_optin || 'no' == $ual_is_optin ) {
			$screen_option_page = add_menu_page( esc_html__( 'User Activity Log', 'user-activity-log' ), esc_html__( 'User Activity Log', 'user-activity-log' ), 'manage_options', 'user_action_log', 'ual_user_activity_function', 'dashicons-admin-users', 70 );
		} else {
			$screen_option_page = add_menu_page( esc_html__( 'User Activity Log', 'user-activity-log' ), esc_html__( 'User Activity Log', 'user-activity-log' ), 'manage_options', 'user_welcome_page', 'ual_user_welcome_function', 'dashicons-admin-users', 70 );
		}
		add_action( "load-$screen_option_page", 'ual_screen_options' );
		add_submenu_page( 'user_action_log', esc_html__( 'Settings', 'user-activity-log' ) . ' | ' . esc_html__( 'User Activity Log', 'user-activity-log' ), esc_html__( 'Settings', 'user-activity-log' ), 'manage_options', 'general_settings_menu', 'ualSettingsPanel', 1 );
	}

endif;


/**
 * Add per page option in screen option in single post templates list
 *
 * @global string $bdp_screen_option_page
 */
if ( ! function_exists( 'ual_screen_options' ) ) {

	function ual_screen_options() {
		global $screen_option_page;
		$screen = get_current_screen();

		// get out of here if we are not on our settings page.
		if ( ! is_object( $screen ) || $screen->id != $screen_option_page ) {
			return;
		}

		$args = array(
			'label'   => esc_html__( 'Number of Logs per page', 'user-activity-log' ) . ' : ',
			'default' => 10,
			'option'  => 'ual_per_page',
		);
		add_screen_option( 'per_page', $args );
	}
}

/**
 *
 * @param type $status
 * @param type $option
 * @param type $value
 * @return type
 */
if ( ! function_exists( 'ual_set_screen_option' ) ) {

	function ual_set_screen_option( $status, $option, $value ) {
		if ( 'ual_per_page' == $option ) {
			return $value;
		}
		return $status;
	}
}

/*
 * Display Optin form
 */
if ( ! function_exists( 'ual_user_welcome_function' ) ) {
	function ual_user_welcome_function() {
		global $wpdb;
		$ual_admin_email = get_option( 'admin_email' );
		?>
		<div class='ual_header_wizard'>
			<p><?php esc_attr_e( 'Hi there!', 'user-activity-log' ); ?></p>
			<p><?php esc_attr_e( "Don't ever miss an opportunity to opt in for Email Notifications / Announcements about exciting New Features and Update Releases.", 'user-activity-log' ); ?></p>
			<p><?php esc_attr_e( 'Contribute in helping us making our plugin compatible with most plugins and themes by allowing to share non-sensitive information about your website.', 'user-activity-log' ); ?></p>
			<p><b><?php esc_attr_e( 'Email Address for Notifications', 'user-activity-log' ); ?> :</b></p>
			<p><input type='email' value='<?php echo esc_attr( $ual_admin_email ); ?>' id='ual_admin_email' /></p>
			<p><?php esc_attr_e( "If you're not ready to Opt-In, that's ok too!", 'user-activity-log' ); ?></p>
			<p><b><?php esc_attr_e( 'User Activity Log will still work fine.', 'user-activity-log' ); ?> :</b></p>
			<p onclick="ual_show_hide_permission()" class='ual_permission'><b><?php esc_attr_e( 'What permissions are being granted?', 'user-activity-log' ); ?></b></p>
			<div class='ual_permission_cover' style='display:none'>
				<div class='ual_permission_row'>
					<div class='ual_50'>
						<i class='dashicons dashicons-admin-users gb-dashicons-admin-users'></i>
						<div class='ual_50_inner'>
							<label><?php esc_attr_e( 'User Details', 'user-activity-log' ); ?></label>
							<label><?php esc_attr_e( 'Name and Email Address', 'user-activity-log' ); ?></label>
						</div>
					</div>
					<div class='ual_50'>
						<i class='dashicons dashicons-admin-plugins gb-dashicons-admin-plugins'></i>
						<div class='ual_50_inner'>
							<label><?php esc_attr_e( 'Current Plugin Status', 'user-activity-log' ); ?></label>
							<label><?php esc_attr_e( 'Activation, Deactivation and Uninstall', 'user-activity-log' ); ?></label>
						</div>
					</div>
				</div>
				<div class='ual_permission_row'>
					<div class='ual_50'>
						<i class='dashicons dashicons-testimonial gb-dashicons-testimonial'></i>
						<div class='ual_50_inner'>
							<label><?php esc_attr_e( 'Notifications', 'user-activity-log' ); ?></label>
							<label><?php esc_attr_e( 'Updates & Announcements', 'user-activity-log' ); ?></label>
						</div>
					</div>
					<div class='ual_50'>
						<i class='dashicons dashicons-welcome-view-site gb-dashicons-welcome-view-site'></i>
						<div class='ual_50_inner'>
							<label><?php esc_attr_e( 'Website Overview', 'user-activity-log' ); ?></label>
							<label><?php esc_attr_e( 'Site URL, WP Version, PHP Info, Plugins & Themes Info', 'user-activity-log' ); ?></label>
						</div>
					</div>
				</div>
			</div>
			<p>
				<input type='checkbox' class='ual_agree' id='ual_agree_gdpr' value='1' />
				<label for='ual_agree_gdpr' class='ual_agree_gdpr_lbl'><?php esc_attr_e( 'By clicking this button, you agree with the storage and handling of your data as mentioned above by this website. (GDPR Compliance)', 'user-activity-log' ); ?></label>
			</p>
			<p class='ual_buttons'>
				<a href="javascript:void(0)" class='button button-secondary' onclick="ual_submit_optin('cancel')">
				<?php
				esc_attr_e( 'Skip', 'user-activity-log' );
				echo ' &amp; ';
				esc_attr_e( 'Continue', 'user-activity-log' );
				?>
				</a>
				<a href="javascript:void(0)" class='button button-primary' onclick="ual_submit_optin('submit')">
				<?php
				esc_attr_e( 'Opt-In', 'user-activity-log' );
				echo ' &amp; ';
				esc_attr_e( 'Continue', 'user-activity-log' );
				?>
				</a>
			</p>
		</div>
		<?php
	}
}

/*
 * Display all the user activity log data
 */

if ( ! function_exists( 'ual_user_activity_function' ) ) :

	function ual_user_activity_function() {
		$paged             = 1;
		$total_pages       = 1;
		$us_role           = '';
		$ipaddress           = '';
		$us_name           = '';
		$dateshow		= '';
		$ob_type           = '';
		$searchtxt         = '';
		$select_query      = '';
		$get_data          = '';
		$total_items_query = '';
		$total_items       = '';
		global $wpdb;
		$srno          = 0;
		$user          = get_current_user_id();
		$screen        = get_current_screen();
		$screen_option = $screen->get_option( 'per_page', 'option' );
		$limit         = get_user_meta( $user, $screen_option, true );
		$recordperpage = 10;
		if ( isset( $_GET['page'] ) && absint( $_GET['page'] ) ) {
			$recordperpage = absint( $_GET['page'] );
		} elseif ( isset( $limit ) ) {
			$recordperpage = $limit;
		} else {
			$recordperpage = get_option( 'posts_per_page' );
		}
		if ( ! isset( $recordperpage ) || empty( $recordperpage ) ) {
			$recordperpage = 10;
		}
		if ( ! isset( $limit ) || empty( $limit ) ) {
			$limit = 10;
		}
		$table_name = $wpdb->prefix . 'ualp_user_activity';
		$where      = 'where 1=1';

		if ( isset( $_GET['paged'] ) ) {
			$paged = intval( $_GET['paged'] );
		}

		$offset = ( $paged - 1 ) * $recordperpage;

		if ( isset( $_GET['userrole'] ) && '' != $_GET['userrole'] ) {
			$us_role = sanitize_text_field( wp_unslash( $_GET['userrole'] ) );
			$where  .= " and user_role='$us_role'";
		}
		if ( isset( $_GET['showip'] ) && '' != $_GET['showip'] ) {
			$ipaddress = sanitize_text_field( wp_unslash( $_GET['showip'] ) );
			$where  .= " and ip_address='$ipaddress'";
		}
		
		if ( isset( $_GET['username'] ) && '' != $_GET['username'] ) {
			$us_name = sanitize_text_field( wp_unslash( $_GET['username'] ) );
			$where  .= " and user_name='$us_name'";
		}
		if ( isset( $_GET['type'] ) && '' != $_GET['type'] ) {
			$ob_type = sanitize_text_field( wp_unslash( $_GET['type'] ) );
			$where  .= " and object_type='$ob_type'";
		}
		if ( isset( $_GET['txtsearch'] ) && '' != $_GET['txtsearch'] ) {
			$searchtxt = sanitize_text_field( wp_unslash( $_GET['txtsearch'] ) );
			$where    .= " and user_name like '%" . $searchtxt . "%' or user_role like '%" . $searchtxt . "%' or object_type like '%" . $searchtxt . "%' or action like '%" . $searchtxt . "%'";
		}
		if (isset($_GET['dateshow']) && in_array($_GET['dateshow'], array('today', 'yesterday', 'week','this-month', 'month','2-month','3-month','6-month','this-year','last-year','custom'))) {
			$dateshow = sanitize_text_field( wp_unslash( $_GET['dateshow'] ) );
			$get_time = $_GET['dateshow'];
            $current_time = current_time('timestamp');
            $start_time = mktime(0, 0, 0, date('m', $current_time), date('d', $current_time), date('Y', $current_time));
            $end_time = mktime(23, 59, 59, date('m', $current_time), date('d', $current_time), date('Y', $current_time));
            if ($get_time == 'today') {
                $start_time = $current_time;
                $end_time = strtotime('+1 day', $current_time);

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);

            } elseif ($get_time === 'yesterday') {
                $start_time = strtotime('yesterday', $start_time);
                $end_time = $current_time;

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);

            } elseif ($get_time === 'week') {
                $start_time = strtotime('-1 week', $start_time);
                $end_time = strtotime('+1 day', $current_time);

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);

            } elseif ($get_time === 'this-month') {
                $start_time = date('Y-m-01');
                $start_time = strtotime($start_time);

                $end_time = date('Y-m-31');
                $end_time = strtotime($end_time);

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);

            } elseif ($get_time === 'month') {
                $start_time = strtotime('-1 month', $start_time);
                $end_time = strtotime('+1 day', $current_time);

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);

            } elseif ($get_time === '2-month') {
                $start_time = strtotime('-2 month', $start_time);
                $end_time = strtotime('+1 day', $current_time);

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);

            } elseif ($get_time === '3-month') {
                $start_time = strtotime('-3 month', $start_time);
                $end_time = strtotime('+1 day', $current_time);

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);

            } elseif ($get_time === '6-month') {
                $start_time = strtotime('-6 month', $start_time);
                $end_time = strtotime('+1 day', $current_time);

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);

            }elseif ($get_time === 'this-year') {
                $start_time = date('Y-01-01');
                $start_time = strtotime($start_time);

                $end_time = date('Y-12-31');
                $end_time = strtotime($end_time);

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);
            }elseif($get_time === 'last-year'){

                $start_time = date('Y-01-01');
                $start_time = strtotime($start_time);
                $start_time = strtotime('-1 year',$start_time);

                $end_time = date('Y-12-31');
                $end_time = strtotime($end_time);
                $end_time = strtotime('-1 year',$end_time);

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);
            } elseif ($get_time === 'custom') {
                $custom_start_date = $_REQUEST['start_date'];
                $custom_end_date = $_REQUEST['end_date'];
                if(isset($custom_start_date) && $custom_start_date != ''){
                    $start_time = strtotime($custom_start_date.' 23:59:59');
                    if(date('Y-m-d H:i:s', $start_time) > date('Y-m-d H:i:s')){
                        $start_time = strtotime($custom_start_date.' 23:59:59');
                    } else {
                        $start_time = strtotime('-1 day', $start_time);
                    }
                    $start_time = date('Y-m-d H:i:s', $start_time);
                    $where .= $wpdb->prepare(' AND modified_date >= "%s"', $start_time);
                }
                if(isset($custom_end_date) && $custom_end_date != ''){
                    $end_time = strtotime($custom_end_date.' 23:59:59');
                    $end_time = strtotime('+1 day', $end_time);
                    $end_time = date('Y-m-d H:i:s', $end_time);
                    $where .= $wpdb->prepare(' AND modified_date < "%s"', $end_time);
                }
                
            }
		}

		// query for display all the user activity data start.
		if ( $wpdb->get_var( "SHOW TABLES LIKE '$table_name'" ) ) {
			$select_query      = "SELECT * from $table_name $where ORDER BY modified_date desc LIMIT $offset,$recordperpage";
			$get_data          = $wpdb->get_results( $select_query );
			$total_items_query = "SELECT count(*) FROM $table_name $where";
			$total_items       = $wpdb->get_var( $total_items_query, 0, 0 );
		}

		// query for display all the user activity data end.
		// for pagination.
		$total_pages = ceil( $total_items / $recordperpage );
		$next_page   = (int) $paged + 1;
		if ( $next_page > $total_pages ) {
			$next_page = $total_pages;
		}
		$prev_page = (int) $paged - 1;
		if ( $prev_page < 1 ) {
			$prev_page = 1;
		}
		?>
		<div class="wrap">
			<h2><?php esc_html_e( 'User Activity Log', 'user-activity-log' ); ?></h2>
			<?php $query_string = isset( $_SERVER['QUERY_STRING'] ) ? esc_url_raw( wp_unslash( $_SERVER['QUERY_STRING'] ) ) : ''; ?>
			<form method="POST" action="<?php echo admin_url( 'admin.php' ) . '?' . esc_attr( $query_string ); ?>" class="frm-user-activity">
				<div class="tablenav top">
					<div class="wp-filter">
						<div class="ual-filter-cover">						

							<!-- Drop down menu for Hook selection -->
							<div class="alignleft actions ual-pro-feature">
								<select>
									<option selected value=""><?php esc_html_e( 'All Hooks', 'user-activity-log' ); ?></option>
									<?php
									$hook_options = array(
										'wp_login' => esc_attr__( 'wp_login', 'user-activity-log' ),
										'wp_login' => esc_attr__( 'wp_login_failed', 'user-activity-log' ),
									);
									foreach ( $hook_options as $key => $value ) {
										?>
										<option value="<?php echo esc_attr( $key ); ?>"><?php echo esc_attr( $value ); ?></option>
										<?php
									}
									?>
								</select>
							</div>

							<!-- Drop down menu for Favorite/Unfavorite selection -->
							<div class="alignleft actions ual-pro-feature">
								<select>
									<option selected value=""><?php esc_html_e( 'All Favorite/Unfavorite', 'user-activity-log' ); ?></option>
									<?php
									$fav_options = array(
										'favorite'   => esc_attr__( 'Favorite', 'user-activity-log' ),
										'unfavorite' => esc_attr__( 'Unfavorite', 'user-activity-log' ),
									);
									foreach ( $fav_options as $key => $value ) {
										?>
										<option value="<?php echo esc_attr( $key ); ?>"><?php echo esc_attr( $value ); ?></option>
										<?php
									}
									?>
								</select>
							</div>
							
							<!-- Drop down menu for IP selection -->
							<div class="alignleft actions ual-pro-feature">
								<select>
									<option selected value=""><?php esc_html_e( 'All Countries', 'user-activity-log' ); ?></option>
								</select>
							</div>
							<div class="alignleft actions">
								<?php
								$ip_query = "SELECT distinct ip_address from $table_name";
								$ips  = $wpdb->get_results( $ip_query );
								
								if ($ips && ualAllowIp()) {
									echo '<select class="chosen-filter" name="showip" id="ualp-filter-showip">';
									echo '<option value="">'.__('All IPs', 'user-activity-log').'</option>';
									foreach ($ips as $ip) {
										$ip_address = $ip->ip_address;
										if ( '' != $ip_address ) {
											?>
											<option value="<?php echo esc_attr( $ip_address ); ?>" <?php echo selected( $ipaddress, $ip_address ); ?>><?php echo esc_attr( ucfirst( $ip_address ) ); ?></option>
											<?php
										}
									}
									echo '</select>';
								}
								?>
							</div>

							<!-- Drop down menu for Time selection -->
							<div class="alignleft actions">
								<select name="dateshow" class="sol-dropdown">
									<option value=""><?php esc_attr_e( 'All Time', 'user-activity-log' ); ?></option>
									<?php
									$date_options = array(
										'today'      => esc_attr__( 'Today', 'user-activity-log' ),
										'yesterday'  => esc_attr__( 'Yesterday', 'user-activity-log' ),
										'week'       => esc_attr__( 'Week', 'user-activity-log' ),
										'this-month' => esc_attr__( 'This Month', 'user-activity-log' ),
										'month'      => esc_attr__( 'Last 1 Month', 'user-activity-log' ),
										'2-month'    => esc_attr__( 'Last 2 Month', 'user-activity-log' ),
										'3-month'    => esc_attr__( 'Last 3 Month', 'user-activity-log' ),
										'6-month'    => esc_attr__( 'Last 6 Month', 'user-activity-log' ),
										'this-year'  => esc_attr__( 'This Year', 'user-activity-log' ),
										'last-year'  => esc_attr__( 'Last Year', 'user-activity-log' )										
									);
									foreach ( $date_options as $key => $value ) {
										?>
										<option value="<?php echo esc_attr( $key ); ?>" <?php echo selected( $key, $dateshow ); ?>><?php echo esc_attr( $value ); ?></option>
										<?php
									}
									?>
								</select>
							</div>

							<!-- Drop down menu for Role Start -->
							<div class="alignleft actions">
								<select name="role">
									<option selected value="0"><?php esc_html_e( 'All Roles', 'user-activity-log' ); ?></option>
									<?php
									$role_query = "SELECT distinct user_role from $table_name";
									$get_roles  = $wpdb->get_results( $role_query );
									foreach ( $get_roles as $role ) {
										$user_role = $role->user_role;
										if ( '' != $user_role ) {
											?>
											<option value="<?php echo esc_attr( $user_role ); ?>" <?php echo selected( $us_role, $user_role ); ?>><?php echo esc_attr( ucfirst( $user_role ) ); ?></option>
											<?php
										}
									}
									?>
								</select>
							</div>
							<!-- Drop down menu for Role end -->

							<!-- Drop down menu for User Start -->
							<div class="alignleft actions">
								<select name="user" class="sol-dropdown">
									<option selected value="0"><?php esc_html_e( 'All Users', 'user-activity-log' ); ?></option>
									<?php
									$username_query = "SELECT distinct user_name from $table_name";
									$get_username   = $wpdb->get_results( $username_query );
									foreach ( $get_username as $username ) {
										$user_name = $username->user_name;
										if ( '' != $user_name ) {
											?>
											<option value="<?php echo esc_attr( $user_name ); ?>" <?php echo selected( $us_name, $user_name ); ?>><?php echo esc_attr( ucfirst( $user_name ) ); ?></option>
											<?php
										}
									}
									?>
								</select>
							</div>
							<!-- Drop down menu for User end -->

							<!-- Drop down menu for Post type Start -->
							<div class="alignleft actions">
								<select name="post_type">
									<option selected value="0"><?php esc_html_e( 'All Types', 'user-activity-log' ); ?></option>
									<?php
									$object_type_query = "SELECT distinct object_type from $table_name";
									$get_type          = $wpdb->get_results( $object_type_query );
									foreach ( $get_type as $type ) {
										$object_type = $type->object_type;
										if ( '' != $object_type ) {
											?>
											<option value="<?php echo esc_attr( $object_type ); ?>" <?php echo selected( $ob_type, $object_type ); ?>><?php echo esc_attr( ucfirst( $object_type ) ); ?></option>
											<?php
										}
									}
									?>
								</select>                            
							</div>
							<!-- Drop down menu for Post type end -->
							<div class="alignleft actions">
								<div style="margin-bottom: 10px;display:inline-block;">
									<input class="button-secondary action sol-filter-btn" type="submit" value="<?php esc_attr_e( 'Filter', 'user-activity-log' ); ?>" name="btn_filter">
								</div>
							</div>
						</div>

						<div class="ual-top-cover ual-pro-feature">
							<div class="alignleft bulkactions">
								<label class="screen-reader-text">
									<?php esc_html_e( 'Select bulk action', 'user-activity-log' ); ?>
								</label>
								<select>
									<option value="0"><?php esc_html_e( 'Bulk Actions', 'user-activity-log' ); ?></option>
									<option value="delete"><?php esc_html_e( 'Delete Permanently', 'user-activity-log' ); ?></option>
									<option value="favorite"><?php esc_html_e( 'Favorite', 'user-activity-log' ); ?></option>
									<option value="unfavorite"><?php esc_html_e( 'Unfavorite', 'user-activity-log' ); ?></option>
								</select>
								<input type="submit" value="<?php esc_attr_e( 'Apply', 'user-activity-log' ); ?>" name="bulk_action" class="button action" id="doaction">
							</div>
						</div>
						<div class="ual-top-cover">
								<?php 
									
								$csvurl = admin_url("admin.php?page=user_action_log&export=user_logs&logformat=csv&userrole=".$us_role."&dateshow=".$dateshow."&username=".$us_name."&type=".$ob_type.'&showip='.$ipaddress."&txtsearch=".$searchtxt);
								$adminurl = admin_url("admin.php?page=user_action_log&export=user_logs&logformat=json&userrole=".$us_role."&dateshow=".$dateshow."&username=".$us_name."&type=".$ob_type.'&showip='.$ipaddress."&txtsearch=".$searchtxt);
								?>
								<a class="button-primary action" href="<?php echo wp_nonce_url($csvurl, "export-action", "export-nonce"); ?>">
									<?php esc_html_e( 'Export Logs (CSV)', 'user-activity-log' ); ?>
								</a>
								<a class="button-primary action" href="<?php echo wp_nonce_url($adminurl, "export-action", "export-nonce"); ?>">
									<?php esc_html_e( 'Export Logs (JSON)', 'user-activity-log' ); ?>
								</a>
						</div>
						<!-- Search Box start -->
						<div class="sol-search-div">
							<p class="search-box">
								<label class="screen-reader-text" for="search-input"><?php esc_html_e( 'Search', 'user-activity-log' ); ?> :</label>
								<input id="user-search-input" type="search" placeholder="<?php esc_attr_e( 'User, Role, Action', 'user-activity-log' ); ?>" value="<?php echo esc_attr( $searchtxt ); ?>" name="txtSearchinput">
								<input id="search-submit" class="button" type="submit" value="<?php esc_attr_e( 'Search', 'user-activity-log' ); ?>" name="btnSearch">
							</p>
						</div>
						<!-- Search Box end -->
					</div>
					<!-- Top pagination start -->
					<div class="tablenav-pages">
						<?php $items = $total_items . ' ' . _n( 'item', 'items', $total_items, 'user-activity-log' ); ?>
						<span class="displaying-num"><?php echo esc_html( $items ); ?></span>
						<div class="tablenav-pages" 
						<?php
						if ( (int) $total_pages <= 1 ) {
							echo 'style="display:none;"';
						}
						?>
						>
							<span class="pagination-links">
								<?php if ( '1' == $paged ) { ?>
									<span class="tablenav-pages-navspan" aria-hidden="true">&laquo;</span>
									<span class="tablenav-pages-navspan" aria-hidden="true">&lsaquo;</span>
									<?php
								} else {
									?>
									<a class="first-page 
									<?php
									if ( '1' == $paged ) {
										echo 'disabled';}
									?>
									" href="<?php echo admin_url( 'admin.php?page=user_action_log' ) . '&paged=1&dateshow='.esc_attr( $dateshow ).'&showip='.esc_attr( $ipaddress ).'&userrole=' . esc_attr( $us_role ) . '&username=' . esc_attr( $us_name ) . '&type=' . esc_attr( $ob_type ) . '&txtsearch=' . esc_attr( $searchtxt ); ?>" title="<?php esc_attr_e( 'Go to the first page', 'user-activity-log' ); ?>">&laquo;</a>
									<a class="prev-page 
									<?php
									if ( '1' == $paged ) {
										echo 'disabled';}
									?>
									" href="<?php echo admin_url( 'admin.php?page=user_action_log' ) . '&paged=' . esc_attr( $prev_page ) . '&dateshow='.esc_attr( $dateshow ).'&showip='.esc_attr( $ipaddress ).'&userrole=' . esc_attr( $us_role ) . '&username=' . esc_attr( $us_name ) . '&type=' . esc_attr( $ob_type ) . '&txtsearch=' . esc_attr( $searchtxt ); ?>" title="<?php esc_attr_e( 'Go to the previous page', 'user-activity-log' ); ?>">&lsaquo;</a>
								<?php } ?>
								<span class="paging-input">
									<input class="current-page" type="text" size="1" value="<?php echo esc_attr( $paged ); ?>" name="paged" title="<?php esc_attr_e( 'Current page', 'user-activity-log' ); ?>"> <?php esc_attr_e( 'of', 'user-activity-log' ); ?>
									<span class="total-pages"><?php echo esc_attr( $total_pages ); ?></span>
								</span>
								<a class="next-page 
								<?php
								if ( $paged == $total_pages ) {
									echo 'disabled';}
								?>
								" href="<?php echo admin_url( 'admin.php?page=user_action_log' ) . '&paged=' . esc_attr( $next_page ) . '&dateshow='.esc_attr( $dateshow ).'&showip='.esc_attr( $ipaddress ).'&userrole=' . esc_attr( $us_role ) . '&username=' . esc_attr( $us_name ) . '&type=' . esc_attr( $ob_type ) . '&txtsearch=' . esc_attr( $searchtxt ); ?>" title="<?php esc_attr_e( 'Go to the next page', 'user-activity-log' ); ?>">&rsaquo;</a>
								<a class="last-page 
								<?php
								if ( $paged == $total_pages ) {
									echo 'disabled';}
								?>
								" href="<?php echo admin_url( 'admin.php?page=user_action_log' ) . '&paged=' . esc_attr( $total_pages ) . '&dateshow='.esc_attr( $dateshow ).'&showip='.esc_attr( $ipaddress ).'&userrole=' . esc_attr( $us_role ) . '&username=' . esc_attr( $us_name ) . '&type=' . esc_attr( $ob_type ) . '&txtsearch=' . esc_attr( $searchtxt ); ?>" title="<?php esc_attr_e( 'Go to the last page', 'user-activity-log' ); ?>">&raquo;</a>
							</span>
						</div>
					</div>
					<!-- Top pagination end -->
				</div>
				<!-- Table for display user action start -->
				<table class="widefat post fixed striped" cellspacing="0">
					<thead>
						<tr>
							<th style="width: 25px" scope="col" class="manage-column column-check"><?php esc_html_e( 'No.', 'user-activity-log' ); ?></th>
							<th scope="col"><?php esc_html_e( 'Date', 'user-activity-log' ); ?></th>
							<th scope="col"><?php esc_html_e( 'Author', 'user-activity-log' ); ?></th>
							<th scope="col"><?php esc_html_e( 'IP Address', 'user-activity-log' ); ?></th>
							<th scope="col"><?php esc_html_e( 'Type', 'user-activity-log' ); ?></th>
							<th scope="col"><?php esc_html_e( 'Action', 'user-activity-log' ); ?></th>
							<th scope="col" colspan="2"><?php esc_html_e( 'Description', 'user-activity-log' ); ?></th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th style="width: 25px" scope="col" class="manage-column column-check"><?php esc_html_e( 'No.', 'user-activity-log' ); ?></th>
							<th scope="col"><?php esc_html_e( 'Date', 'user-activity-log' ); ?></th>
							<th scope="col"><?php esc_html_e( 'Author', 'user-activity-log' ); ?></th>
							<th scope="col"><?php esc_html_e( 'IP Address', 'user-activity-log' ); ?></th>
							<th scope="col"><?php esc_html_e( 'Type', 'user-activity-log' ); ?></th>
							<th scope="col"><?php esc_html_e( 'Action', 'user-activity-log' ); ?></th>
							<th scope="col" colspan="2"><?php esc_html_e( 'Description', 'user-activity-log' ); ?></th>
							<th scope="col"></th>
						</tr>
					</tfoot>
					<tbody>
						<?php
						if ( $get_data ) {
							$srno = 1 + $offset;
							foreach ( $get_data as $data ) {
								?>
								<tr>
									<td class="check column-check">
									<?php
										echo esc_html( $srno );
										$srno++;
									?>
										</td>
									<td>
									<?php
										$modified_date = strtotime( $data->modified_date );
										$date_format   = get_option( 'date_format' );
										$time_format   = get_option( 'time_format' );
										echo gmdate( $date_format, $modified_date );
										echo ' ';
										echo gmdate( $time_format, $modified_date );
									?>
										</td>
									<td class="user_id column-user_id" data-colname="Author">
										<a href="<?php echo esc_url( get_edit_user_link( $data->user_id ) ); ?>">
											<?php echo get_avatar( $data->user_id, 40 ); ?>
											<span><?php echo esc_html( ucfirst( $data->user_name ) ); ?></span>
										</a><br>
										<small><?php echo esc_html( ucfirst( $data->user_role ) ); ?></small><br>
										<?php echo esc_html( $data->user_email ); ?>
									</td>
									<td><?php echo esc_html( $data->ip_address );
									
									if(isset( $data->ip_address ) && !empty( $data->ip_address ) ) {
										// echo " <br> <b><a href='javascript:void(0);' class='ualp_ip_details' data-ip='$data->ip_address'>IP Details</a></b>";
									}
									?></td>
									<td><?php echo ucfirst( esc_html( $data->object_type ) ); ?></td>
									<td><?php echo ucfirst( esc_html( $data->action ) ); ?></td>
									<td class="column-description" colspan="2">
										<?php if ( ( 'post' == $data->object_type || 'page' == $data->object_type ) && 'post deleted' != $data->action && 'page deleted' != $data->action ) { ?>
											<a href="<?php echo esc_url( get_permalink( $data->post_id ) ); ?>">
												<?php echo ucfirst( esc_html( $data->post_title ) ); ?>
											</a>
											<?php
										} else {
											echo ucfirst( esc_html( $data->post_title ) );
										}
										?>
									</td>
									<td class="ual-pro-feature">
										<span class="dashicons dashicons-visibility ual-view-log"></span>
										<a title="Unfavorite" class="ual-favorite" href="#"></a>
										<a title="Delete" class="ual-delete-log" href="#">
											<span class="dashicons dashicons-trash"></span>
										</a>
									</td>
								</tr>
								<?php
							}
						} else {
							echo '<tr class="no-items">';
							echo '<td class="colspanchange" colspan="9">' . esc_html__( 'No record found.', 'user-activity-log' ) . '</td>';
							echo '</tr>';
						}
						?>
					</tbody>
				</table>
				<!-- Table for display user action end -->
				<!-- Bottom pagination start -->
				<div class="tablenav top">
					<div class="tablenav-pages">
						<span class="displaying-num"><?php echo esc_html( $items ); ?></span>
						<div class="tablenav-pages" 
						<?php
						if ( (int) $total_pages <= 1 ) {
							echo 'style="display:none;"';
						}
						?>
						>
							<span class="pagination-links">
								<?php if ( '1' == $paged ) { ?>
									<span class="tablenav-pages-navspan" aria-hidden="true">&laquo;</span>
									<span class="tablenav-pages-navspan" aria-hidden="true">&lsaquo;</span>
									<?php
								} else {
									?>
									<a class="first-page 
									<?php
									if ( '1' == $paged ) {
										echo 'disabled';}
									?>
									" href="<?php echo admin_url( 'admin.php?page=user_action_log' ) . '&paged=1&userrole=' . esc_attr( $us_role ) . '&dateshow='.esc_attr( $dateshow ).'&showip='.esc_attr( $ipaddress ).'&username=' . esc_attr( $us_name ) . '&type=' . esc_attr( $ob_type ) . '&txtsearch=' . esc_attr( $searchtxt ); ?>" title="<?php esc_attr_e( 'Go to the first page', 'user-activity-log' ); ?>">&laquo;</a>
									<a class="prev-page 
									<?php
									if ( '1' == $paged ) {
										echo 'disabled';}
									?>
									" href="<?php echo admin_url( 'admin.php?page=user_action_log' ) . '&paged=' . esc_attr( $prev_page ) . '&dateshow='.esc_attr( $dateshow ).'&showip='.esc_attr( $ipaddress ).'&userrole=' . esc_attr( $us_role ) . '&username=' . esc_attr( $us_name ) . '&type=' . esc_attr( $ob_type ) . '&txtsearch=' . esc_attr( $searchtxt ); ?>" title="<?php esc_attr_e( 'Go to the previous page', 'user-activity-log' ); ?>">&lsaquo;</a>
								<?php } ?>
								<span class="paging-input">
									<span class="current-page" title="<?php esc_attr_e( 'Current page', 'user-activity-log' ); ?>"><?php echo esc_attr( $paged ); ?></span> <?php esc_attr_e( 'of', 'user-activity-log' ); ?>
									<span class="total-pages"><?php echo esc_attr( $total_pages ); ?></span>
								</span>
								<a class="next-page 
								<?php
								if ( $paged == $total_pages ) {
									echo 'disabled';}
								?>
								" href="<?php echo admin_url( 'admin.php?page=user_action_log' ) . '&paged=' . esc_attr( $next_page ) . '&dateshow='.esc_attr( $dateshow ).'&showip='.esc_attr( $ipaddress ).'&userrole=' . esc_attr( $us_role ) . '&username=' . esc_attr( $us_name ) . '&type=' . esc_attr( $ob_type ) . '&txtsearch=' . esc_attr( $searchtxt ); ?>" title="<?php esc_attr_e( 'Go to the next page', 'user-activity-log' ); ?>">&rsaquo;</a>
								<a class="last-page 
								<?php
								if ( $paged == $total_pages ) {
									echo 'disabled';}
								?>
								" href="<?php echo admin_url( 'admin.php?page=user_action_log' ) . '&paged=' . esc_attr( $total_pages ) . '&dateshow='.esc_attr( $dateshow ).'&showip='.esc_attr( $ipaddress ).'&userrole=' . esc_attr( $us_role ) . '&username=' . esc_attr( $us_name ) . '&type=' . esc_attr( $ob_type ) . '&txtsearch=' . esc_attr( $searchtxt ); ?>" title="<?php esc_attr_e( 'Go to the last page', 'user-activity-log' ); ?>">&raquo;</a>
							</span>
						</div>
					</div>
				</div>
				<!-- Bottom pagination end -->
			</form>
		</div>
		<?php
	}

endif;

if ( ! function_exists( 'ual_advertisment_sidebar' ) ) {

	function ual_advertisment_sidebar() {
		?>
		<div class="user-activity-ad-block">
			<div class="ual-help">
				<h2><?php esc_html_e( 'Help to improve this plugin!', 'user-activity-log' ); ?></h2>
				<div class="help-wrapper">
					<span><?php esc_html_e( 'Enjoyed this plugin?', 'user-activity-log' ); ?></span>
					<span><?php esc_html_e( 'You can help by', 'user-activity-log' ); ?>
						<a href="https://wordpress.org/support/plugin/user-activity-log/reviews/?filter=5#new-post" target="_blank">
							<?php esc_html_e( ' rating this plugin on wordpress.org', 'user-activity-log' ); ?>
						</a>
					</span>
					<div class="ual-total-download">
						<?php
						esc_html_e( 'Downloads', 'user-activity-log' );
						echo ' : ';
						get_total_downloads_user_activity_log_plugin();
						$wp_version = get_bloginfo( 'version' );
						if ( $wp_version > 3.8 ) {
							wp_custom_star_rating_user_activity_log();
						}
						?>
					</div>
				</div>
			</div>
			<div class="useful_plugins">
				<h2><?php esc_html_e( 'User Activity Log Pro', 'user-activity-log' ); ?></h2>
				<div class="help-wrapper">
					<div class="pro-content">
						<ul class="advertisementContent">
							<li><?php esc_html_e( 'Supports 15 plugins', 'user-activity-log' ); ?></li>
							<li><?php esc_html_e( 'Exclude activity logs for particular users', 'user-activity-log' ); ?></li>
							<li><?php esc_html_e( 'Add detail logs for WooCommerce products ', 'user-activity-log' ); ?></li>
							<li><?php esc_html_e( 'Add Support of WooCommerce Coupon', 'user-activity-log' ); ?></li>
							<li><?php esc_html_e( 'Export logs in CSV, JSON Format', 'user-activity-log' ); ?></li>
							<li><?php esc_html_e( 'View Detail logs(Old/New comparison)', 'user-activity-log' ); ?></li>
							<li><?php esc_html_e( 'Delete Logs', 'user-activity-log' ); ?></li>
							<li><?php esc_html_e( 'Favorite/Unfavorite Logs', 'user-activity-log' ); ?></li>
							<li><?php esc_html_e( 'Password Security', 'user-activity-log' ); ?></li>
							<li><?php esc_html_e( 'Role selection option for display logs', 'user-activity-log' ); ?></li>
							<li><?php esc_html_e( 'Hook Selection option to monitor activity', 'user-activity-log' ); ?></li>
							<li><?php esc_html_e( 'Add Custom event to track the logs', 'user-activity-log' ); ?></li>
							<li><?php esc_html_e( 'External database integration and migration', 'user-activity-log' ); ?></li>
							<li><?php esc_html_e( 'List currently logged in users', 'user-activity-log' ); ?></li>
						</ul>
						<p class="pricing_change"><?php esc_html_e( 'Buy Now only at ', 'user-activity-log' ); ?><ins>$99</ins></p>
					</div>
					<div class="pre-book-pro">
						<a href="https://codecanyon.net/item/user-activity-log-pro-for-wordpress/18201203?ref=solwin" target="_blank">
							<?php esc_html_e( 'Buy Now on Codecanyon', 'user-activity-log' ); ?>
						</a>
					</div>
				</div>
			</div>
			<div class="ual-support">
				<h3><?php esc_html_e( 'Need Support?', 'user-activity-log' ); ?></h3>
				<div class="help-wrapper">
					<span><?php esc_html_e( 'Check out the', 'user-activity-log' ); ?>
						<a href="https://wordpress.org/plugins/user-activity-log/faq/" target="_blank"><?php esc_html_e( 'FAQs', 'user-activity-log' ); ?></a>
						<?php esc_html_e( 'and', 'user-activity-log' ); ?>
						<a href="https://wordpress.org/support/plugin/user-activity-log" target="_blank"><?php esc_html_e( 'Support Forums', 'user-activity-log' ); ?></a>
					</span>
				</div>
			</div>
			<div class="ual-support">
				<h3><?php esc_html_e( 'Share & Follow Us', 'user-activity-log' ); ?></h3>
				<div class="help-wrapper">
					<!-- Twitter -->
					<div style='display:block;margin-bottom:8px;'>
						<a href="https://twitter.com/solwininfotech" class="twitter-follow-button" data-show-count="true" data-show-screen-name="true" data-dnt="true">Follow @solwininfotech</a>
						<script>!function (d, s, id) {
								var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
								if (!d.getElementById(id)) {
									js = d.createElement(s);
									js.id = id;
									js.src = p + '://platform.twitter.com/widgets.js';
									fjs.parentNode.insertBefore(js, fjs);
								}
							}(document, 'script', 'twitter-wjs');</script>
					</div>
					<!-- Facebook -->
					<div style='display:block;margin-bottom: 10px;'>
						<div id="fb-root"></div>
						<script>(function (d, s, id) {
								var js, fjs = d.getElementsByTagName(s)[0];
								if (d.getElementById(id))
									return;
								js = d.createElement(s);
								js.id = id;
								js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
								fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
						<div class="fb-share-button" data-href="https://wordpress.org/plugins/user-activity-log/" data-layout="button_count"></div>
					</div>
					<!-- Google Plus -->
					<div style='display:block;margin-bottom: 8px;'>
						<!-- Place this tag where you want the +1 button to render. -->
						<div class="g-plusone" data-href="https://wordpress.org/plugins/user-activity-log/"></div>
						<!-- Place this tag after the last +1 button tag. -->
						<script type="text/javascript">
							(function () {
								var po = document.createElement('script');
								po.type = 'text/javascript';
								po.async = true;
								po.src = 'https://apis.google.com/js/platform.js';
								var s = document.getElementsByTagName('script')[0];
								s.parentNode.insertBefore(po, s);
							})();
						</script>
					</div>
					<div style='display:block;margin-bottom: 8px;'>
						<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
						<script type="IN/Share" data-url="https://wordpress.org/plugins/user-activity-log/" data-counter="right" data-showzero="true"></script>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}
// Deactivate user activity pro plugin when user activity lite is activate.
register_activation_hook( __FILE__, 'ual_deactivate_ualp' );
if ( ! function_exists( 'ual_deactivate_ualp' ) ) {

	function ual_deactivate_ualp() {
		if ( is_plugin_active( 'user-activity-log-pro/user_activity_log_pro.php' ) ) {
			deactivate_plugins( 'user-activity-log-pro/user_activity_log_pro.php' );
		}
	}
}

// Deactivate user activity pro plugin when user activity lite is activate.
register_deactivation_hook( __FILE__, 'ual_update_optin' );
if ( ! function_exists( 'ual_update_optin' ) ) {

	function ual_update_optin() {
		update_option( 'ual_is_optin', '' );
	}
}


if ( ! function_exists( 'user_activity_log_plugin_links' ) ) {

	function user_activity_log_plugin_links( $links ) {
		$links[] = '<a class="documentation_ual_plugin" target="_blank" href="' . esc_url( 'https://www.solwininfotech.com/documents/wordpress/user-activity-log-lite/' ) . '">' . esc_attr__( 'Documentation', 'user-activity-log' ) . '</a>';
		$links[] = '<a class="ual_upgrade_link" target="_blank" href="' . esc_url( 'http://useractivitylog.solwininfotech.com/#ualp_versions' ) . '">' . esc_attr__( 'Upgrade', 'user-activity-log' ) . '</a>';
		return $links;
	}
}

/**
 * Add css for upgrade link
 */
if ( ! function_exists( 'ual_upgrade_link_css' ) ) {

	function ual_upgrade_link_css() {
		echo '<style>.row-actions a.ual_upgrade_link { color: #4caf50; }</style>';
	}
}

/*
 * Delete activity log as per selected days
 */
if ( ! function_exists( 'user_activity_log_delete_log' ) ) {

	function user_activity_log_delete_log() {
		global $wpdb;
		$getlogspan = '';
		$getlogspan = get_option( 'ualpKeepLogsDay' );
		$table_name = $wpdb->prefix . 'ualp_user_activity';
		if ( ! empty( $getlogspan ) ) {
			$wpdb->query( "DELETE FROM $table_name WHERE modified_date < NOW() - INTERVAL $getlogspan DAY" );
		}
	}
}
add_action( 'init', 'user_activity_log_delete_log' );


/*
 * advertisement popup
 */
if ( ! function_exists( 'ual_adv_popup' ) ) {

	function ual_adv_popup() {
		$screen = get_current_screen();
		if ( isset( $_GET['page'] ) && ( 'user_action_log' == $_GET['page'] || 'general_settings_menu' == $_GET['page'] ) ) {
			?>
			<div id="ual-advertisement-popup" style="display: none">
				<div class="ual-advertisement-cover">
					<a class="ual-advertisement-link" target="_blank" href="<?php echo esc_url( 'https://codecanyon.net/item/user-activity-log-pro-for-wordpress/18201203?ref=solwin' ); ?>">
						<img src="<?php echo esc_url( UAL_PLUGIN_URL ) . '/images/ual_advertisement_popup.png'; ?>" />
					</a>
				</div>
			</div>
			<?php
		}
	}
}

add_action( 'activated_plugin', 'ual_activated_plugin',10 );
if ( ! function_exists( 'ual_activated_plugin' ) ) {
	function ual_activated_plugin( $plugin ) {
		if( dirname($plugin) == dirname(plugin_basename( __FILE__ ) )) {
			$ual_is_optin = get_option( 'ual_is_optin' );
			if ( 'yes' == $ual_is_optin || 'no' == $ual_is_optin ) {
				exit( wp_safe_redirect( admin_url( 'admin.php?page=user_action_log' ) ) );
			} else {
				exit( wp_safe_redirect( admin_url( 'admin.php?page=user_welcome_page' ) ) );
			}
		}
		
	}
}
add_action('admin_init','ual_export_log');
if(!function_exists('ual_export_log')){
    function ual_export_log(){
        if (is_admin()) {
            if (isset($_GET['export']) && $_GET['export'] == 'user_logs' && isset($_GET['export-nonce']) && $_GET['export-nonce'] != "") {
                $userrole = $username = $type = $search = $dateshow = $showip = $logformat = "";
                if(isset($_GET['userrole'])){
                    $userrole = sanitize_text_field($_GET['userrole']);
                }
                if(isset($_GET['username'])){
                    $username = sanitize_text_field($_GET['username']);
                }
                if(isset($_GET['type'])){
                    $type = sanitize_text_field($_GET['type']);
                }
                
                if(isset($_GET['txtsearch'])){
                    $search = sanitize_text_field($_GET['txtsearch']);
                }
				if(isset($_GET['dateshow'])){
                    $dateshow = sanitize_text_field($_GET['dateshow']);
                }
				if(isset($_GET['showip'])){
                    $showip = sanitize_text_field($_GET['showip']);
                }
				if(isset($_GET['logformat'])){
                    $logformat = sanitize_text_field($_GET['logformat']);
                }
                ualExportUserLog($userrole,$username,$type,$search, $dateshow, $showip, $logformat );
                exit();
            }
        }
    }
}
if(!function_exists('ualExportUserLog')){
    function ualExportUserLog($userrole,$username,$type,$search,$dateshow,$showip,$logformat) {
        global $wpdb, $query;
        $Header = array();
        $where = " where 1 = 1";
        if(isset($userrole) && $userrole != ''){
            $where .=' AND user_role LIKE "%%'.$userrole.'%%"';
        }
        if(isset($username) && $username != ''){
            $where.=" AND user_name like '$username'";
        }
        if(isset($type) && $type != ''){
            $where.=" AND object_type like '$type'";
        }
		if(isset($showip) && $showip != ''){
            $where.=" AND ip_address = '$showip'";
        }
        if(isset($time) && $time != ''){
            $current_time = current_time('timestamp');

            $start_time = mktime(0, 0, 0, date('m', $current_time), date('d', $current_time), date('Y', $current_time));
            $end_time = mktime(23, 59, 59, date('m', $current_time), date('d', $current_time), date('Y', $current_time));

            if($time == 'today'){
                $start_time = $current_time;
                $start_time = strtotime('today');
                $end_time = strtotime('+1 day', $current_time);
            }elseif ($time === 'yesterday') {
                $start_time = strtotime('yesterday', $start_time);
                $end_time = $current_time;
            } elseif ($time === 'week') {
                $start_time = strtotime('-1 week', $start_time);
                $end_time = strtotime('+1 day', $current_time);
            } 
            elseif ($time === 'this-month') {
                $start_time = date('Y-m-01');
                $start_time = strtotime($start_time);

                $end_time = date('Y-m-31');
                $end_time = strtotime($end_time);
            }
            elseif ($time === 'month') {
                $start_time = strtotime('-1 month', $start_time);
                $end_time = strtotime('+1 day', $current_time);
            }
            elseif ($time === '2-month') {
                $start_time = strtotime('-2 month', $start_time);
                $end_time = strtotime('+1 day', $current_time);
            }
            elseif ($time === '3-month') {
                $start_time = strtotime('-3 month', $start_time);
                $end_time = strtotime('+1 day', $current_time);
            }
            elseif ($time === '6-month') {
                $start_time = strtotime('-6 month', $start_time);
                $end_time = strtotime('+1 day', $current_time);
            }
            elseif ($time === 'this-year') {
                $start_time = date('Y-01-01');
                $start_time = strtotime($start_time);

                $end_time = date('Y-12-31');
                $end_time = strtotime($end_time);
            }
            elseif ($time === 'last-year') {
                $start_time = date('Y-01-01');
                $start_time = strtotime($start_time);
                $start_time = strtotime('-1 year',$start_time);

                $end_time = date('Y-12-31');
                $end_time = strtotime($end_time);
                $end_time = strtotime('-1 year',$end_time);
            }
            elseif ($time === 'custom') {
                if(isset($start_date) && $start_date != ''){
                    $custom_start_date = $start_date;
                    $start_time = strtotime($custom_start_date.' 23:59:59');
                    if(date('Y-m-d H:i:s', $start_time) > date('Y-m-d')){
                        $start_time = strtotime($custom_start_date.' 23:59:59');
                    } else {
                        $start_time = strtotime('-1 day', $start_time);
                    }
                }
                if(isset($end_date) && $end_date != ''){
                    $end_time = strtotime($end_date.' 23:59:59');
                    $end_time = strtotime('+1 day', $end_time);
                }
            }
           
            if($start_time != '') {
                $start_time = date('Y-m-d H:i:s', $start_time);
            }
            if($end_time != '') {
                $end_time = date('Y-m-d H:i:s', $end_time);
            }
            if($start_time != '') {
                if ($time === 'custom') {
                    $where .= " AND modified_date >= '$start_time' ";
                } else {
                    $where .= " AND modified_date > '$start_time' ";
                }
               
            }
            if($end_time != '') {
                $where .= " AND modified_date < '$end_time'";
            }
        }
        if (isset($search) && $search != "") {
            $where.=" AND user_name like '$search' or user_role like '$search' or object_type like '$search' or action like '$search'";
        }
		if (isset($dateshow) && in_array($dateshow, array('today', 'yesterday', 'week','this-month', 'month','2-month','3-month','6-month','this-year','last-year','custom'))) {
			$get_time = $dateshow;
            $current_time = current_time('timestamp');
            $start_time = mktime(0, 0, 0, date('m', $current_time), date('d', $current_time), date('Y', $current_time));
            $end_time = mktime(23, 59, 59, date('m', $current_time), date('d', $current_time), date('Y', $current_time));
            if ($get_time == 'today') {
                $start_time = $current_time;
                $end_time = strtotime('+1 day', $current_time);

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);

            } elseif ($get_time === 'yesterday') {
                $start_time = strtotime('yesterday', $start_time);
                $end_time = $current_time;

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);

            } elseif ($get_time === 'week') {
                $start_time = strtotime('-1 week', $start_time);
                $end_time = strtotime('+1 day', $current_time);

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);

            } elseif ($get_time === 'this-month') {
                $start_time = date('Y-m-01');
                $start_time = strtotime($start_time);

                $end_time = date('Y-m-31');
                $end_time = strtotime($end_time);

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);

            } elseif ($get_time === 'month') {
                $start_time = strtotime('-1 month', $start_time);
                $end_time = strtotime('+1 day', $current_time);

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);

            } elseif ($get_time === '2-month') {
                $start_time = strtotime('-2 month', $start_time);
                $end_time = strtotime('+1 day', $current_time);

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);

            } elseif ($get_time === '3-month') {
                $start_time = strtotime('-3 month', $start_time);
                $end_time = strtotime('+1 day', $current_time);

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);

            } elseif ($get_time === '6-month') {
                $start_time = strtotime('-6 month', $start_time);
                $end_time = strtotime('+1 day', $current_time);

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);

            }elseif ($get_time === 'this-year') {
                $start_time = date('Y-01-01');
                $start_time = strtotime($start_time);

                $end_time = date('Y-12-31');
                $end_time = strtotime($end_time);

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);
            }elseif($get_time === 'last-year'){

                $start_time = date('Y-01-01');
                $start_time = strtotime($start_time);
                $start_time = strtotime('-1 year',$start_time);

                $end_time = date('Y-12-31');
                $end_time = strtotime($end_time);
                $end_time = strtotime('-1 year',$end_time);

                $start_time = date('Y-m-d', $start_time);
                $end_time = date('Y-m-d', $end_time);
                $where .= $wpdb->prepare(' AND modified_date > "%s" AND modified_date < "%s"', $start_time, $end_time);
            } elseif ($get_time === 'custom') {
                $custom_start_date = $_REQUEST['start_date'];
                $custom_end_date = $_REQUEST['end_date'];
                if(isset($custom_start_date) && $custom_start_date != ''){
                    $start_time = strtotime($custom_start_date.' 23:59:59');
                    if(date('Y-m-d H:i:s', $start_time) > date('Y-m-d H:i:s')){
                        $start_time = strtotime($custom_start_date.' 23:59:59');
                    } else {
                        $start_time = strtotime('-1 day', $start_time);
                    }
                    $start_time = date('Y-m-d H:i:s', $start_time);
                    $where .= $wpdb->prepare(' AND modified_date >= "%s"', $start_time);
                }
                if(isset($custom_end_date) && $custom_end_date != ''){
                    $end_time = strtotime($custom_end_date.' 23:59:59');
                    $end_time = strtotime('+1 day', $end_time);
                    $end_time = date('Y-m-d H:i:s', $end_time);
                    $where .= $wpdb->prepare(' AND modified_date < "%s"', $end_time);
                }
                
            }
		}
		$table_name = $wpdb->prefix . 'ualp_user_activity';
        $getLogQuery = "SELECT * FROM ".$table_name." $where ORDER BY modified_date desc";
        $resultLogQuery = $wpdb->get_results($getLogQuery);
		print_r($resultLogQuery);
        $dataContent = array();
        $c = 0;
        $date_format = get_option('date_format');
        $time_format = get_option('time_format');
        $logged_head = '';

        if (!empty($resultLogQuery)) {
            foreach ($resultLogQuery as $resultLog) {
                $c++;
                $resultLog = (array)$resultLog;
                if(!ualAllowIp()) {
                    if (isset($resultLog['ip_address'])) {
                        unset($resultLog['ip_address']);
                    }
                }
                if(isset($resultLog['uactid'])) {
                    $resultLog['uactid'] = $c;
                }
                if(isset($resultLog['favorite'])) {
					unset($resultLog['favorite']);
                }
                if(isset($resultLog['modified_date'])) {
                    $get_date = strtotime($resultLog['modified_date']);
                    $date = date($date_format, $get_date);
                    $time = date($time_format, $get_date);
                    $resultLog['modified_date'] = $date . " " . $time;
                }
                if(isset($resultLog['description'])) {
                    if($resultLog['description'] == ''){
                        $action = $post_title = '';
                        $action = $resultLog['action'];
                        $post_title = $resultLog['post_title'];
                        $resultLog['description'] = $action .' : '. $post_title;
                    } else {
                        $resultLog['description'] = html_entity_decode($resultLog['description']);
						// $resultLog['description'] = $resultLog['description'];
                    }
                }
                unset($resultLog['post_id']);
                unset($resultLog['user_id']);
                unset($resultLog['post_title']);
                unset($resultLog['action']);
                unset($resultLog['t_session']);
                if($logged_head != 'yes') {
                    foreach ($resultLog as $resultLogKey => $resultLogVal) {                    
                        if (!in_array($resultLogKey, $Header)) {
                            $Header[] = $resultLogKey;
                        }
                    }
                    $resultLog[$resultLogKey] = html_entity_decode($resultLogVal);
                }
                $logged_head = 'yes';
                $dataContent[] = $resultLog;
            }
        }
		if($logformat == 'csv') {
			$Header = array_values($Header);
            for($h=0;$h<sizeof($Header);$h++){
                if($Header[$h] == 'uactid'){
                    $Header[$h] = esc_html__('Sr No.', 'user-activity-log');
                }
                if($Header[$h] == 'user_name'){
                    $Header[$h] = esc_html__('Author Name', 'user-activity-log');
                }
                if($Header[$h] == 'user_role'){
                    $Header[$h] = esc_html__('Author Role', 'user-activity-log');
                }
                if($Header[$h] == 'user_email'){
                    $Header[$h] = esc_html__('Author E-mail', 'user-activity-log');
                }
                if(ualAllowIp()) {
                    if($Header[$h] == 'ip_address'){
                        $Header[$h] = esc_html__('IP Address', 'user-activity-log');
                    }
                }
                if($Header[$h] == 'modified_date'){
                    $Header[$h] = esc_html__('Date', 'user-activity-log');
                }
                if($Header[$h] == 'object_type'){
                    $Header[$h] = esc_html__('Activity Type', 'user-activity-log');
                }
                if($Header[$h] == 'hook'){
                    $Header[$h] = esc_html__('Activity Hook', 'user-activity-log');
                }
                if($Header[$h] == 'description'){
                    $Header[$h] = esc_html__('Description', 'user-activity-log');
                }
            }
            $export_delimiter = ',';
            $random_id = rand();
            $csv_file_name = "export_user_logs_" . date("Y-m-d_H-i-s", time()) . ".csv";
            ualCSVOutput($csv_file_name, $dataContent, $Header, $export_delimiter);
		}
		if($logformat == 'json') {
            $json_file_name = "export_user_logs_" . date("Y-m-d_H-i-s", time()) . ".json";
            ualJsonOutput($json_file_name, $dataContent);
        }   
        
        do_action('ual_export_activity_log');
    }
}
function ualJsonOutput($file_name, $content) {
    file_put_contents($file_name, json_encode($content));
    header("Content-type: application/json");
    header('Content-Disposition: attachment; filename="'.basename($file_name).'"'); 
    header('Content-Length: ' . filesize($file_name));
    readfile($file_name);
}
if(!function_exists('ualCSVOutput')){
    function ualCSVOutput($filename = null, $data = array(), $fields = array(), $delimiter = null) {
        if ($delimiter === null) {
            $delimiter = ',';
        }
        $random_id = rand();
        $filename = "export_user_logs_" . date("Y-m-d_H-i-s", time()) . ".csv";
        if ($filename) {
            $data = ualUnparse($data, $fields, null, null, $delimiter);
            header('Content-type: application/csv');
            header('Content-Disposition: attachment; filename="' . $filename . '"');
            echo $data;
        }
        return $data;
    }
}

if(!function_exists('ualUnparse')){
    function ualUnparse($data = array(), $fields = array(), $append = false, $is_php = false, $delimiter = null) {
        $linefeed = "\r\n";
        $string = ($is_php) ? "<?php header('Status: 403'); die(' '); ?>" . $linefeed : '';
        $entry = array();
        // create heading
        if (!empty($fields)) {
            foreach ($fields as $key => $value) {
                $entry[] = ualEncloseValue($value);
            }
            $string .= implode($delimiter, $entry) . $linefeed;
            $entry = array();
        }
        // create data
        foreach ($data as $key => $row) {
            foreach ($row as $field => $value) {
                $entry[] = ualEncloseValue($value);
            }
            $string .= implode($delimiter, $entry) . $linefeed;
            $entry = array();
        }
        return $string;
    }
}

if(!function_exists('ualEncloseValue')){
    function ualEncloseValue($value = null) {
        $this_delimiter = ',';
        $this_enclosure = '"';
        if ($value !== null && $value != '') {
            $delimiter = preg_quote($this_delimiter, '/');
            $enclosure = preg_quote($this_enclosure, '/');
            if (isset( $value[0] ) == '=')
                // $value = "'" . $value;
				$value = $value;
            if (preg_match("/" . $delimiter . "|" . $enclosure . "|\n|\r/i", $value) || (isset( $value[0] ) == ' ' || substr($value, -1) == ' ')) {
                $value = str_replace($this_enclosure, $this_enclosure . $this_enclosure, $value);
                $value = $this_enclosure . $value . $this_enclosure;
            }
        }
        return $value;
    }
}
add_action( 'admin_footer', 'ual_ip_details_popup_template' );

function ual_ip_details_popup_template() {
    ?>
    <div class="ualp_ip_details_popup">
        <div class="ualp_ip_details_popup_arrow"></div>
        <div class="ualp_ip_details_popup_close"><button class="ualp_ip_details_popup_close_button">×</button></div>
        <div class="ualp_ip_details_popup_content"></div>
    </div>
    <?php
}