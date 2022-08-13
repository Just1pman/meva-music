<?php

/*
Title: Aboutus module
Mode: preview
*/

$title = get_field('title');
$description = get_field('description');
$photos = get_field('photos');
?>

<?php if (!is_admin()) : ?>
        <section id="about-us" class="about-us default-section">
            <div class="container">
                <?php if (!empty($title)) : ?>
                    <div class="about-us__title section-title">
                        <?= $title ?>
                    </div>
                <?php endif; ?>
                <div class="about-us__wrapper">
                    <div class="about-us__slider">
                        <div class="swiper aboutUsSlider">
                            <div class="swiper-wrapper">
                                <?php foreach ($photos as $photo) : ?>
                                    <div class="swiper-slide">
                                        <div class="card-wrapper">
                                            <img
                                                    class="swiper-lazy"
                                                    data-src="<?= $photo['photo']['url'] ?>"
                                                    alt="<?= $photo['photo']['description'] ?>"
                                            >
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>


                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                    <?php if (!empty($description)) : ?>
                        <div class="about-us__description">
                            <?= $description ?>
                        </div>
                    <?php endif; ?>


                </div>
            </div>
        </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">AboutUs Module</h2>
<?php endif; ?>

