<?php
/**
 * Template name: Про нас
 */
?>
<?php get_header(); ?>
<section class="about-us container-fluid indent section-bg">
    <div class="pt-5">
        <h1 class="section-title text-center gold-line">
            <?= get_the_title() ?>
        </h1>
    </div>
    <div class="container">
        <?php
        $title = get_field('about_title_name');
        $text = get_field('about_title_text');
        if ((!empty($title)) && (!empty($text))):?>
            <div class="about-company pb-5">
                <h2 class="text-center pb-5"><?= get_field('about_title_name') ?></h2>
                <p class="text-justify"><?= get_field('about_title_text') ?></p>
            </div>
        <?php endif;
        $image_about = get_field('about_title_img');
        if (!empty($image_about)): ?>
            <div class="about-image mb-5">
                <img src="<?php echo $image_about['url']; ?>" alt="<?php echo $image_about['alt']; ?>"/>
            </div>
        <?php endif; ?>
        <h3 class="section-title text-center gold-line">
            <?= __('Ми в соціальних мережах', 'understrap'); ?>
        </h3>
        <?php $soc_icons = get_theme_mod('understrap_social_icons_settings');
        if (!empty($soc_icons['links'])) { ?>
            <ul class="about-social d-flex justify-content-around align-items-center py-5">
                <?php $social_icons_order = array('facebook', 'twitter', 'instagram', 'youtube');
                foreach ($social_icons_order as $item) {
                    if (!empty($soc_icons['links'][$item])) { ?>
                        <li>
                            <a href="<?= $soc_icons['links'][$item] ?>" target="_blank" aria-label="<?= $item ?> icon">
                                <span class="icon-<?= $item ?> <?= $item ?>"></span>
                            </a>
                        </li>
                    <?php }
                } ?>
            </ul>
        <?php } ?>
        <h3 class="section-title text-center gold-line">
            <?= __('Контакти', 'understrap'); ?>
        </h3>
        <address>
            <ul class="row pb-5 about-contacts">
                <?php $contacts = get_theme_mod('understrap_contacts_settings'); ?>
                <?php if (!empty($contacts['link'])) { ?>
                <li class="col-12 text-center col-lg-4 d-flex justify-content-center align-items-center">
                    <span class="icon-user user-icon pr-3"></span>
                    <ul class="flex-column text-left">
                        <li>
                            <p>
                                <?= __('Дата реєстрації', 'understrap') . ': '; ?><?= $contacts['link']['Дата реєстрації'] . 'р.' ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                <?= __('Код ЄДРПОУ', 'understrap') . ': '; ?><?= $contacts['link']['КОД ЄДРПОУ'] ?>
                            </p>
                            <?php } ?>
                        </li>
                    </ul>
                </li>
                <?php if (!empty($contacts['link'])) { ?>
                <li class="col-12 text-center col-lg-4 d-flex justify-content-center">
                    <ul>
                        <li class="d-flex align-items-center py-1">
                            <span class="icon-mail email-icon pr-3"></span>

                            <a href="mailto:<?= $contacts['link']['Email'] ?>" class="mail-link" aria-label="Email">
                                <?= $contacts['link']['Email'] ?>
                            </a>

                        </li>
                        <li class="d-flex align-items-center py-1">
                            <span class="icon-phone phone-icon pr-3"></span>
                            <ul>
                                <li>
                                    <a href="tel:<?= $contacts['link']['Перший номер телефону'] ?>"
                                       aria-label="Phone number">
                                        <?php
                                        $country_code = substr($contacts['link']['Перший номер телефону'], 0, 3);
                                        $operator_code = substr($contacts['link']['Перший номер телефону'], 3, 3);
                                        $number_3 = substr($contacts['link']['Перший номер телефону'], 6, 3);
                                        $number_2 = substr($contacts['link']['Перший номер телефону'], 8, 2);
                                        $number_1 = substr($contacts['link']['Перший номер телефону'], 10, 2);

                                        ?>
                                        <?= $country_code . ' ( ' . $operator_code . ' ) ' . $number_3 . '-' . $number_2 . '-' . $number_1 ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:<?= $contacts['link']['Другий номер телефону'] ?>"
                                       aria-label="Phone number">
                                        <?php
                                        $country_code = substr($contacts['link']['Другий номер телефону'], 0, 3);
                                        $operator_code = substr($contacts['link']['Другий номер телефону'], 3, 3);
                                        $number_3 = substr($contacts['link']['Другий номер телефону'], 6, 3);
                                        $number_2 = substr($contacts['link']['Другий номер телефону'], 8, 2);
                                        $number_1 = substr($contacts['link']['Другий номер телефону'], 10, 2);

                                        ?>
                                        <?= $country_code . ' ( ' . $operator_code . ' ) ' . $number_3 . '-' . $number_2 . '-' . $number_1 ?>
                                    </a>
                                </li>
                            </ul>
                            <?php } ?>
                        </li>
                    </ul>
                </li>
                <?php if (!empty($contacts['link'])) { ?>
                <li class="col-12 text-center col-lg-4 d-flex justify-content-center align-items-center">
                    <span class="icon-marker address-icon pr-3"></span>
                    <p>
                        <span class="d-block"><?= $contacts['link']['Місто та район'] ?></span>
                        <span class="d-block"><?= $contacts['link']['Вулиця та будинок'] ?></span>
                    </p>
                    <?php } ?>
                </li>
            </ul>
        </address>
        <div class="about-map pb-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2594.4817389785276!2d32.00061991586872!3d49.43761136770138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d14c43fd4d3fbd%3A0x1af9f7403fdcd9a6!2z0LLRg9C70LjRhtGPINCi0LDRgNCw0YHQutC-0LLQsCwgMywgMTIyLCDQp9C10YDQutCw0YHQuCwg0KfQtdGA0LrQsNGB0YzQutCwINC-0LHQu9Cw0YHRgtGMLCAxODAwMA!5e0!3m2!1sru!2sua!4v1582892501637!5m2!1sru!2sua"
                    width="100%" height="450" style="border:0;" allowfullscreen="">
            </iframe>
        </div>
    </div>
</section>


<?php get_footer(); ?>
