<?php
/**
 * Template name: Правила сортування
 */
?>
<?php get_header(); ?>


<section class="sorting-rules container-fluid indent section-bg">
    <div class="pt-5">
        <h1 class="section-title text-center gold-line">
            <?= get_the_title(); ?>
        </h1>
    </div>
    <div class="container pb-5">
        <?php
        $image_rules = get_field('sorting_rules_img');
        if (!empty($image_rules)): ?>
            <img src="<?php echo $image_rules['url']; ?>" alt="<?php echo $image_rules['alt']; ?>"
                 class="w-100 image-rules"/>
        <?php endif; ?>
        <?php if (have_rows('sorting_rules')): ?>
            <ul>
                <?php while (have_rows('sorting_rules')): the_row();
                    $image = get_sub_field('sorting_rules_image');
                    $title = get_sub_field('sorting_rules_title');
                    $text = get_sub_field('sorting_rules_text');
                    ?>
                    <li>
                        <?php if ($title): ?>
                            <h2 class="text-center section-title">
                                <?php echo $title; ?>
                            </h2>
                        <?php endif; ?>
                        <ul class="row pb-5">
                            <?php if ($image): ?>
                                <li class="col-12 col-lg-4 text-center">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>
                                </li>
                            <?php endif; ?>
                            <li class="col-12 col-md-6 col-lg-4 py-3 py-lg-0">
                                <p class="py-2 text-center rules-yes-title post-text">
		                            <span>
			                            <?= get_field('sorting_rules_yes'); ?>
		                            </span>
                                </p>

                                <?php if (have_rows('sorting_rules_processing')): ?>
                                    <ul>
                                        <?php while (have_rows('sorting_rules_processing')): the_row();
                                            $list_yes = get_sub_field('sorting_rules_processing_list');
                                            if ($list_yes): ?>
                                                <li class="rules-yes-list d-flex align-items-center">
                                                    <p class="font-italic post-text">
                                                        <?php echo $list_yes; ?>;
                                                    </p>
                                                </li>
                                            <?php endif;
                                        endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                            <li class="col-12 col-md-6 col-lg-4 py-3 py-lg-0">
                                <p class="py-2 text-center rules-no-title post-text">
		                            <span>
			                            <?= get_field('sorting_rules_no'); ?>
		                            </span>
                                </p>
                                <?php if (have_rows('sorting_rules_not_processing')): ?>
                                    <ul>
                                        <?php while (have_rows('sorting_rules_not_processing')): the_row();
                                            $list_no = get_sub_field('sorting_rules_not_processing_list');
                                            if ($list_no): ?>
                                                <li class="rules-no-list d-flex align-items-center">
                                                    <p class="font-italic post-text">
                                                        <?php echo $list_no; ?>;
                                                    </p>
                                                </li>
                                            <?php endif;
                                        endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                        </ul>
                        <?php if ($text): ?>
                            <p class="text-justify font-italic post-text">
                                <?php echo $text; ?>;
                            </p>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
