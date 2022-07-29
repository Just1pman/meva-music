<?php

/*
Title: Лояльность модуль
Mode: preview
*/

$title = get_field('title');
$subtitle = get_field('subtitle');
$blocks = get_field('Information');
$background = get_field('background');

?>
<?php if (!is_admin()) : ?>
    <section class="loyalty"
             style="<?php if (!empty($background)) : ?> background-image: url('<?=$background['url']?>') <?php endif ?>">
        <div class="container-s">
            <?php if (!empty($title)) : ?>
                <h2 class="loyalty__title">
                    <?= $title ?>
                </h2>
            <?php endif; ?>
            <?php if (!empty($subtitle)) : ?>
                <h3 class="loyalty__subtitle">
                    <?= $subtitle ?>
                </h3>
            <?php endif; ?>
            <?php if (!empty($blocks)) : ?>
            <ul class="loyalty__blocks">
                <?php foreach ($blocks as $block) : ?>
                <li>
                    <div class="loyalty__block-image">
                        <picture>
                            <img src="<?= $block['image']['url'] ?>" alt="<?= $block['image']['title'] ?>" loading="lazy">
                        </picture>
                    </div>
                    <div class="loyalty__block-tittle-subtitle">
                        <div class="loyalty__block-title">
                            <?= $block['title'] ?>
                        </div>
                        <div class="loyalty__block-subtitle">
                            <?= $block['subtitle'] ?>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Лояльность модуль</h2>
<?php endif; ?>