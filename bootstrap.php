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
 * Version: 1.0.0
 * Author: ajskelton
 * Author URI: https://anthonyskelton.com
 * Text Domain: collapsible_content
 * Requires WP: 4.7
 * Requires PHP: 5.5
 *
 */
namespace Ajskelton\CollapsibleContent;

if ( ! defined( 'ABSPATH' ) ) {
	exit( "Oh, silly, there's nothing to see here." );
}

include( __DIR__ . '/src/shortcode/shortcodes.php' );

