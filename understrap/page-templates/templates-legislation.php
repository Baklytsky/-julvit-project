<?php
/**
 * Template name: Законодавство
 */
?>
<?php get_header(); ?>

<section class="law-section container-fluid indent py-5 section-bg">
    <div class="">
        <h1 class="section-title text-center gold-line">
            <?= get_the_title() ?>
        </h1>
    </div>
    <div class="container">
        <?php if (have_rows('law_block')): ?>
            <ul class="row law-blocks d-flex justify-content-center">
                <?php while (have_rows('law_block')): the_row();
                    $image_law = get_sub_field('law_image');
                    $short_title = get_sub_field('law_short_title');
                    $title = get_sub_field('law_title');
                    $link = get_sub_field('law_url');
                    if ((!empty($image_law)) && (!empty($short_title)) && (!empty($title)) && (!empty($link))):?>
                        <li class="col-12 col-md-6 law-item">
                            <img src="<?php echo $image_law['url']; ?>" alt="<?php echo $image_law['alt'] ?>"
                                 class="law-img"/>
                            <div class="law-title">
                                <h2 class="post-text text-uppercase text-center py-3">
                                    <?php echo $short_title; ?>
                                </h2>
                                <div class="law-text text-center">
                                    <a href="<?php echo $link; ?>" target="_blank"
                                       aria-label="<?php echo $short_title; ?>">
                                        <?php echo $title; ?>
                                    </a>
                                </div>
                            </div>
                        </li>
                    <?php endif;
                endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
