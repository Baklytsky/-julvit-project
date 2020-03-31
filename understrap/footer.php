<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<footer id="footer" class="container-fluid">
	<div class="container">
			<ul class="row indent pb-3 pb-md-0">
                <li class="p-2 col-12 col-md-4">
                    <?php dynamic_sidebar( 'footer-left' );
                    $soc_icons = get_theme_mod( 'understrap_social_icons_settings' );
                    if ( $soc_icons['headline'] ) { ?>
                    <div class="row d-flex justify-content-center align-items-center">
                        <span class="icon-user icon-style pr-2" aria-label="<?= $soc_icons['headline'] ?>"></span>
                        <h3 class="text-center"><?= $soc_icons['headline'] ?></h3>
                    </div>
					<?php }
					if ( ! empty( $soc_icons['links'] ) ) { ?>
                        <ul class="text-center pt-4 pb-4 indent row d-flex justify-content-center align-items-center">
							<?php $social_icons_order = array( 'facebook', 'twitter', 'instagram', 'youtube' );
							foreach ( $social_icons_order as $item ) {
								if ( ! empty( $soc_icons['links'][ $item ] ) ) { ?>
                                    <li class="col-4">
                                        <a href="<?= $soc_icons['links'][ $item ] ?>" target="_blank" aria-label="Icon <?= $item ?>">
                                            <span class="icon-<?= $item ?> <?= $item ?>"></span>
                                        </a>
                                    </li>
								<?php }
							} ?>
                        </ul>
					<?php } ?>
                </li>
                <?php $contacts = get_theme_mod( 'understrap_contacts_settings' );?>
                <?php if ( ! empty( $contacts['link'] ) ) {?>
                <li class="p-2 col-12 col-md-4 footer-item address-list d-flex justify-content-center align-items-center">
                    <span class="icon-marker address-icon pr-2" aria-label="<?= __('Іконка маркер', 'understrap'); ?>"></span>
                    <address>
                        <p>
                            <span class="d-block"><?= $contacts['link']['Місто та район'] ?></span>
                            <span class="d-block"><?= $contacts['link']['Вулиця та будинок'] ?></span>
                        </p>
                    </address>
                </li>
				<li class="p-2 col-12 col-md-4 phone-list d-flex justify-content-center align-items-center">
					<span class="icon-phone phone-icon pr-2" aria-label="<?= __( 'Іконка телефону', 'understrap' ); ?>"></span>
					<ul>
						<li>
							<a href="tel:<?= $contacts['link']['Перший номер телефону'] ?>" aria-label="<?= __( 'Номер телефону', 'understrap' ); ?>">
                                <?php
                                $country_code = substr($contacts['link']['Перший номер телефону'], 0,3);
                                $operator_code = substr($contacts['link']['Перший номер телефону'], 3,3);
                                $number_3 = substr($contacts['link']['Перший номер телефону'], 6,3);
                                $number_2 = substr($contacts['link']['Перший номер телефону'], 8,2);
                                $number_1 = substr($contacts['link']['Перший номер телефону'], 10,2);?>

								<?= $country_code .' ( ' . $operator_code . ' ) ' . $number_3 . '-' . $number_2 . '-' . $number_1?>
							</a>
						</li>
						<li>
							<a href="tel:<?= $contacts['link']['Другий номер телефону'] ?>" aria-label="<?= __( 'Номер телефону', 'understrap' ); ?>">
								<?php
								$country_code = substr($contacts['link']['Другий номер телефону'], 0,3);
								$operator_code = substr($contacts['link']['Другий номер телефону'], 3,3);
								$number_3 = substr($contacts['link']['Другий номер телефону'], 6,3);
								$number_2 = substr($contacts['link']['Другий номер телефону'], 8,2);
								$number_1 = substr($contacts['link']['Другий номер телефону'], 10,2);?>

								<?= $country_code .' ( ' . $operator_code . ' ) ' . $number_3 . '-' . $number_2 . '-' . $number_1?>
							</a>
						</li>
						<?php } ?>
					</ul>
				</li>
			</ul>
		<p class="dev-title">
            Developed by Geekhub <?php echo date('Y');?>
        </p>
	</div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

