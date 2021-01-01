<?php
/**
 * Theme setup.
 */

defined( 'ABSPATH' ) || die();

add_theme_support( 'html5' );
add_theme_support( 'title-tag' );
add_theme_support( 'align-wide' );
add_theme_support( 'post-thumbnails' );

register_nav_menus( array() );

/*
 ######   #######  ##    ##  ######  ########    ###    ##    ## ########  ######
##    ## ##     ## ###   ## ##    ##    ##      ## ##   ###   ##    ##    ##    ##
##       ##     ## ####  ## ##          ##     ##   ##  ####  ##    ##    ##
##       ##     ## ## ## ##  ######     ##    ##     ## ## ## ##    ##     ######
##       ##     ## ##  ####       ##    ##    ######### ##  ####    ##          ##
##    ## ##     ## ##   ### ##    ##    ##    ##     ## ##   ###    ##    ##    ##
 ######   #######  ##    ##  ######     ##    ##     ## ##    ##    ##     ######
*/

# Theme constants.
define( 'THEME_PREFIX', 'calyx' );

# Debugging constants.
defined( 'WP_LOCAL_DEV'     ) || define( 'WP_LOCAL_DEV',     false      );
defined( 'WP_DEVELOP'       ) || define( 'WP_DEVELOP',       true       );
defined( 'WP_DEBUG'         ) || define( 'WP_DEBUG',         WP_DEVELOP );
defined( 'WP_DEBUG_LOG'     ) || define( 'WP_DEBUG_LOG',     WP_DEBUG   );
defined( 'WP_DEBUG_DISPLAY' ) || define( 'WP_DEBUG_DISPLAY', WP_DEBUG   );
defined( 'SCRIPT_DEBUG'     ) || define( 'SCRIPT_DEBUG',     WP_DEBUG   );

# Asset constants.
defined( 'CONCATENATE_SCRIPTS' ) || define( 'CONCATENATE_SCRIPTS', !SCRIPT_DEBUG );
defined( 'COMPRESS_SCRIPTS'    ) || define( 'COMPRESS_SCRIPTS',    !SCRIPT_DEBUG );
defined( 'COMPRESS_CSS'        ) || define( 'COMPRESS_CSS',        !SCRIPT_DEBUG );

# Plugin constants.
defined(  'QM_DISABLED' ) || define(  'QM_DISABLED', !WP_DEVELOP  );
defined( 'QMX_DISABLED' ) || define( 'QMX_DISABLED',  QM_DISABLED );
defined( 'ACF_LITE'     ) || define( 'ACF_LITE',     !WP_DEVELOP  );


/*
##     ##  #######   #######  ##    ##  ######
##     ## ##     ## ##     ## ##   ##  ##    ##
##     ## ##     ## ##     ## ##  ##   ##
######### ##     ## ##     ## #####     ######
##     ## ##     ## ##     ## ##  ##         ##
##     ## ##     ## ##     ## ##   ##  ##    ##
##     ##  #######   #######  ##    ##  ######
*/

add_action( 'init', function() { require_once trailingslashit( TEMPLATEPATH ) . 'assets/register.php'; } );


?>
