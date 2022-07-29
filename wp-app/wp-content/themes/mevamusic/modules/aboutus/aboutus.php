<?php

/*
Title: Aboutus module
Mode: preview
*/

$title = get_field('title');
$description = get_field('description');

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
                    <div class="about_us__slider">
                        <!-- Slider main container -->
                        <div class="swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">Slide 1</div>
                                <div class="swiper-slide">Slide 2</div>
                                <div class="swiper-slide">Slide 3</div>
                                ...
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
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

