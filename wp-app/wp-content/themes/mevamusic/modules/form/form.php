<?php

/*
Title: Form module
Mode: preview
*/

$title = get_field('title');
$form = get_field('contact_form');

?>

<?php if (!is_admin()) : ?>
    <section id="form" class="default-section form-section ">
        <div class="container">
            <div class="form__wrapper">
                <div class="form__left">
                    <?php if (!empty($title)) : ?>
                        <h2 class="form__title section-title">
                            <?= $title ?>
                        </h2>
                    <?php endif; ?>

                    <?php if (!empty($form)) : ?>
                        <div class="contact-form__from">
                            <?= $form ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form__right">1</div>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Form Module</h2>
<?php endif; ?>