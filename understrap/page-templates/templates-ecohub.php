<?php
/**
 * Template name: ECO HUB
 */
?>
<?php get_header(); ?>
<section class="eco-hub container-fluid indent section-bg">
    <div class="pt-5">
        <h1 class="section-title text-center gold-line">
            <?= get_the_title() ?>
        </h1>
    </div>
    <div class="container">
        <div class="image-block">
            <?php
            $image_about = get_field('eco_hub_img');
            if (!empty($image_about)): ?>
                <img src="<?php echo $image_about['url']; ?>" alt="<?php echo $image_about['alt']; ?>"/>
            <?php endif;
            $title = get_field('eco_hub_img_title');
            if (!empty($title)):?>
                <h2 class="image-title">
                    <?php echo $title; ?>
                </h2>
            <?php endif; ?>
        </div>
        <?php if (have_rows('eco-hub_about_repeater')): ?>
            <ul class="eco-hub-about row py-5">
                <?php while (have_rows('eco-hub_about_repeater')): the_row();
                    $title = get_sub_field('eco-hub_about_title');
                    $text = get_sub_field('eco-hub_about_text');
                    if ((!empty($title)) && (!empty($text))):?>
                        <li class="col-12 col-md-6">
                            <p class="eco-hub-text post-text text-justify">
                                <span><?php echo $title; ?></span>
                                <?php echo $text; ?>
                            </p>
                        </li>
                    <?php endif;
                endwhile; ?>
            </ul>
        <?php endif;
        $title = get_field('eco_hub_as_title');
        if (!empty($title)):?>
            <h3 class="text-center mb-5 section-title">
                <?php echo $title; ?>
            </h3>
        <?php endif;
        if (have_rows('eco-hub_as_repeater')): ?>
            <ul class="eco-hub-direction row">
                <?php while (have_rows('eco-hub_as_repeater')): the_row();
                    $icon = get_sub_field('eco-hub_as_icon');
                    $text = get_sub_field('eco-hub_as_text');
                    if ((!empty($icon)) && (!empty($text))):?>
                        <li class="col-12 col-md-4 text-center py-3">
                            <span class="icon-<?php echo $icon; ?> eco-icons-style"
                                  aria-label="<?= __('Іконка до напрямку', 'understrap'); ?>"></span>
                            <div class="py-5">
                                <p class="font-italic text-justify post-text py-3 p-lg-4">
                                    <?php echo $text; ?>
                                </p>
                            </div>
                        </li>
                    <?php endif;
                endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>


<?php get_footer(); ?>
