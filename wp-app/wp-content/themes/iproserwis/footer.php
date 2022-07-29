</main>

<?php
$phone = get_field('phone', 'options');
$email = get_field('email', 'option');
$address = get_field('address', 'option');
$working_hours = get_field('working_hours', 'option');
$socials = get_field('socials', 'option');
$about_us = get_field('about_us', 'option');
$covid_19 = get_field('covid_19', 'option');
$thanks = get_field('thanks', 'option');

if (!empty($socials)) {
    $instagram = $socials['instagram'];
    $facebook = $socials['facebook'];
    $telegram = $socials['telegram'];
    $tiktok = $socials['tiktok'];
    $messenger = $socials['messenger'];
    $whatsapp = $socials['whatsapp'];
}

?>
<footer id="footer">
    <div class="container-xl">
        <div class="footer__block">
            <div class="block-left">
                <div class="block-left-column">
                    <?= wp_nav_menu(
                        [
                            'menu' => 'footer_left_menu',
                            'theme_location' => 'footer_left_menu',
                        ]
                    );
                    ?>
                </div>
                <div class="block-right-column">
                    <?= wp_nav_menu(
                        [
                            'menu' => 'footer_right_menu',
                            'theme_location' => 'footer_right_menu',
                        ]
                    );
                    ?>
                </div>
            </div>
            <div class="block-right">
                <div class="block-right-contact">
                    <?php if (!empty($phone)) : ?>
                        <div class="contact-phone">
                            <div class="phone-name">Telefon:</div>
                            <a href="tel:<?= str_replace(' ', '', $phone) ?>" class="phone-number"><?= $phone ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($email)) : ?>
                        <div class="contact-email">
                            <div class="email-name">Poczta:</div>
                            <a href="mailto:<?= $email ?>" class="email-number"><?= $email ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($address)) : ?>
                        <div class="contact-address">
                            <div class="address-name">Adres:</div>
                            <div class="address-number"><?= $address ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($working_hours)) : ?>
                        <div class="contact-working">
                            <div class="working-name">Godziny otwarcia:</div>
                            <div class="working-number"><?= $working_hours ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($socials)) : ?>
                        <div class="contact-socials">
                            <?php if (!empty($instagram)) : ?>
                                <a href="<?= $instagram['link'] ?? '' ?>">
                                    <picture>
                                        <img src="<?= $instagram['icon']['url'] ?? '' ?>"
                                             alt="<?= $instagram['icon']['alt'] ?: $instagram['icon']['title'] ?? '' ?>"
                                             width="33" height="33"
                                             loading="lazy">
                                    </picture>
                                </a>
                            <?php endif; ?>
                            <?php if (!empty($instagram)) : ?>
                                <a href="<?= $facebook['link'] ?? '' ?>">
                                    <picture>
                                        <img src="<?= $facebook['icon']['url'] ?? '' ?>"
                                             alt="<?= $facebook['icon']['alt'] ?: $facebook['icon']['title'] ?? '' ?>"
                                             width="33" height="33"
                                             loading="lazy">
                                    </picture>
                                </a>
                            <?php endif; ?>
                            <?php if (!empty($telegram)) : ?>
                                <a href="tg://resolve?domain=<?= $telegram['link'] ?? '' ?>/">
                                    <picture>
                                        <img src="<?= $telegram['icon']['url'] ?? '' ?>"
                                             alt="<?= $telegram['icon']['alt'] ?: $telegram['icon']['title'] ?? '' ?>"
                                             width="33" height="33"
                                             loading="lazy">
                                    </picture>
                                </a>
                            <?php endif; ?>
                            <?php if (!empty($tiktok)) : ?>
                                <a href="<?= $tiktok['link'] ?? '' ?>">
                                    <picture>
                                        <img src="<?= $tiktok['icon']['url'] ?? '' ?>"
                                             alt="<?= $tiktok['icon']['alt'] ?: $tiktok['icon']['title'] ?? '' ?>"
                                             width="33" height="33"
                                             loading="lazy">
                                    </picture>
                                </a>
                            <?php endif; ?>
                            <?php if (!empty($messenger)) : ?>
                                <a href="<?= $messenger['link'] ?? '' ?>">
                                    <picture>
                                        <img src="<?= $messenger['icon']['url'] ?? '' ?>"
                                             alt="<?= $messenger['icon']['alt'] ?: $messenger['icon']['title'] ?? '' ?>"
                                             width="33" height="33"
                                             loading="lazy">
                                    </picture>
                                </a>
                            <?php endif; ?>
                            <?php if (!empty($whatsapp)) : ?>
                                <a href="https://wa.me/" <?= $whatsapp['link'] ?? '' ?>>
                                    <picture>
                                        <img src="<?= $whatsapp['icon']['url'] ?? '' ?>"
                                             alt="<?= $whatsapp['icon']['alt'] ?: $whatsapp['icon']['title'] ?? '' ?>"
                                             width="33" height="33"
                                             loading="lazy">
                                    </picture>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ($about_us['text']) : ?>
                <div class="modal" id="about_us">
                    <?php if (!empty($about_us['image'])) : ?>
                        <div class="modal-image">
                            <picture>
                                <img src="<?= $about_us['image']['url'] ?>"
                                     alt="<?= $about_us['image']['alt'] ?: $about_us['image']['title'] ?>"
                                     loading="lazy" width="75" height="75">
                            </picture>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($about_us['headline'])) : ?>
                        <p class="modal-headline"><?= $about_us['headline'] ?></p>
                    <?php endif; ?>
                    <p class="modal-text"><?= $about_us['text'] ?></p>
                </div>
            <?php endif; ?>
            <?php if ($covid_19['text']) : ?>
                <div class="modal" id="covid-19">
                    <?php if (!empty($covid_19['image'])) : ?>
                        <div class="modal-image">
                            <picture>
                                <img src="<?= $covid_19['image']['url'] ?>"
                                     alt="<?= $covid_19['image']['alt'] ?: $covid_19['image']['title'] ?>"
                                     loading="lazy" width="75" height="75">
                            </picture>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($covid_19['headline'])) : ?>
                        <p class="modal-headline"><?= $covid_19['headline'] ?></p>
                    <?php endif; ?>
                    <p class="modal-text"><?= $covid_19['text'] ?></p>
                </div>
            <?php endif; ?>
            <?php if ($thanks['text']) : ?>
                <div class="modal" id="thanks">
                    <?php if (!empty($thanks['image'])) : ?>
                        <div class="modal-image">
                            <picture>
                                <img src="<?= $thanks['image']['url'] ?>"
                                     alt="<?= $thanks['image']['alt'] ?: $thanks['image']['title'] ?>"
                                     loading="lazy" width="75" height="75">
                            </picture>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($thanks['headline'])) : ?>
                        <p class="modal-headline"><?= $thanks['headline'] ?></p>
                    <?php endif; ?>
                    <p class="modal-text"><?= $thanks['text'] ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <a href="#header">
        <svg class="footer-circle" xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75"
             fill="none">
            <circle cx="37.5" cy="37.5" r="37.5" fill="black"/>
            <line x1="37" y1="20" x2="37" y2="57" stroke="#E0E0E0" stroke-width="4"/>
            <line x1="38.4142" y1="19.4142" x2="26.4142" y2="31.4142" stroke="#E0E0E0" stroke-width="4"/>
            <line x1="47.4473" y1="31.5226" x2="35.5716" y2="19.3996" stroke="#E0E0E0" stroke-width="4"/>
        </svg>
    </a>
    <div class="online-consultant">
        <div class="online-consultant__socials">
            <?php if (!empty($socials)) : ?>
                <div class="contact-socials">
                    <?php if (!empty($instagram)) : ?>
                        <a href="<?= $instagram['link'] ?? '' ?>">
                            <picture>
                                <img src="<?= $instagram['icon']['url'] ?? '' ?>"
                                     alt="<?= $instagram['icon']['alt'] ?: $instagram['icon']['title'] ?? '' ?>"
                                     width="33" height="33"
                                     loading="lazy">
                            </picture>
                        </a>
                    <?php endif; ?>
                    <?php if (!empty($instagram)) : ?>
                        <a href="<?= $facebook['link'] ?? '' ?>">
                            <picture>
                                <img src="<?= $facebook['icon']['url'] ?? '' ?>"
                                     alt="<?= $facebook['icon']['alt'] ?: $facebook['icon']['title'] ?? '' ?>"
                                     width="33" height="33"
                                     loading="lazy">
                            </picture>
                        </a>
                    <?php endif; ?>
                    <?php if (!empty($telegram)) : ?>
                        <a href="tg://resolve?domain=<?= $telegram['link'] ?? '' ?>/">
                            <picture>
                                <img src="<?= $telegram['icon']['url'] ?? '' ?>"
                                     alt="<?= $telegram['icon']['alt'] ?: $telegram['icon']['title'] ?? '' ?>"
                                     width="33" height="33"
                                     loading="lazy">
                            </picture>
                        </a>
                    <?php endif; ?>
                    <?php if (!empty($tiktok)) : ?>
                        <a href="<?= $tiktok['link'] ?? '' ?>">
                            <picture>
                                <img src="<?= $tiktok['icon']['url'] ?? '' ?>"
                                     alt="<?= $tiktok['icon']['alt'] ?: $tiktok['icon']['title'] ?? '' ?>"
                                     width="33" height="33"
                                     loading="lazy">
                            </picture>
                        </a>
                    <?php endif; ?>
                    <?php if (!empty($messenger)) : ?>
                        <a href="<?= $messenger['link'] ?? '' ?>">
                            <picture>
                                <img src="<?= $messenger['icon']['url'] ?? '' ?>"
                                     alt="<?= $messenger['icon']['alt'] ?: $messenger['icon']['title'] ?? '' ?>"
                                     width="33" height="33"
                                     loading="lazy">
                            </picture>
                        </a>
                    <?php endif; ?>
                    <?php if (!empty($whatsapp)) : ?>
                        <a href="https://wa.me/" <?= $whatsapp['link'] ?? '' ?>>
                            <picture>
                                <img src="<?= $whatsapp['icon']['url'] ?? '' ?>"
                                     alt="<?= $whatsapp['icon']['alt'] ?: $whatsapp['icon']['title'] ?? '' ?>"
                                     width="33" height="33"
                                     loading="lazy">
                            </picture>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="online-consultant__main_image-open js-active-open">
            <div class="online-consultant__wave"></div>
            <svg fill="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                 id="Capa_1" x="0px" y="0px" viewBox="0 0 423.789 423.789"
                 style="enable-background:new 0 0 423.789 423.789;" xml:space="preserve">
<path d="M423.789,225.29c0-52.537-50.816-95.767-116.583-100.102c-7.191-9.469-15.979-18.275-26.273-26.207  c-31.04-23.916-72.165-37.086-115.8-37.086c-43.634,0-84.759,13.171-115.799,37.086C17.521,123.492,0,156.321,0,191.42  c0,55.275,44.811,104.246,110.372,122.249c-3.909,6.604-11.674,16.833-26.906,29.81c-2.959,2.521-4.189,6.53-3.153,10.277  c1.036,3.748,4.151,6.554,7.985,7.197c0.575,0.097,5.865,0.941,14.5,0.941c0.001,0,0.001,0,0.002,0  c23.175,0,67.583-6.021,107.382-45.818c6.59-1.457,12.992-3.22,19.185-5.264c9.889,4.816,20.515,8.524,31.686,11.048  c30.757,30.437,64.927,34.909,82.347,34.909c6.711-0.001,10.939-0.664,11.525-0.762c3.834-0.643,6.949-3.45,7.985-7.197  c1.036-3.747-0.193-7.755-3.153-10.277c-9.412-8.02-14.932-14.569-18.141-19.272C390.578,304.654,423.789,267.339,423.789,225.29z   M210.133,228.895h-90c-5.523,0-10-4.477-10-10s4.477-10,10-10h90c5.523,0,10,4.477,10,10S215.656,228.895,210.133,228.895z   M240.133,179.561h-150c-5.523,0-10-4.477-10-10c0-5.523,4.477-10,10-10h150c5.523,0,10,4.477,10,10  C250.133,175.084,245.656,179.561,240.133,179.561z M325.373,302.767c-5.051,1.065-8.461,5.799-7.871,10.927  c0.224,1.946,1.705,9.83,11.347,21.917c-15.384-2.515-36.304-9.878-55.581-29.844c-1.401-1.451-3.208-2.445-5.184-2.85  c-4.193-0.86-8.289-1.921-12.288-3.155c45.494-23.441,74.471-63.779,74.471-108.342c0-15.473-3.409-30.503-9.942-44.576  c20.77,3.551,39.708,11.696,54.598,23.678c18.615,14.979,28.867,34.429,28.867,54.768  C403.789,261.171,371.543,293.03,325.373,302.767z"/>

</svg>
        </div>
        <div class="online-consultant__main_image-close">
            <svg fill="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                 id="Capa_1" x="0px" y="0px" viewBox="0 0 252 252" style="enable-background:new 0 0 252 252;"
                 xml:space="preserve">
<g>
    <path d="M126,0C56.523,0,0,56.523,0,126s56.523,126,126,126s126-56.523,126-126S195.477,0,126,0z M126,234   c-59.551,0-108-48.449-108-108S66.449,18,126,18s108,48.449,108,108S185.551,234,126,234z"/>
    <path d="M164.612,87.388c-3.515-3.515-9.213-3.515-12.728,0L126,113.272l-25.885-25.885c-3.515-3.515-9.213-3.515-12.728,0   c-3.515,3.515-3.515,9.213,0,12.728L113.272,126l-25.885,25.885c-3.515,3.515-3.515,9.213,0,12.728   c1.757,1.757,4.061,2.636,6.364,2.636s4.606-0.879,6.364-2.636L126,138.728l25.885,25.885c1.757,1.757,4.061,2.636,6.364,2.636   s4.606-0.879,6.364-2.636c3.515-3.515,3.515-9.213,0-12.728L138.728,126l25.885-25.885   C168.127,96.601,168.127,90.902,164.612,87.388z"/>
</g>

</svg>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>