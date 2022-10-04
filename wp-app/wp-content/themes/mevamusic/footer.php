</main>
<?php
$logo = get_field('logo', 'options');
?>
<?php wp_footer(); ?>
<?= get_template_part('/components/modals/map-modal') ?>
<div class="main-footer">
    <div class="container">
        <div class="main-footer__wrapper">
            <div class="main-footer__social-box">
                <?= get_template_part('/components/social-networks/social-networks'); ?>
            </div>
            <div class="main-footer__logo">
                <img src="<?= $logo['url'] ?>" alt="<?= $logo['title'] ?>" loading="lazy">
            </div>
        </div>
    </div>
</div>

<!--МОДАЛЬНЫЕ ОКНА-->
<?php if (wp_is_mobile()) : ?>
    <?= get_template_part('/components/modals/base-modal', null, [
        'additionalClass' => 'header-modal',
        'type' => 'header'
    ]); ?>
<?php endif; ?>

<?= get_template_part('/components/modals/base-modal', null, [
    'additionalClass' => 'map-modal',
    'type' => 'map'
]); ?>

<?= get_template_part('/components/modals/base-modal', null, [
    'additionalClass' => 'more-modal',
    'type' => 'more'
]); ?>
<!--МОДАЛЬНЫЕ ОКНА-->

</body>
</html>
