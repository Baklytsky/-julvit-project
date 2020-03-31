<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

?>

<div class="wrapper py-5" id="search-wrapper">

    <div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

        <div class="row">

            <!-- Do the left sidebar check and opens the primary div -->
            <?php get_template_part('global-templates/left-sidebar-check'); ?>

            <main class="site-main" id="main">

                <?php if (have_posts()) : ?>

                    <header class="page-header">

                        <h1 class="page-title section-title text-center">
                                <span class="d-inline-block px-5">
								<?php
                                printf(
                                /* translators: %s: query term */
                                    esc_html__('Результати пошуку: %s', 'understrap'),
                                    '<span>' . get_search_query() . '</span>'
                                );
                                ?>
                                </span>
                        </h1>

                    </header><!-- .page-header -->

                    <?php /* Start the Loop */ ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <?php
                        /**
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part('loop-templates/content', 'search');
                        ?>

                    <?php endwhile; ?>

                <?php else : ?>

                <h1 class="pt-4 search-none-title d-flex align-items-center">
                    Нічого не знайдено...
                </h1>
                <p class="post-text py-5">
                    Вибачте, але нічого не відповідало вашим пошуковим умовам. Спробуйте ще раз із різними ключовими словами.
                </p>
<!--                    --><?php //get_template_part( 'loop-templates/content', 'none' ); ?>

                <?php endif; ?>

            </main><!-- #main -->

            <!-- The pagination component -->
            <?php understrap_pagination(); ?>

            <!-- Do the right sidebar check -->
            <?php get_template_part('global-templates/right-sidebar-check'); ?>

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #search-wrapper -->

<?php get_footer(); ?>
