<?php
/**
 * Runtime configuration for the FAQ Custom Post Type
 *
 * @package   ${NAMESPACE}
 * @since     1.0.0
 * @author    ajskelton
 * @link      anthonyskelton.com
 * @license   GNU General Public License 2.0+
 */

namespace Ajskelton\Module\Custom;


return array(
	'post_type' => 'galleries',
	'labels'    => array(
		'post_type'         => 'galleries',
		'singular_label'    => 'Gallery',
		'plural_label'      => 'Galleries',
		'in_sentence_label' => 'Gallery',
		'text_domain'       => FAQ_MODULE_TEXT_DOMAIN
	),
	'features'  => array(
		'base_post_type' => 'post',
		'exclude'        => array(
			'excerpt',
			'comments',
			'trackbacks',
			'custom-fields',
		),
		'additional'     => array(
			'page-attributes',
		),
	),
	'args'      => array(
		'description' => 'Galleries',
		'label'       => __( 'Galleries', FAQ_MODULE_TEXT_DOMAIN ),
		'labels'      => '', // automatically generate the labels
		'menu_icon'   => 'dashicons-images-alt',
		'public'      => true,
		'supports'    => '', // automatically generate the support features
		'has_archive' => true,
	),
);