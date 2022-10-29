<?php

/*
Title: Preview module
Mode: preview
*/

$bgImage = get_field('bgimage');
$label = get_field('label');
?>
<?php if(!empty($bgImage)): ?>
    <style>

        .index-preview {
            background-image: url("<?= $bgImage ?>");
            background-repeat: no-repeat;
            background-position-x: center;
            background-size: cover;

        }

    </style>
<?php endif; ?>
<?php if (!is_admin()) : ?>
    <section id="index-preview" class="index-preview">
        <div class="container">
            <div class="index-preview__wrapper">
                <?= get_template_part( '/components/overlay-box/overlay-box', null, [
                    'title' => $label['title_overlay'],
                    'subtitle' => $label['subtitle_overlay'],
                    'subtitle__link' => $label['overlay_link'],
                ]); ?>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Preview module</h2>
<?php endif; ?>