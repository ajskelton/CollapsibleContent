<?php
/**
 * Collapsible Content Plugin
 *
 * @package   Ajskelton\CollapsibleContent
 * @since     1.0.0
 * @author    ajskelton
 * @link      anthonyskelton.com
 * @license   GNU General Public License 2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Collapsible Content
 * Plugin URI: _
 * Description: Collapsible Content is a WordPress plugin that shows and hides hidden content.
 * Version: 1.2.0
 * Author: ajskelton
 * Author URI: https://anthonyskelton.com
 * Text Domain: collapsible_content
 * Requires WP: 4.7
 * Requires PHP: 5.5
 *
 */

namespace Ajskelton\CollapsibleContent;
use Ajskelton\Module\Custom as CustomModule;

if ( ! defined( 'ABSPATH' ) ) {
	exit( "Oh, silly, there's nothing to see here." );
}

define( 'COLLAPSIBLE_CONTENT_PLUGIN', __FILE__ );
define( 'COLLAPSIBLE_CONTENT_DIR', trailingslashit( __DIR__ ) );
$plugin_url = plugin_dir_url( __FILE__ );
if ( is_ssl() ) {
	$plugin_url = str_replace( 'http://', 'https://', $plugin_url );
}
define( 'COLLAPSIBLE_CONTENT_URL', $plugin_url );
define( 'COLLAPSIBLE_CONTENT_TEXT_DOMAIN', 'collapsible_content' );

include( __DIR__ . '/src/plugin.php' );

CustomModule\register_plugin( __FILE__ );
