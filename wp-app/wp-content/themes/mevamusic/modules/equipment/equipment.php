<?php

/*
Title: Equipment module
Mode: preview
*/

$title = get_field('title');
$photos = get_field('photos');
?>

<?php if (!is_admin()) : ?>
    <section id="equipment" class="equipment default-section">
        <div class="container">
            <?php if (!empty($title)) : ?>
                <div class="about-us__title section-title">
                    <?= $title ?>
                </div>
            <?php endif; ?>
            <div class="equipment__wrapper">
                <div class="equipment__slider">
                    <div class="wide-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($photos as $photo) : ?>
                                <div class="swiper-slide">
                                    <div class="equipment-card-wrapper">
                                        <img src="<?= $photo['photo']['url'] ?>" alt="<?= $photo['photo']['description'] ?>">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>


                        <div class="wide-swiper-pagination"></div>
                        <div class="wide-swiper-button-prev"></div>
                        <div class="wide-swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Equipment Module</h2>
<?php endif; ?>

