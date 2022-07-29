<?php

/*
Title: Главный модуль
Mode: preview
*/

$background_image = get_field('background_image');
$headline = get_field('headline');
$subheadline = get_field('subheadline');
$btn_name = get_field('btn_name');
$form = get_field('form');
?>

<?php if (!is_admin()) : ?>
    <section id="hero" class="hero"
             style="<?php if (!empty($background_image)) : ?> background-image: url('<?=$background_image['url']?>') <?php endif ?>">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="block-hero">
                <?php if (!empty($headline)) : ?>
                    <h1><?= $headline ?></h1>
                <?php endif; ?>
                <?php if (!empty($subheadline)) : ?>
                    <h2><?= $subheadline ?></h2>
                <?php endif; ?>
                <?php if (!empty($btn_name)) : ?>
                    <a class="btn" href="javascript:;" data-fancybox data-src="#hero-modal"><?= $btn_name ?></a>
                <?php endif; ?>
            </div>
        </div>
        <?php if ($form) : ?>
            <div class="modal form" id="hero-modal">
                <?php if (!empty($form['headline'])) : ?>
                    <p class="modal-headline"><?= $form['headline'] ?></p>
                <?php endif; ?>
                <?php if (!empty($form['text'])) : ?>
                    <p class="modal-text"><?= $form['text'] ?></p>
                <?php endif; ?>
                <?= $form['form'] ?>
            </div>
        <?php endif; ?>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Главный модуль</h2>
<?php endif; ?>