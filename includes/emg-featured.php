<?php

if ( ! defined( 'ABSPATH' ) ) exit;

function emg_featured_init() {
    $emg_featured_page = add_submenu_page('edit.php?post_type=easymediagallery', 'GhozyLab Premium Plugins', __('Premium Plugins', 'easmedia'), 'edit_posts', 'emg_premium_plugins', 'emg_premium_plugin_page');
}
add_action( 'admin_menu', 'emg_featured_init' );


function emg_premium_plugin_page() {
	ob_start(); ?>
	<div class="wrap" id="ghozy-featured">
		<h2>
			<?php _e( 'GhozyLab Premium Plugins', 'easmedia' ); ?>
		</h2>
		<p><?php _e( 'These plugins available on Lite and Pro version. You can download the Lite version <a href="'.admin_url( 'edit.php?post_type=easymediagallery&page=emg_free_plugins' ).'">here</a>', 'easmedia' ); ?></p>
		<?php echo emg_get_feed(); ?>
	</div>
	<?php
	echo ob_get_clean();
}


function emg_get_feed() {
	if ( false === ( $cache = get_transient( 'easymediagallery_featured_feed' ) ) ) {
		$feed = wp_remote_get( 'http://content.ghozylab.com/feed.php?c=featuredplugins', array( 'sslverify' => false ) );
		if ( ! is_wp_error( $feed ) ) {
			if ( isset( $feed['body'] ) && strlen( $feed['body'] ) > 0 ) {
				$cache = wp_remote_retrieve_body( $feed );
				set_transient( 'easymediagallery_featured_feed', $cache, 3600 );
			}
		} else {
			$cache = '<div class="error"><p>' . __( 'There was an error retrieving the list from the server. Please try again later.', 'easmedia' ) . '</div>';
		}
	}
	return $cache;
}