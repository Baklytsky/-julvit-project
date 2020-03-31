<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper section-bg" id="error-404-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

				<main class="site-main" id="main">

                    <section class="error-404 not-found">

                        <div class="page-content py-5 text-center">
                            <h1 class="gold-line py-5">
                                404!
                            </h1>
                            <h2 class="section-title font-italic py-5">
                                <?= __('Упс... Такої сторінки не існує...', 'understrap'); ?>
                            </h2>
                            <div class="btn-wrapper">
                                <a href="<?= get_home_url() ?>" class="go-home-btn d-flex justify-content-center align-items-center">
                                    <?= __('Повернутись на головну', 'understrap'); ?>
                                </a>
                            </div>
                        </div><!-- .page-content -->

                    </section><!-- .error-404 -->

				</main><!-- #main -->

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php get_footer(); ?>
