<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<div class="single-post py-4 section-bg">

	<header class="entry-header gold-line pb-5">

		<?php the_title( '<h1 class="entry-title text-justify text-center single-post-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->
<div class="single-post-img text-center">
	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
</div>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
    <div class="recent-post">
        <h3 class="recent-post-headline py-5 text-center gold-line">
            <?= __('Рекомендовані новини', 'understrap'); ?>
        </h3>
        <?php
        $posts = get_posts( array(
            'numberposts' => 3,
            'orderby'     => 'rand',
            'order'       => 'ASC',
            'post_type'   => 'post',
        ) );?>
        <ul class="row">
            <?php
            foreach ($posts as $post) {
                setup_postdata($post); ?>
                <li class="col-12 col-md-4 pb-3 text-center">
                    <a href="<?= get_the_permalink() ?>" class="recent-post_link">
                        <div class="recent-post-img">
                            <?= get_the_post_thumbnail() ?>
                        </div>
                    </a>
                    <div class="recent-post-title py-3">
                        <h3 class="post-title">
                            <a href="<?= get_the_permalink() ?>" class="recent-post_link">
                                <?= get_the_title() ?>
                            </a>
                        </h3>
                    </div>
                </li>
                <?php
            }
            wp_reset_postdata();
            ?>
        </ul>
    </div>
</div>
</article><!-- #post-## -->
