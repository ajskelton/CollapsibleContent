<?php
/**
 * Runtime configuration for the FAQ Custom Post Type
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
	 * The post type name
	=======================================*/
	'post_type' => 'faq',

	/**======================================
	 * These are the label configurations
	=======================================*/
	'labels'    => array(
		'post_type'         => 'faq',
		'singular_label'    => 'Frequently Asked Question (FAQ)',
		'plural_label'      => 'FAQs',
		'in_sentence_label' => 'FAQ',
		'text_domain'       => FAQ_MODULE_TEXT_DOMAIN
	),

	/**======================================
	 * Supported features for this post type
	=======================================*/
	'features'  => array(
		'base_post_type' => 'post',
		'exclude'        => array(
			'excerpt',
			'comments',
			'trackbacks',
			'custom-fields',
			'thumbnail',
		),
		'additional'     => array(
			'page-attributes',
		),
	),

	/**======================================
	 * Registration arguments
	=======================================*/
	'args'      => array(
		'description' => 'Frequently Asked Questions',
		'label'       => __( 'FAQs', FAQ_MODULE_TEXT_DOMAIN ),
		'labels'      => '', // automatically generate the labels
		'menu_icon'   => 'dashicons-editor-help',
		'public'      => true,
		'supports'    => '', // automatically generate the support features
		'has_archive' => true,
	),
);