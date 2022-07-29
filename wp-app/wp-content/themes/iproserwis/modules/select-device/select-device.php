<?php

/*
Title: Выберите устройство модуль
Mode: preview
*/

$headline = get_field('headline');
$devices = get_field('devices');
$test = get_field('qweqwe1');
?>

<?php if (!is_admin()) : ?>
    <section id="select-device" class="select-device">
        <?php if (!empty($test)) : ?>
            <h2><?= $test ?></h2>
        <?php endif; ?>
        <div class="container-s">
            <div class="select-device__block">
                <?php if (!empty($headline)) : ?>
                    <h2><?= $headline ?></h2>
                <?php endif; ?>
                <?php if (!empty($devices)) : ?>
                    <div class="devices-wrapper">
                        <?php foreach ($devices as $device) : ?>
                            <a href="<?= $device['url'] ?>" class="device">
                                <picture>
                                    <img src="<?= $device['image']['url'] ?>"
                                         alt="<?= $device['image']['alt'] ?: $device['image']['title'] ?>"
                                         loading="lazy"
                                         width="288" height="167">
                                </picture>
                                <p><?= $device['name'] ?> </p>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Выберите устройство модуль</h2>
<?php endif; ?>