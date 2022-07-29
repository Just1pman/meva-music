<?php

/*
Title: Карта модуль
Mode: preview
*/

?>

<?php if (!is_admin()) : ?>
    <section id="map" class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.101667472726!2d20.99270421606602!3d52.24153697976249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc7d9d1bf9d7%3A0xf5450b550c67e42!2zYWwuIEphbmEgUGF3xYJhIElJIDM4LCAwMy00MTIgV2Fyc3phd2EsINCf0L7Qu9GM0YjQsA!5e0!3m2!1sru!2sby!4v1654791633238!5m2!1sru!2sby"
                height="600" style="border:0; width: 100%" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
<?php else: ?>
    <h2 style="font-family: 'Mark', sans-serif;">Карта модуль</h2>
<?php endif; ?>