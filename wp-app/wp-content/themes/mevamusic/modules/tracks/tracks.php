<?php

/*
Title: Tracks module
Mode: preview
*/
?>

<?php if (!is_admin()) : ?>
        <section id="tracks-module" class="tracks-module default-section">
            <div class="container">
                <?php if (!empty($title)) : ?>
                    <h2 class="tracks-module__title section-title">
                        <?= $title ?>
                    </h2>
                <?php endif; ?>
                <div class="about-us__wrapper">
                    <div class="about-us__slider">
<!--                        <div class="swiper aboutUsSlider">-->
<!--                            <div class="swiper-wrapper">-->
<!--                                --><?php //foreach ($photos as $photo) : ?>
<!--                                    <div class="swiper-slide">-->
<!--                                        <div class="card-wrapper">-->
<!--                                            <img-->
<!--                                                    class="swiper-lazy hide-text"-->
<!--                                                    data-src="--><?//= $photo['photo']['url'] ?><!--"-->
<!--                                                    alt="--><?//= $photo['photo']['description'] ?><!--"-->
<!--                                            >-->
<!--                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                --><?php //endforeach; ?>
<!--                            </div>-->
<!---->
<!---->
<!--                            <div class="swiper-pagination"></div>-->
<!--                            <div class="swiper-button-prev"></div>-->
<!--                            <div class="swiper-button-next"></div>-->
<!--                        </div>-->
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

