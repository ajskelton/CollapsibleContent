<?php
/**
 * Runtime configuration for the Topic Taxonomy
 *
 * @package   Ajskelton\Module\FAQ\Custom
 * @since     1.0.0
 * @author    ajskelton
 * @link      anthonyskelton.com
 * @license   GNU General Public License 2.0+
 */

namespace Ajskelton\Module\FAQ\Custom;

return array(

	/**======================================
	 * The taxonomy name
	=======================================*/
	'taxonomy' => 'topic',

	/**======================================
	 * These are the label configurations
	=======================================*/
	'labels' => array(
		'post_type'         => 'topic',
		'singular_label'    => 'Topic',
		'plural_label'      => 'Topics',
		'in_sentence_label' => 'topics',
		'text_domain'       => FAQ_MODULE_TEXT_DOMAIN,
	),

	/**======================================
	 * These are the arguments for registering the taxonomy
	=======================================*/
	'args' => array(
		'label'             => __( 'Topics', FAQ_MODULE_TEXT_DOMAIN ),
		'labels'            => '', // automatically generate the labels.
		'hierarchical'      => true,
		'show_admin_column' => true,
		'public'            => false,
		'show_ui'           => true,
	),

	/**======================================
	 * These are the post types to bind the taxonomy to.
	 =======================================*/
	'post_types' => array ( 'faq' ),
);