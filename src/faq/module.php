<?php
/**
 * FAQ Module Handler
 *
 * @package   Ajskelton\Module\FAQ
 * @since     1.0.0
 * @author    ajskelton
 * @link      anthonyskelton.com
 * @license   GNU General Public License 2.0+
 */
namespace Ajskelton\Module\FAQ;

define( 'FAQ_MODULE_TEXT_DOMAIN', COLLAPSIBLE_CONTENT_TEXT_DOMAIN );
define( 'FAQ_MODULE_DIR', __DIR__ );

/**
 * Autoload plugin files
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoload() {
	$files = array(
		'custom/post-type.php',
		'custom/taxonomy.php',
		'shortcode/shortcode.php',
		'template/helpers.php',
	);

	foreach ( $files as $file ) {
		include( __DIR__ . '/' . $file );
	}
}

autoload();
