<?php
/**
 * Include all CSSLLC mu-plugins.
 *
 * Description: Collection of WordPress mu-plugins to enhance, customize, and protect a WordPress installation.
 * Plugin URI: https://github.com/cssllc/mu-plugins
 * Author: Caleb Stauffer
 */

function load_cssllc_muplugins() {

	if ( did_action( 'cssllc_muplugins_loaded' ) )
		return;

	$files = array();
	$dh = opendir( WPMU_PLUGIN_DIR . '/cssllc' );

	if ( !$dh )
		return $actions;

	while ( ( $plugin = readdir( $dh ) ) !== false ) {
		if ( 'index.php' === substr( $plugin, -9 ) )
			continue;

		if ( substr( $plugin, -4 ) == '.php' )
			$files[] = $plugin;
	}

	closedir( $dh );
	sort( $files );

	$loaded_files = array();

	foreach ( $files as $file ) {
		require_once 'cssllc/' . $file;
		$loaded_files[] = '├─ ' . $file;
		do_action( 'mu_plugin_loaded', 'cssllc/' . $file );
	}

	$last_file = array_pop( $loaded_files );
	$last_file = str_replace( '├', '└', $last_file );
	$loaded_files[] = $last_file;

	do_action( 'cssllc_muplugins_loaded' );

	add_filter( 'plugin_action_links', function( $actions, $file ) use( $loaded_files ) {
		if ( basename( __FILE__ ) !== $file )
			return $actions;

		array_push( $actions, '<span style="display: inline-block; font-family: Consolas, Monaco, monospace; font-size: 0.9em; line-height: 1.2em; color: #333;">' . implode( '<br />', $loaded_files ) ) . '</span>';

		return $actions;
	}, 9999, 2 );

}

load_cssllc_muplugins();

?>