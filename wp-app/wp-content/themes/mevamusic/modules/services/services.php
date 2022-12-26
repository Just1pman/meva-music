<?php

/*
Title: Services module
Mode: preview
*/

$title = get_field('title');
$services = get_field('cards');
?>

<?php if (!is_admin()) : ?>
    <section id="services" class="services default-section">
        <div class="container">
            <?php if (!empty($title)) : ?>
                <h2 class="services__title section-title">
                    <?= $title ?>
                </h2>
            <?php endif; ?>
            <div class="services__wrapper">
                <?php foreach ($services as $key => $service) : ?>
                    <?php
                        $more = $service['more'];
                        $introduction = str_replace('  ', 'break-row', $more['introduction']);
                        $descriptionList = null;

                        if (!empty($service['more']['description_item'])) {
                            $descriptionList = '<ul class="js-more-modal__list services__list visually-hidden">';

                            foreach ($service['more']['description_item'] as $descriptionItem) {
                                $text = $descriptionItem['description_item_text'];
                                $descriptionList .= "<li>$text</li>";
                            }

                            $descriptionList .= '</ul>';
                        }
                    ?>

                    <div class="card js-service-card" data-html="true"
                         <?php if (!empty($service['more'])) : ?>data-description="<?= $introduction ?>"<?php endif; ?>
                         <?php if (!empty($service['price'])) : ?>data-price="<?= $service['price'] ?>"<?php endif; ?>
                         data-aos="fade-right"
                         data-aos-delay="<?= $key + 1 ?>00"
                    >
                        <?= $descriptionList ?>
                        <picture>
                            <img
                                loading="lazy"
                                class="hide-text js-service-card__img"
                                src="<?= $service['image']['url'] ?>"
                                alt="<?= $service['photo']['description'] ?>"
                            >
                        </picture>
                        <div class="services__content-wrapper">
                            <h3 class="js-card__title card__title"><?= $service['title'] ?></h3>
                            <button id="js_services-btn-<?= $key ?>" class="card__button js-service-card_btn" data-fancybox="more-btn">Подробнее</button>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Services Module</h2>
<?php endif; ?>