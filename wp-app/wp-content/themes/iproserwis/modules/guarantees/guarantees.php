<?php

/*
Title: Гарантии модуль
Mode: preview
*/

$title = get_field('title');
$subtitle = get_field('subtitle');
$background = get_field('background');
$btn = get_field('btn');
$form = get_field('form');
?>
<?php if (!is_admin()) : ?>
    <section class="guarantees"
             style="<?php if (!empty($background)) : ?> background-image: url('<?=$background['url']?>') <?php endif ?>">
        <div class="overlay"></div>
        <div class="container-s">
            <div class="guarantees__wrapper">
                <?php if (!empty($title)) : ?>
                    <h2 class="guarantees__title">
                        <?= $title ?>
                    </h2>
                <?php endif; ?>
                <?php if (!empty($subtitle)) : ?>
                    <h3 class="guarantees__subtitle">
                        <?= $subtitle ?>
                    </h3>
                <?php endif; ?>

                <div class="guarantees__btn btn"
                     href="javascript:;"
                     data-fancybox data-src="#guarantees-modal"
                >
                    <?= !empty($item['btn']) ? $item['btn'] : 'Poproś o telefon' ?>
                </div>

                <?php if ($form) : ?>
                    <div class="modal form" id="guarantees-modal">
                        <?php if (!empty($form['headline'])) : ?>
                            <p class="modal-headline"><?= $form['headline'] ?></p>
                        <?php endif; ?>
                        <?php if (!empty($form['text'])) : ?>
                            <p class="modal-text"><?= $form['text'] ?></p>
                        <?php endif; ?>
                        <?= $form['form'] ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Гарантии модуль</h2>
<?php endif; ?>