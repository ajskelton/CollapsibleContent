<?php
/**
 * Plugin Handler
 *
 * @package   Ajskelton\CollapsibleContent
 * @since     1.0.0
 * @author    ajskelton
 * @link      anthonyskelton.com
 * @license   GNU General Public License 2.0+
 */
namespace Ajskelton\CollapsibleContent;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
/**
 * Enqueue the plugin assets (scripts and styles).
 *
 * @since 1.0.0
 *
 * @return void
 */
function enqueue_assets() {
	wp_enqueue_style('dashicons');
	wp_enqueue_script(
		'collapsible-content-plugin-script',
		COLLAPSIBLE_CONTENT_URL . 'assets/dist/js/jquery.plugin.min.js',
		array('jquery'),
		'1.0.0',
		true
	);
}

/**
 * Autoload plugin files
 *
 * @since 1.2.0
 *
 * @return void
 */
function autoload() {
	$files = array(
		'shortcode/shortcodes.php',
		'faq/module.php',
	);

	foreach( $files as $file ) {
		include( __DIR__ . '/' . $file );
	}
}

autoload();