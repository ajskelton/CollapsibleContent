<?php
/**
 * Taxonomy handler
 *
 * @package   Ajskelton\Module\FAQ\Custom
 * @since     1.0.0
 * @author    ajskelton
 * @link      anthonyskelton.com
 * @license   GNU General Public License 2.0+
 */
namespace Ajskelton\Module\FAQ\Custom;

add_action( 'init', __NAMESPACE__ . '\register_custom_taxonomies', 0 );

/**
 * Register the custom taxonomy
 *
 * @since 1.0.0
 *
 * @return void
 */
function register_custom_taxonomies() {

	$args = array(
		'label'             => __( 'Topics', FAQ_MODULE_TEXT_DOMAIN ),
		'labels'            => get_taxonomy_labels_config( 'Topic', 'Topics' ),
		'hierarchical'      => true,
		'show_admin_column' => true,
		'public'            => false,
		'show_ui'           => true,
	);

	register_taxonomy( 'topic', array( 'faq' ), $args );
}

/**
 * Get the taxonomy labels configuration
 *
 * @param string $singular_label
 * @param string $plural_label
 * @param string $menu_label (optional)
 *
 * @return array
 */
function get_taxonomy_labels_config( $singular_label, $plural_label, $menu_label = '' ) {
	if ( ! $menu_label ) {
		$menu_label = $plural_label;
	}

	return array(

	);
}