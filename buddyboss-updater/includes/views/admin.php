<div class="wrap buddyboss-updater-wrap">

    <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

    <div class="buddyboss-updater-block-container">
        <div class="buddyboss-updater-block">
            <div class="inside">
                <h2><?php _e( 'Auto Connect (Recommended)', 'buddyboss-updater' ); ?></h2>
                <p>
					<?php printf( __( 'Click the "Connect to BuddyBoss" button to log into your BuddyBoss account. Then click "Allow" to have your license automatically filled in to activate your products.', 'buddyboss-updater' ) ); ?>
                </p>
                <br/>
                <button id="btn_bb_connect" class="button button-primary">
					<?php _e( 'Connect to BuddyBoss', 'buddyboss-updater' ); ?>
                </button>
                <span class="connecting" style="display:none;"><?php _e( 'Connecting', 'buddyboss-updater' ); ?></span>
            </div>
        </div>

        <div class="buddyboss-updater-block">
            <div class="inside">
                <h2><?php _e( 'Manual Connect', 'buddyboss-updater' ); ?></h2>
                <p>
                <li>
					<?php printf( __( 'Log into %s', 'buddyboss-updater' ), '<a href="https://www.buddyboss.com/wp-admin">BuddyBoss.com</a>' ); ?>
                </li>
                <li>
					<?php printf( __( 'Go to your %s', 'buddyboss-updater' ), '<a href="https://www.buddyboss.com/my-account/">Account</a>' ); ?>
                </li>
                <li>
					<?php _e( 'Go to the "Subscriptions" tab', 'buddyboss-updater' ); ?>
                </li>
                <li>
					<?php _e( 'Find your product\'s license key', 'buddyboss-updater' ); ?>
                </li>
                <li>
					<?php _e( 'Enter your license key below', 'buddyboss-updater' ); ?>
                </li>
                <li>
					<?php _e( 'Enter your BuddyBoss account email', 'buddyboss-updater' ); ?>
                </li>
                <li>
					<?php _e( 'Click "Update License"', 'buddyboss-updater' ); ?>
                </li>
                </p>
            </div>
        </div>

        <div class="buddyboss-updater-block">
            <div class="inside">
                <h2><?php _e( 'Benefits of a License', 'buddyboss-updater' ); ?></h2>
                <ul>
                    <li>
                        <strong><?php _e( 'Stay Up to Date', 'buddyboss-updater' ); ?></strong><br/>
						<?php _e( 'Get the latest features right away', 'buddyboss-updater' ); ?>
                    </li>
                    <li>
                        <strong><?php _e( 'Admin Notifications', 'buddyboss-updater' ); ?></strong><br/>
						<?php _e( 'Get updates in WordPress', 'buddyboss-updater' ); ?>
                    </li>
                    <li>
                        <strong><?php _e( 'Professional Support', 'buddyboss-updater' ); ?></strong><br/>
						<?php _e( 'Get help with any questions', 'buddyboss-updater' ); ?>
                    </li>
                </ul>
            </div>
        </div>

    </div>

	<?php
	$controller = BuddyBoss_Updater_Admin::instance();
	$controller->show_form_post_response();

	$controller->bb_connect_ui();
	?>
    <div class='buddyboss-updater-settings clearfix'>
        <div class="setting-tabs-wrapper">
            <ul>
				<?php $controller->print_settings_tabs(); ?>
            </ul>
        </div>
        <div class='tabs-panel'>
			<?php $controller->print_settings_content(); ?>
        </div>
    </div><!-- .buddyboss-updater-settings -->

</div>
