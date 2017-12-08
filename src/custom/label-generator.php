<?php
/**
 * Generate the labels for either a taxonomy or post type
 *
 * @package   Ajskelton\Module\Custom
 * @since     1.0.0
 * @author    ajskelton
 * @link      anthonyskelton.com
 * @license   GNU General Public License 2.0+
 */

namespace Ajskelton\Module\Custom;

/**
 * Get the post type labels configuration
 *
 * array $config Array of runtime configuration parameters.
 *
 * @return array
 */
function generate_the_custom_labels( array $config, $custom_type = 'post_type' ) {

	$labels = array(
		'name'               => _x( $config['plural_label'], 'post type general name', $config['text_domain'] ),
		'singular_name'      => _x( $config['singular_label'], 'post type singular name', $config['text_domain'] ),
		'menu_name'          => _x( $config['plural_label'], 'admin menu', $config['text_domain'] ),
		'name_admin_bar'     => _x( $config['singular_label'], 'add new on admin bar', $config['text_domain'] ),
		'add_new'            => _x( 'Add New', $config['post_type'], $config['text_domain'] ),
		'add_new_item'       => __( 'Add New ' . $config['singular_label'], $config['text_domain'] ),
		'new_item'           => __( 'New ' . $config['singular_label'], $config['text_domain'] ),
		'edit_item'          => __( 'Edit ' . $config['singular_label'], $config['text_domain'] ),
		'view_item'          => __( 'View ' . $config['singular_label'], $config['text_domain'] ),
		'all_items'          => __( 'All ' . $config['plural_label'], $config['text_domain'] ),
		'search_items'       => __( 'Search ' . $config['plural_label'], $config['text_domain'] ),
		'parent_item_colon'  => __( 'Parent ' . $config['singular_label'] . ':', $config['text_domain'] ),
		'not_found'          => __( 'No ' . $config['in_sentence_label'] . ' found.', $config['text_domain'] ),
		'not_found_in_trash' => __( 'No ' . $config['in_sentence_label'] . ' found in Trash.', $config['text_domain'] )
	);

	return $labels;
}