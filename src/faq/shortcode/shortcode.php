<?php
/**
 * FAQ Shortcode Processing
 *
 * @package   Ajskelton\Module\FAQ\Shortcode
 * @since     1.0.0
 * @author    ajskelton
 * @link      anthonyskelton.com
 * @license   GNU General Public License 2.0+
 */
namespace Ajskelton\Module\FAQ\Shortcode;

add_shortcode( 'faq', __NAMESPACE__ . '\process_the_shortcode' );
/**
 * Process the Shortcode to build a list of FAQs.
 *
 * @since 1.0.0
 *
 * @param array|string $user_defined_attributes User defined attributes for this shortcode instance
 * @param string|null $content Content between the opening and closing shortcode elements
 * @param string $shortcode_name Name of the shortcode
 *
 * @return string
 */
function process_the_shortcode( $user_defined_attributes, $content, $shortcode_name ) {
	$config = get_shortcode_configuration();

	$attributes = shortcode_atts(
		$config['defaults'],
		$user_defined_attributes,
		$shortcode_name
	);

	$attributes['post_id'] = (int) $attributes['post_id'];

	if ( $attributes['post_id'] < 1 && ! $attributes['topic'] ) {
		return '';
	}

	$attributes['show_icon'] = esc_attr( $attributes['show_icon'] );
	$attributes['hide_icon'] = esc_attr( $attributes['hide_icon'] );

	// Call the view file, capture it into the output buffer, and then return it.
	ob_start();

	if ( $attributes['post_id'] > 0 ) {
		render_single_faq( $attributes, $config );
	} else {
		render_topic_faqs( $attributes, $config );
	}

	return ob_get_clean();
}

/**
 * Render the single faq
 *
 * @param array $attributes
 * @param array $config
 *
 * @return void
 */
function render_single_faq( array $attributes, array $config ) {
	$faq = get_post( $attributes['post_id'] );

	if ( ! $faq ) {
		return;
	}
	$use_term_container = false;
	$is_calling_source  = 'shortcode-single-faq';
	$post_title         = $faq->post_title;
	$hidden_content     = do_shortcode( $faq->post_content );

	include( $config['views']['container_single'] );

}

/**
 * Render the topic FAQs
 *
 * @since 1.0.0
 *
 * @param array $attributes
 * @param array $config
 *
 * @return void
 */
function render_topic_faqs( array $attributes, array $config ) {
	$config_args = array(
		//number of records to get back
		'posts_per_page' => (int) $attributes['number_of_topics'],
		'nopaging'       => true,
		'post_type'      => 'faq',
		'tax_query'      => array(
			array(
				'taxonomy' => 'topic',
				'field'    => 'slug',
				'terms'    => $attributes['topic'],
			),
		),
		'order'          => 'ASC',
		'orderby'        => 'menu_order',
	);

	$query = new \WP_Query( $config_args );

	if ( ! $query->have_posts() ) {
		return;
	}

	$use_term_container = true;
	$is_calling_source  = 'shortcode-by-topic';
	$term_slub          = $attributes['topic'];

	include( $config['views']['container_topic'] );

	wp_reset_postdata();
}

/**
 * Loop through the query and render out the FAQs by topic
 *
 * @since 1.0.0
 *
 * @param \WP_Query $query
 * @param array $attributes
 * @param array $config
 *
 * @return void
 */
function loop_and_render_faqs_by_topic( \WP_Query $query, array $attributes, array $config ) {
	while ( $query->have_posts() ) {
		$query->the_post();

		$post_title     = get_the_title();
		$hidden_content = do_shortcode( get_the_content() );

		include( $config['views']['faq'] );

	}
}

/**
 * Get the runtime configuration parameters for the specified shortcode
 *
 * @since 1.0.0
 *
 * @return array
 */
function get_shortcode_configuration() {
	return array(
		'views'    => array(
			'container_single' => FAQ_MODULE_DIR . '/views/container.php',
			'container_topic'  => FAQ_MODULE_DIR . '/views/container.php',
			'faq'              => FAQ_MODULE_DIR . '/views/faq.php',
		),
		'defaults' => array(
			'show_icon'        => 'dashicons dashicons-arrow-down-alt2',
			'hide_icon'        => 'dashicons dashicons-arrow-up-alt2',
			'post_id'          => 0,
			'topic'            => '',
			'number_of_topics' => - 1,
		)
	);
}