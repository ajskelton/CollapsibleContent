<?php
/**
 * Description
 *
 * @package   Ajskelton\Module\FAQ\Custom
 * @since     1.0.0
 * @author    ajskelton
 * @link      anthonyskelton.com
 * @license   GNU General Public License 2.0+
 */
namespace Ajskelton\Module\FAQ\Custom;

use Ajskelton\Module\Custom as customModule;

add_filter( 'add_custom_post_type_runtime_config', __NAMESPACE__ . '\register_faq_custom_post_type' );
/**
 * Register the custom post type
 *
 * @since 1.0.0
 *
 * @param array $configs Array of all the custom post type configurations
 *
 * @return array
 */
function register_faq_custom_post_type( array $configs ) {
	$config = include( COLLAPSIBLE_CONTENT_DIR . 'config/faq/post-type.php' );

	$configs[ $config['post_type'] ] = $config;

	return $configs;
}