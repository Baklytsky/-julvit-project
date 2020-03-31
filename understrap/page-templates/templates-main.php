<?php
/**
 * Template name: Головна
 */
?>
<?php get_header(); ?>

<section class="container-fluid indent">
    <div class="slogan-section"
         style="background: url('<?php echo get_field('main_image'); ?>') no-repeat center / cover">
        <div class="container slogan-title">
            <div class="row">
                <style>
                    .headline:after {
                    <?php
                    $color_title = get_field('recycling_ua_slogan_color');
                    if ($color_title == 'Білий') { ?> background-color: #fff<?php }
                    elseif ($color_title == 'Чорний') { ?> background-color: #000<?php }
                    elseif ($color_title == 'Зелений') { ?> background-color: #398c60<?php }
                    elseif ($color_title == 'Золотий') { ?> background-color: #ad9c53<?php }
                    ?>
                    }
                </style>
                <div class="col-12 col-lg-6 text-center headline pb-2 pb-lg-5 text-lg-right">
                    <?php
                    $title = get_field('recycling_ua_slogan_1');
                    if (!empty($title)): ?>
                        <h2 style="
                        <?php
                        $color_title = get_field('recycling_ua_slogan_color');
                        if ($color_title == 'Білий') { ?> color: #fff <?php }
                        elseif ($color_title == 'Чорний') { ?> color: #000 <?php }
                        elseif ($color_title == 'Зелений') { ?> color: #398c60 <?php }
                        elseif ($color_title == 'Золотий') { ?> color: #ad9c53 <?php }
                        ?>">
                            <?php echo $title; ?>
                        </h2>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-lg-6 text-center pt-2 pt-lg-5 d-lg-flex align-items-lg-end text-lg-left">
                    <?php
                    $text = get_field('recycling_ua_slogan_2');
                    if (!empty($text)): ?>
                        <p style="
                        <?php
                        $color_title = get_field('recycling_ua_slogan_color');
                        if ($color_title == 'Білий') { ?> color: #fff <?php }
                        elseif ($color_title == 'Чорний') { ?> color: #000 <?php }
                        elseif ($color_title == 'Зелений') { ?> color: #398c60 <?php }
                        elseif ($color_title == 'Золотий') { ?> color: #ad9c53 <?php }
                        ?>">
                            <?php echo $text; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ecology-section section-bg">
    <div class="container">
        <?php
        $title = get_field('recycling_ua');
        if (!empty($title)): ?>
            <h3 class="section-title gold-line text-center px-5">
                <?php echo $title; ?>
            </h3>
        <?php endif;
        $text = get_field('recycling_ua_introduction');
        if (!empty($text)): ?>
            <p class="post-text text-justify pb-5">
                <?php echo $text; ?>
            </p>
        <?php endif; ?>
        <div class="row">
            <div class="col-12 col-md-6 pb-5">
                <?php
                $image = get_field('image_recycling_ua');
                if (!empty($image)): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-6">
                <?php
                $text = get_field('recycling_ua_text_1');
                if (!empty($text)): ?>
                    <p class="post-text text-justify">
                        <?php echo $text; ?>
                    </p>
                <?php endif;
                if (have_rows('recycling_ua_link_repeater')): ?>
                    <ul class="recyclemap d-flex justify-content-around align-items-center">
                        <?php while (have_rows('recycling_ua_link_repeater')): the_row();
                            $title = get_sub_field('recycling_ua_link_name');
                            $link = get_sub_field('recycling_ua_link');
                            if ((!empty($image)) && (!empty($title)) && (!empty($link))):?>
                                <li class="d-flex align-items-center py-5">
                                    <a href="<?php echo $link ?>" target="_blank" aria-label="<?php echo $title ?>"
                                       class="d-flex flex-column align-items-center">
                                        <?php echo $title ?>
                                    </a>
                                </li>
                            <?php endif;
                        endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <?php
        $text = get_field('recycling_ua_gallery_text');
        if (!empty($text)): ?>
            <p class="post-text text-justify">
                <?php the_field('recycling_ua_gallery_text'); ?>
            </p>
        <?php endif; ?>
    </div>
    <div class="owl-carousel mx-auto mt-5">
        <?php $image_slider = get_field('recycling_ua_gallery');
        if (!empty($image_slider)):
            foreach ($image_slider as $image_item): ?>
                <div class="item">
                    <a href="<?php echo $image_item['url']; ?>" target="_blank"
                       aria-label="<?php echo $image_item['alt']; ?>" class="text-center">
                        <img src="<?php echo $image_item['sizes']['medium']; ?>"
                             alt="<?php echo $image_item['alt']; ?>">
                    </a>
                </div>
            <?php endforeach;
        endif; ?>
    </div>
</section>
<section class="ukraine-garbage section-bg">
    <div class="container">
        <?php
        $title = get_field('recycling_ua_state_title');
        if (!empty($title)): ?>
            <h3 class="text-center section-title gold-line">
                <?php the_field('recycling_ua_state_title'); ?>
            </h3>
        <?php endif;
        $text = get_field('recycling_ua_state_title');
        if (!empty($text)): ?>
            <p class="post-text text-justify">
                <?php the_field('recycling_ua_state_text'); ?>
            </p>
        <?php endif ?>
        <div class="text-center">
            <?php
            $image = get_field('recycling_ua_state_img');
            if (!empty($image)): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="py-5"/>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="our-partners section-bg">
    <div class="container">
        <?php
        $title = get_field('partners_section_title');
        if (!empty($title)): ?>
            <h3 class="text-center section-title gold-line">
                <?php the_field('partners_section_title'); ?>
            </h3>
        <?php endif;
        $text = get_field('recycling_ua_state_title');
        if (!empty($text)): ?>
            <p class="post-text text-justify text-center">
                <?php the_field('partners_section_text'); ?>
            </p>
        <?php endif;
        if (have_rows('partners_repeater')): ?>
            <ul class="row d-flex justify-content-center py-5">
                <?php while (have_rows('partners_repeater')): the_row();
                    $image = get_sub_field('partners_image');
                    $title = get_sub_field('partners_title');
                    $link = get_sub_field('partners_url');
                    if ((!empty($image)) && (!empty($title)) && (!empty($link))):?>
                        <li class="col-12 col-md text-center py-2">
                            <a href="<?php echo $link; ?>" target="_blank" aria-label="<?php echo $title; ?>"
                               class="partners-link d-flex flex-column justify-content-center align-items-center ">
                                <div class="partners-img-wrapper d-flex justify-content-center align-items-center">
                                    <img src="<?php echo $image ['url']; ?>" alt="<?php echo $image['alt'] ?>"
                                         class="partners-img"/>
                                </div>
                                <h3 class="post-text partners_title text-center py-2">
                                    <?php echo $title; ?>
                                </h3>
                            </a>
                        </li>
                    <?php endif;
                endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
