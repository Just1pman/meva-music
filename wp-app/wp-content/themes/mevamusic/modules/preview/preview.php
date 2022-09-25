<?php

/*
Title: Preview module
Mode: preview
*/

$bgImage = get_field('bgimage');

$label = get_field('label');
?>


<?php if (!is_admin()) : ?>
    <section id="index-preview" class="index-preview"

    <?php if (!empty($bgImage)) : ?>
        <img src="<?= $bgImage ?>" alt="">
    <?php endif;  ?>

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