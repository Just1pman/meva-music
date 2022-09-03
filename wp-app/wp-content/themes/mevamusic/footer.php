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
                1
            </div>
            <div class="main-footer__logo">
                <img src="<?= $logo['url'] ?>" alt="<?= $logo['title'] ?>" loading="lazy">
            </div>
        </div>
    </div>
</div>
</body>
</html>
