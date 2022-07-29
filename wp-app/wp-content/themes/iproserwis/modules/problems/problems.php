<?php

/*
Title: Проблемы модуль
Mode: preview
*/

$title = get_field('title');
$subtitle = get_field('subtitle');
$image = get_the_post_thumbnail(get_the_ID());
$problems = get_field('add_problem');
$post_type = get_post_types();
$current_post = get_post_type();
$mac_book_type = '';
if ($post_type['macbook'] === $current_post) {
    $mac_book_type = 'problems__mac-book';
}
?>

<?php if (!is_admin()) : ?>
    <section id="problems" class="problems">
        <div class="container-xl">
            <?php if (!empty($title)) : ?>
                <h2 class="problems__title">
                    <?= $title ?>
                </h2>
            <?php endif; ?>
            <?php if (!empty($subtitle)) : ?>
                <h3 class="problems__subtitle">
                    <?= $subtitle ?>
                </h3>
            <?php endif; ?>
            <ul class="problems__content">
                <?php if (!empty($problems)) : ?>
                    <?php foreach ($problems as $problem) : ?>
                        <a href="<?= '#' . str_replace(' ', '-', mb_strtolower(rtrim($problem['anchor'])))?>" class="problems__item">
                            <?php if (!empty($problem['image'])) : ?>
                                <picture>
                                    <div class="problems__image">
                                        <img src="<?= $problem['image']['url'] ?>"
                                             alt="<?= $problem['image']['title']  ?>"
                                             loading="lazy">
                                    </div>
                                </picture>
                            <?php endif; ?>
                            <?php if (!empty($problem['description'])) : ?>
                                <p class="problems__description">
                                    <?= $problem['description'] ?>
                                </p>
                            <?php endif; ?>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
            <?php if (!empty($image)) : ?>
                <div class="problems__picture_main <?= $mac_book_type ?>">
                    <picture>
                        <?= $image ?>
                    </picture>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Проблемы модуль</h2>
<?php endif; ?>