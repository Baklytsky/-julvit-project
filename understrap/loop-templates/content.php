<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<ul>
        <li class="row pb-3 pt-3 post-type">
            <div class="col-12 text-center">
                <?php
                the_title(sprintf('<h3 class="entry-title text-center py-3"><a href="%s" rel="bookmark" class="post-title">', esc_url(get_permalink())), '</a></h3>');
                ?>
                <a href="<?php echo get_the_permalink($post->ID); ?>">
                    <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
                </a>
                <p class="post-except post-text text-justify py-3">
                    <?= get_the_excerpt(); ?>
                </p>
            </div>
        </li>
	</ul>
</article><!-- #post-## -->
