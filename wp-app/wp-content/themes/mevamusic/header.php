<!doctype html>
<html lang="ru">

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php wp_title('«', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <meta name="robots" content="all">
    <meta name="keywords" content="Студия звукозаписи Гродно записать трек сведение мастеринг вокал гродно записать трек ">
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="Студия звукозаписи Гродно">
    <meta property="og:url" content="https://mewa.by">
    <meta property="og:image" content="https://mewa.by/wp-content/uploads/2022/11/d7cf82_b93fb006677c407b9c7780a705dd7b16_mv2.jpg">
    <meta property="og:site_name" content="Mewa">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    <meta property="og:image:secure_url" content="https://mewa.by/wp-content/uploads/2022/11/d7cf82_b93fb006677c407b9c7780a705dd7b16_mv2.jpg">
    <link rel="preload" href="https://mewa.by/wp-content/uploads/2022/11/d7cf82_b93fb006677c407b9c7780a705dd7b16_mv2.jpg" as="image">
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "brand": "Mewa",
            "name": "Студия звукозаписи Гродно",
            "alternateName": "Mewa",
            "description": "Поможем записать трек в Гродно",
            "logo": "https://mewa.by/wp-content/uploads/2022/11/icons8-music-1.svg",
            "url": "https://mewa.by/",

            "department": [{
                "@context": "http://schema.org",
                "@type": "Organization",

                "location": {
                    "@type": "Place",

                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "Гродно",
                        "streetAddress": "Беларусь, Гродно, улица Победы д. 19б",
                        "postalCode": "230026"
                    },

                    "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": "53.656697",
                        "longitude": "23.825477"
                    }
                },

                "telephone": [
                    "+375 (29) 286-22-60"
                ]
            }],

            "email": "375292862260@mail.ru"
        }
    </script>

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
                <span class="header-logo" data-aos="fade-down">
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