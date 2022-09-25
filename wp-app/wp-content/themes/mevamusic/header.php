<!doctype html>
<html lang="ru">

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php wp_title('«', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php wp_head(); ?>
</head>

<?php
$logo = get_field('logo', 'options');

$bg_image = get_field('bg_img', 'options');
?>

<body>
<header id="header">
    <div class="container">
        <div class="header-block">
            <?php if ($logo) : ?>
                <span class="header-logo">
                    <img src="<?= $logo['url'] ?>" alt="<?= $logo['title'] ?>" loading="lazy">
                </span>
            <?php endif; ?>
            <div class="header-nav">
                <?php if (wp_is_mobile()) : ?>
                    <svg data-fancybox="header" class="burger-mobile" xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 50 50"
                         width="30px"
                         height="30px">
                        <path d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 Z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 Z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 Z"/>
                    </svg>
                <?php else: ?>
                    <?= wp_nav_menu(
                        [
                            'menu' => 'header_menu',
                            'theme_location' => 'header_menu',
                            'menu_class' => 'desktop'
                        ]
                    );
                    ?>
                <?php endif; ?>
                <?php ?>
            </div>
        </div>
    </div>
</header>
<main id="main" class="main" data-page-id="<?= get_queried_object_id() ?>"
      style="background-image: url(<?= $bg_image['url'] ?>)">