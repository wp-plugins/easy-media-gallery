<?php
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) )
	exit();

// Remove plugin options from database.
function spg_clean_data() {
	//global $wpdb;
	//$wpdb->query("DELETE FROM `wp_options` WHERE `option_name` LIKE 'emediagallery_%'");
	delete_option( 'easy_media_opt' );
	
// Remove plugin-specific custom post type entries.	
		$posts = get_posts( array(
		'numberposts' => -1,
		'post_type' => 'easymediagallery',
		'post_status' => 'any' ) );

			foreach ( $posts as $post )
				wp_delete_post( $post->ID, true );
	
// Remove plugin-specific custom taxonomies and terms.

		$tax = 'emediagallery' ;
			if( is_taxonomy( $tax ) ) {
				foreach ( $tax as $taxonomy ) {
					$terms = get_terms( $taxonomy, array( 'get ' => 'all' ) );
					foreach ( $terms as $term ) {
						wp_delete_term( $term->term_id, $taxonomy );}
						unset( $wp_taxonomies[$taxonomy] );
						}
			}
			
}

spg_clean_data();

?>