<?php

/*
Title: Контактная форма модуль
*/

$title = get_field('title');
$subtitle = get_field('subtitle');
$contact_form = get_field('contact_form');

?>
<?php if (!is_admin()) : ?>
<section id="contact-form" class="contact-form">
    <div class="container-s">
        <?php if (!empty($title)) : ?>
            <h2 class="contact-form__title">
                <?= $title ?>
            </h2>
        <?php endif; ?>
        <?php if (!empty($subtitle)) : ?>
            <h3 class="contact-form__subtitle">
                <?= $subtitle ?>
            </h3>
        <?php endif; ?>
        <?php if (!empty($contact_form)) : ?>
            <div class="contact-form__from">
                <?= $contact_form ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Контактная форма модуль</h2>
<?php endif; ?>