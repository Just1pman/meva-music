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
                <div class="services__title section-title">
                    <?= $title ?>
                </div>
            <?php endif; ?>
            <div class="services__wrapper">
                <?php foreach ($services as $service) : ?>
                    <div class="card">
                        <img
                            class="hide-text"
                            src="<?= $service['image']['url'] ?>"
                            alt="<?= $service['photo']['description'] ?>"
                        >
                        <p class="card__title"><?= $service['title'] ?></p>
                        <button class="card__button">Подробнее</button>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Services Module</h2>
<?php endif; ?>