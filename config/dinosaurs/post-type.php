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
	'post_type' => 'dinosaurs',
	'labels'    => array(
		'post_type'         => 'dinosaurs',
		'singular_label'    => 'Dinosaur',
		'plural_label'      => 'Dinosaurs',
		'in_sentence_label' => 'Dinosaur',
		'text_domain'       => FAQ_MODULE_TEXT_DOMAIN
	),
	'features'  => array(
		'base_post_type' => 'post',
		'exclude'        => array(
			'excerpt',
			'trackbacks',
			'custom-fields',
		),
		'additional'     => array(
			'page-attributes',
		),
	),
	'args'      => array(
		'description' => 'Dinosaurs',
		'label'       => __( 'Dinosaurs', FAQ_MODULE_TEXT_DOMAIN ),
		'labels'      => '', // automatically generate the labels
		'menu_icon'   => 'dashicons-editor-customchar',
		'public'      => true,
		'supports'    => '', // automatically generate the support features
		'has_archive' => true,
	),
);