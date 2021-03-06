<?php
    $title = $args['title'] ?? null;
    $subtitle = $args['subtitle'] ?? null;
    $subtitle__link = $args['subtitle__link'] ?? null;
?>
<?php if($title) : ?>
    <div class="index-preview__overlay overlay">
        <h1 class="overlay__title">
            <?= $title ?>
        </h1>

        <?php if ($subtitle && $subtitle__link) : ?>
            <b class="overlay__subtitle">
                <?= $subtitle ?> <a class="overlay__link"><?= $subtitle__link ?></a>
            </b>
        <?php endif; ?>
    </div>
<?php endif; ?>