<?php

/*
Title: Form module
Mode: preview
*/

$title = get_field('title');
$form = get_field('contact_form');
$captionBlock = get_field('caption_section');

?>

<?php if (!is_admin()) : ?>
    <section class="default-section form-section">
        <div class="container">
            <div class="form-section__wrapper">
                <div class="form__left form-section__form">
                    <?php if (!empty($title)) : ?>
                        <h2 class="form__title section-title form-section__title">
                            <?= $title ?>
                        </h2>
                    <?php endif; ?>

                    <?php if (!empty($form)) : ?>
                        <div class="contact-form__from">
                            <?= $form ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form__right">
                    <p class="form-section__caption"><?= $captionBlock['caption'] ?></p>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Form Module</h2>
<?php endif; ?>