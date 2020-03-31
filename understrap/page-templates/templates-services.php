<?php
/**
 * Template name: Послуги
 */
?>
<?php get_header(); ?>
<section class="services container-fluid indent pb-5 section-bg">
    <div class="pt-5">
        <h1 class="section-title text-center gold-line">
            <?= get_the_title(); ?>
        </h1>
    </div>
    <div class="container">
        <ul class="d-flex justify-content-center align-items-center">
            <li>
                <button class="m-2 people-btn active"><?= __('Для населення', 'understrap'); ?></button>
            </li>
            <li>
                <button class="m-2 company-btn"><?= __('Для промисловості', 'understrap'); ?></button>
            </li>
        </ul>
        <div class="services-people pb-5">
            <?php if (have_rows('services_people')): ?>
                <ul>
                    <?php while (have_rows('services_people')): the_row();
                        $image = get_sub_field('services_people_img');
                        $title = get_sub_field('services_people_title');
                        if ((!empty($image)) && (!empty($title))):?>
                            <li class="services-list row">
                                <div class="col-12">
                                    <h2 class="text-center section-title">
                                        <?php echo $title; ?>
                                    </h2>
                                </div>
                                <div class="col-12 col-md-6">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"
                                         class="services-img"/>
                                </div>
                                <div class="col-12 col-md-6 d-flex justify-content-start align-items-center">
                                    <?php if (have_rows('services_people_content')): ?>
                                        <ul class="py-3">
                                            <?php while (have_rows('services_people_content')): the_row();
                                                $list = get_sub_field('services_people_content_list');
                                                if ((!empty($list))):?>
                                                    <li class="content-list d-flex align-items-center py-2">
                                                        <p class="post-text">
                                                            <?php echo $list; ?>;
                                                        </p>
                                                    </li>
                                                <?php endif;
                                            endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </li>
                        <?php endif;
                    endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
        <div class="services-company pb-5">
            <?php if (have_rows('services_company')): ?>
                <ul>
                    <?php while (have_rows('services_company')): the_row();
                        $image = get_sub_field('services_company_img');
                        $title = get_sub_field('services_company_title');
                        if ((!empty($image)) && (!empty($title))):?>
                            <li class="services-list row">
                                <div class="col-12">
                                    <?php if ($title): ?>
                                        <h2 class="text-center section-title">
                                            <?php echo $title; ?>
                                        </h2>
                                    <?php endif; ?>
                                </div>
                                <div class="col-12 col-md-6">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"
                                         class="services-img"/>
                                </div>
                                <div
                                        class="col-12 col-md-6 d-flex justify-content-start align-items-center">
                                    <?php if (have_rows('services_company_content')): ?>
                                        <ul class="py-3">
                                            <?php while (have_rows('services_company_content')): the_row();
                                                $list = get_sub_field('services_company_content_list');
                                                if ((!empty($list))):?>
                                                    <li class="content-list d-flex align-items-center py-2">
                                                        <p class="post-text">
                                                            <?php echo $list; ?>;
                                                        </p>
                                                    </li>
                                                <?php endif;
                                            endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </li>
                        <?php endif;
                    endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>
