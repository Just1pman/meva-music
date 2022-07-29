<?php

/*
Title: Баннер модуль
Mode: preview
*/

$text = get_field('text');
$modal = get_field('modal');
?>

<?php if (!is_admin()) : ?>
    <?php if (!empty($text)) : ?>
        <section id="banner" class="banner">
            <div class="container-xl">
                <a href="javascript:;" data-fancybox data-src="#covid-19">
                    <p><?= $text ?></p>
                </a>
            </div>
        </section>
    <?php endif; ?>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Баннер модуль</h2>
<?php endif; ?>
