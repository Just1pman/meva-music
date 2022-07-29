<?php

/*
Title: Что выделяет нас модуль
Mode: preview
*/

$headline = get_field('headline');
$blocks = get_field('blocks');

?>

<?php if (!is_admin()) : ?>
    <section id="stand-out" class="stand-out">
        <div class="container-s">
            <div class="stand-out__block">
                <?php if (!empty($headline)) : ?>
                    <h2><?= $headline ?></h2>
                <?php endif; ?>
                <?php if (!empty($blocks)) : ?>
                    <div class="stand-out_wrapper">
                        <?php foreach ($blocks as $key => $block) : ?>
                            <div class="stand-out__card">
                                <div class="card-image">
                                    <?php if (!empty($block['image'])) : ?>
                                        <picture>
                                            <img src="<?= $block['image']['url'] ?>"
                                                 alt="<?= $block['image']['alt'] ?: $block['image']['title'] ?>"
                                                 loading="lazy" width="75" height="75">
                                        </picture>
                                    <?php endif; ?>
                                </div>
                                <?php if (!empty($block['headline'])) : ?>
                                    <p class="card-headline"><?= $block['headline'] ?></p>
                                <?php endif; ?>
                                <?php if (!empty($block['text'])) : ?>
                                    <p class="card-text"><?= $block['text'] ?></p>
                                <?php endif; ?>
                                <?php if (!empty($block['more']['text'])) : ?>
                                    <a href="javascript:;" data-fancybox data-src="#stand-out-<?= $key ?>"
                                       class="card__more"> <?= $block['more']['btn_name'] ?>  </a>
                                    <div class="modal" id="stand-out-<?= $key ?>">
                                        <?php if (!empty($block['image'])) : ?>
                                            <div class="modal-image">
                                                <picture>
                                                    <img src="<?= $block['image']['url'] ?>"
                                                         alt="<?= $block['image']['alt'] ?: $block['image']['title'] ?>"
                                                         loading="lazy" width="75" height="75">
                                                </picture>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($block['headline'])) : ?>
                                            <p class="modal-headline"><?= $block['headline'] ?></p>
                                        <?php endif; ?>
                                        <p class="modal-text"><?= $block['more']['text'] ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Что выделяет нас модуль</h2>
<?php endif; ?>