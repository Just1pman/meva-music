<?php

/*
Title: Preview module
Mode: preview
*/

$bgImage = get_field('bgimage');

$overlay_title = get_field('title_overlay');
$overlay_subtitle = get_field('subtitle_overlay');
$overlay_link = get_field('overlay_link');
?>

<?php if (!is_admin()) : ?>
        <section id="index-preview" class="index-preview">
<!--            <img class="index-preview__background" src="--><?//= $bgImage ?><!--" alt="">-->
            <div class="container">
<!--                <div class="index-preview__wrapper">-->

                    <?= get_template_part( '/components/overlay-box/overlay-box', null, [
                        'title' => $overlay_title,
                        'subtitle' => $overlay_subtitle,
                        'subtitle__link' => $overlay_link,
                    ]); ?>
                </div>
            </div>
        </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Preview module</h2>
<?php endif; ?>

