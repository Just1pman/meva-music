<?php

/*
Title: Tracks module
Mode: preview
*/

$title = get_field('title');
$tracks = get_field('tracks');
?>

<?php if (!is_admin()) : ?>
    <section id="tracks" class="tracks default-section" data-aos="fade-right">
        <div class="container">
            <?php if (!empty($title)) : ?>
                <h2 class="section-title">
                    <?= $title ?>
                </h2>
            <?endif;?>

            <div class="tracks__wrapper">
                <div class="tracks__slider swiper tracks-swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($tracks as $track) : ?>
                            <div class="swiper-slide">
                                <div class="slide-wrapper">
                                    <?php if (!empty($track['before'])) : ?>
                                        <div style="width: 100%">
                                            <p class="slide-title"><?= $track['before']['title'] ?></p>
                                            <p style="width: 300px">
                                                <audio controls>
                                                    <source src="<?= $track['before']['url'] ?>">
                                                </audio>
                                            </p>
                                        </div>
                                    <?endif; ?>

                                    <?php if (!empty($track['after'])) : ?>
                                        <div>
                                            <p class="slide-title"><?= $track['after']['title'] ?></p>
                                            <p style="width: 300px">
                                                <audio controls>
                                                    <source src="<?= $track['after']['url'] ?>">
                                                </audio>
                                            </p>
                                        </div>
                                    <?endif; ?>
                                </div>
                            </div>
                        <? endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Tracks Module</h2>
<?php endif; ?>