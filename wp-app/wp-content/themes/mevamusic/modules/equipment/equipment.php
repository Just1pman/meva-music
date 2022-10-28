<?php

/*
Title: Equipment module
Mode: preview
*/

$title = get_field('title');
$photos = get_field('photos');
?>

<?php if (!is_admin()) : ?>
    <section id="equipment" class="equipment default-section" data-aos="fade-right">
        <div class="container">
            <?php if (!empty($title)) : ?>
                <h2 class="about-us__title section-title">
                    <?= $title ?>
                </h2>
            <?php endif; ?>
            <div class="equipment__wrapper">
                <div class="equipment__slider swiper wide-swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($photos as $photo) : ?>
                            <div class="swiper-slide">
                                <img
                                    class="swiper-lazy hide-text"
                                    data-src="<?= $photo['photo']['url'] ?>"
                                    alt="<?= $photo['photo']['description'] ?>"
                                >
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Equipment Module</h2>
<?php endif; ?>