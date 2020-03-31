<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

function my_logo() {
	$output = '';
	$output .= '<a class="navbar-brand" aria-label="home" href="'.get_home_url().'">';
	$custom_logo_id = get_theme_mod('custom_logo');
	$custom_logo_attr = '';
	if ($custom_logo_id) {
		$custom_logo_attr = array(
			'class' => 'custom_logo',
		);
		$image_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true);
		if (empty ($image_alt)) {
			$custom_logo_attr ['alt'] = get_bloginfo('name','display');
		}
	}
	$output .= wp_get_attachment_image($custom_logo_id, 'full', false, $custom_logo_attr). '</a>';

	echo $output;
}

function ulvit_excerpt_more($excerpt) {
	return str_replace('[...]', '...', $excerpt);
}
add_filter('wp_trim_excerpt', 'ulvit_excerpt_more');

function ulvit_excerpt_length($length) {
    return 35;
}
add_filter('excerpt_length', 'ulvit_excerpt_length');

add_action('wp_footer', 'ulvit_activate_masked_input');

function ulvit_activate_masked_input(){
    ?>
    <script type="text/javascript">
        jQuery( function($){
            $(".data").mask("99/99/9999");
            $(".tel").mask("(999) 999-99-99");
            $(".cpf").mask("999.999.999-99");
            $(".cnpj").mask("99.999.999/9999-99");
        });
    </script>
    <?php
}

