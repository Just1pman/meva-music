<?php
    $title = $args['title'] ?? null;
    $subtitle = $args['subtitle'] ?? null;
    $subtitle__link = $args['subtitle__link'] ?? null;
?>
<?php if ($title) : ?>
    <div class="index-preview__overlay overlay" data-aos="fade-down">
        <h1 class="overlay__title">
            <?= $title ?>
        </h1>

        <?php if ($subtitle && $subtitle__link) : ?>
            <b class="overlay__subtitle">
                <?= $subtitle ?>
                <span class="overlay__link" data-fancybox="map">
                    <?= $subtitle__link ?>
                </span>
            </b>
        <?php endif; ?>
    </div>
<?php endif; ?>