<?php
    $type = $args['type'] ?? null;
    $additionalClass = $args['additionalClass'] ?? null;
    $isShowSocials = $args['isShowSocials'] ?? true;
?>

<div class="global-modal <?php if ($additionalClass) : ?><?= $additionalClass ?><?php endif; ?>">
    <?php if ($type === 'header') :?>
        <?= get_template_part( '/components/modals/chunks/header-modal'); ?>
    <?php endif; ?>

    <?php if ($type === 'map') :?>
        <?= get_template_part( '/components/modals/chunks/map-modal'); ?>
    <?php endif; ?>

    <?php if ($type === 'more') :?>
        <?= get_template_part( '/components/modals/chunks/more-modal'); ?>
    <?php endif; ?>

    <?php if ($isShowSocials) : ?>
        <div class="global-modals__socials" data-aos="fade-down">
            <?= get_template_part( '/components/social-networks/social-networks'); ?>
        </div>
    <?php endif; ?>
</div>

