<?php

/*
Title: Услуги модуль
Mode: preview
*/

$title = get_field('title');
$subtitle = get_field('subtitle');
$categories = get_field('category');
$information = get_field('general_information');
$individual_page = get_field('individual_page', 'option');



?>

<?php if (!is_admin()) : ?>
    <section class="service">
        <div class="container-s">
            <?php if (!empty($title)) : ?>
                <h2 class="service__title">
                    <?= $title ?>
                </h2>
            <?php endif; ?>
            <?php if (!empty($subtitle)) : ?>
                <p class="service__subtitle">
                    <?= $subtitle ?>
                </p>
            <?php endif; ?>
            <?php if (!empty($categories)) : ?>
                <?php foreach ($categories as $category) : ?>
                    <div class="service__category">
                        <?php if (!empty($category['title_category'])) : ?>
                            <h3 class="service__title-category">
                                <?= $category['title_category'] ?>
                            </h3>
                        <?php endif; ?>

                        <?php if (!empty($category['service'])) : ?>
                            <?php foreach ($category['service'] as $key => $item) : ?>
                                <div class="service__item" <?php if ($key === 0) : ?> style="padding-top: 0" <?php endif; ?> >
                                    <div class="service__name-description-service">
                                        <?php if (!empty($item['name_service'])) : ?>

                                            <div id="<?= str_replace(' ', '-', mb_strtolower(rtrim($item['name_service'])))?>" class="service__name-service">
                                                <?= $item['name_service'] ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($item['description_service'])) : ?>
                                            <div class="service__description-service">
                                                <?= $item['description_service'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="service__price-time-service">
                                        <div class="service__price-time-service-wrapper">
                                            <div class="service__price">
                                                <?php if (!empty($item['price_not_original'])) : ?>
                                                    <div class="service__price_not_original">
                                                        <?= $item['price_not_original'] ?>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if (!empty($item['price_not_original']) && !empty($item['price_original'])) : ?>
                                                    <span class="service__separator">
                                                     /
                                                     </span>
                                                <?php endif; ?>
                                                <?php if (!empty($item['price_original'])) : ?>
                                                    <div class="service__price_original">
                                                        <?= $item['price_original'] ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>

                                            <?php if (!empty($item['working_time'])) : ?>
                                                <div class="service__working-time">
                                                    <?= $item['working_time'] ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                            <div
                                                 class="service__btn btn"
                                                 href="javascript:;"
                                                 data-fancybox data-src="#single-product"
                                                 data-price-original="<?= $item['price_original'] ?>"
                                                 data-price-not-original="<?= $item['price_not_original'] ?>"
                                                 data-name-service="<?= $item['name_service'] ?>"
                                            >
                                                    <?=  !empty($item['btn']) ? $item['btn'] : 'zamówienie'?>
                                            </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="service__information">
                <?= $information ?>
            </div>
            <?php if ($individual_page['form']) : ?>
                <div class="modal form" id="single-product">
                    <?php if (!empty($individual_page['headline'])) : ?>
                        <p class="modal-headline"><?= $individual_page['headline'] ?></p>
                    <?php endif; ?>
                    <?php if (!empty($individual_page['text'])) : ?>
                        <p class="modal-text"><?= $individual_page['text'] ?></p>
                    <?php endif; ?>
                    <?= $individual_page['form'] ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Услуги модуль</h2>
<?php endif; ?>