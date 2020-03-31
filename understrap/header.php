<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= __('ТОВ Юлвіт Груп ЛТД. Переробка та сортування сміття. Послуги для населення та промисловості. Eco-hub.', 'understrap'); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
    <header id="header">
        <div class="container">
            <nav id="main-nav" class="navbar navbar-expand-md navbar-dark" aria-labelledby="Navigation menu">
					<!-- Your site title as branding in the menu -->
				<?php if (is_front_page() || is_home()) : ?>
                    <h1>
						<?php my_logo(); ?>
                    </h1>
				<?php else : ?>
					<?php my_logo(); ?>
				<?php endif; ?>
                <!-- end custom logo -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="<?= __('Меню навігації', 'understrap'); ?>">
                    <span class="icon-three-bars icon-hamburger"></span>
                </button>

				<!-- The WordPress Menu goes here -->
	                <?php $args = array(
		                'theme_location'  => '',
		                'menu'            => '',
		                'container'       => 'div',
		                'container_class' => 'collapse navbar-collapse',
		                'container_id'    => 'navbarCollapse',
		                'menu_class'      => 'navbar-nav text-center d-md-flex justify-content-md-between text-uppercase',
		                'menu_id'         => 'main-nav-menu',
		                'echo'            => true,
		                'fallback_cb'     => 'wp_page_menu',
		                'before'          => '',
		                'after'           => '',
		                'link_before'     => '',
		                'link_after'      => '',
		                'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
		                'depth'           => 0,
		                'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
	                );
	                wp_nav_menu($args); ?>
            </nav><!-- .site-navigation -->
        </div><!-- .container -->
        <div class="button-wraper text-center">
            <button class="form-button eModal-1">
                <span class="text-uppercase"><?= __('Залишити повідомлення', 'understrap'); ?></span>
            </button>
        </div>
    </header>

