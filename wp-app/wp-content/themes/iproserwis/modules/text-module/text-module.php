<?php

/*
Title: Текст модуль
*/

$title = get_field('title');
$description = get_field('description');

?>

<section id="text-module" class="text-module">
    <div class="container-xl">
        <?php if (!empty($title)) : ?>
            <h2 class="text-module__title">
                <?= $title ?>
            </h2>
        <?php endif; ?>
        <?php if (!empty($description)) : ?>
            <div class="text-module__description">
                <?= $description ?>
            </div>
        <?php endif; ?>
    </div>
</section>
