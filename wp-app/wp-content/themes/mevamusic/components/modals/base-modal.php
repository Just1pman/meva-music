<?php
    $type = $args['type'] ?? null;
    $additionalClass = $args['additionalClass'] ?? null;
?>

<div class="global-modal <?php if ($additionalClass) : ?><?= $additionalClass ?><?php endif; ?>">
    <?php if ($type === 'header') :?>
        <?= get_template_part( '/components/modals/chunks/header-modal'); ?>
    <?php endif; ?>

    <?php if ($type === 'map') :?>
        <?= get_template_part( '/components/modals/chunks/map-modal'); ?>
    <?php endif; ?>

    <div class="global-modals__socials">
        <?= get_template_part( '/components/social-networks/social-networks'); ?>
    </div>
</div>

