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
                    <svg class="burger-mobile" xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 50 50"
                         width="30px"
                         height="30px">
                        <path d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 Z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 Z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 Z"/>
                    </svg>
                    <svg class="burger-mobile-close" xmlns="http://www.w3.org/2000/svg" fill="#fff"
                         xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                         width="25px" height="25px" viewBox="0 0 612.043 612.043"
                         style="enable-background:new 0 0 612.043 612.043;" xml:space="preserve">
                    <g>
                        <g id="cross">
                            <g>
                                <path d="M397.503,306.011l195.577-195.577c25.27-25.269,25.27-66.213,0-91.482c-25.269-25.269-66.213-25.269-91.481,0     L306.022,214.551L110.445,18.974c-25.269-25.269-66.213-25.269-91.482,0s-25.269,66.213,0,91.482L214.54,306.033L18.963,501.61     c-25.269,25.269-25.269,66.213,0,91.481c25.269,25.27,66.213,25.27,91.482,0l195.577-195.576l195.577,195.576     c25.269,25.27,66.213,25.27,91.481,0c25.27-25.269,25.27-66.213,0-91.481L397.503,306.011z"/>
                            </g>
                        </g>
                    </g>
                    </svg>
                    <?= wp_nav_menu(
                        [
                            'menu' => 'header_menu',
                            'theme_location' => 'header_menu',
                            'menu_class' => 'mobile',
                        ]);
                    ?>
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
                <?php
                ?>
            </div>
        </div>
    </div>
</header>
<main id="main" class="main" data-page-id="<?= get_queried_object_id() ?>" style="background-image: url(<?= $bg_image['url'] ?>)">