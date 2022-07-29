<?php

/*
Title: Устройство модуль
Mode: preview
*/

$title = get_field('title');
$subtitle = get_field('subtitle');
$select_devices = get_field('select_devices');
$posts = get_posts(
    [
        'post_type' => $select_devices,
        'posts_per_page' => -1,
        'post_status' => 'publish',
    ]
);

?>
<?php if (!is_admin()) : ?>
    <section id="devices" class="devices">
        <div class="container-s">
            <?php if (!empty($title)) : ?>
                <h2 class="devices__title">
                    <?= $title ?>
                </h2>
            <?php endif; ?>

            <?php if (!empty($subtitle)) : ?>
                <h3 class="devices__subtitle">
                    <?= $subtitle ?>
                </h3>
            <?php endif; ?>

            <?php if (!empty($posts)) : ?>
                <div class="devices__content <?= $select_devices ?>">
                    <?php foreach ($posts as $post) : ?>
                        <?php if (!empty($post)) : ?>
                            <?php $image = get_the_post_thumbnail($post->ID);
                            $height_device = get_field('height_device', $post->ID);
                            ?>
                            <a href="<?= get_permalink($post->ID) ?>" class="devices__post">
                                <?php if (!empty($image[0])) : ?>
                                    <div class="devices__image"
                                        <?php if (!empty($height_device))  : ?>
                                            style="height: <?= $height_device . 'px' ?? '' ?>"
                                        <?php endif; ?>
                                    >
                                        <picture>
                                            <?= $image ?>
                                        </picture>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($post->post_title)) : ?>
                                    <p class="devices__post-title">
                                        <?= $post->post_title ?>
                                    </p>
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Устройство модуль</h2>
<?php endif; ?>