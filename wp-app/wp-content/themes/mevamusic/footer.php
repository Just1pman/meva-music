</main>
<?php
$logo = get_field('logo', 'options');
?>
<?php wp_footer(); ?>
<?= get_template_part('/components/modals/map-modal') ?>
<div class="main-footer">
    <div class="container">
        <div class="main-footer__wrapper">
            <div class="main-footer__social-box">
                <?= get_template_part('/components/social-networks/social-networks'); ?>
            </div>
            <div class="main-footer__logo">
                <img src="<?= $logo['url'] ?>" alt="<?= $logo['title'] ?>" loading="lazy">
            </div>
        </div>
    </div>
</div>

<!--МОДАЛЬНЫЕ ОКНА-->
<?php if (wp_is_mobile()) : ?>
    <?= get_template_part('/components/modals/base-modal', null, [
        'additionalClass' => 'header-modal',
        'type' => 'header'
    ]); ?>
<?php endif; ?>

<?= get_template_part('/components/modals/base-modal', null, [
    'additionalClass' => 'map-modal',
    'type' => 'map'
]); ?>

<?= get_template_part('/components/modals/base-modal', null, [
    'additionalClass' => 'more-modal',
    'type' => 'more'
]); ?>

<?= get_template_part('/components/modals/base-modal', null, [
    'additionalClass' => 'consultant-modal',
    'type' => 'consultant'
]); ?>
<!--МОДАЛЬНЫЕ ОКНА-->

<div class="online-consultant" data-fancybox="consultant">
    <div class="online-consultant__main_image-open js-active-open">
        <div class="online-consultant__wave"></div>
        <svg fill="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
             x="0px" y="0px" viewBox="0 0 423.789 423.789"
             style="enable-background:new 0 0 423.789 423.789;" xml:space="preserve">
             <path d="M423.789,225.29c0-52.537-50.816-95.767-116.583-100.102c-7.191-9.469-15.979-18.275-26.273-26.207  c-31.04-23.916-72.165-37.086-115.8-37.086c-43.634,0-84.759,13.171-115.799,37.086C17.521,123.492,0,156.321,0,191.42  c0,55.275,44.811,104.246,110.372,122.249c-3.909,6.604-11.674,16.833-26.906,29.81c-2.959,2.521-4.189,6.53-3.153,10.277  c1.036,3.748,4.151,6.554,7.985,7.197c0.575,0.097,5.865,0.941,14.5,0.941c0.001,0,0.001,0,0.002,0  c23.175,0,67.583-6.021,107.382-45.818c6.59-1.457,12.992-3.22,19.185-5.264c9.889,4.816,20.515,8.524,31.686,11.048  c30.757,30.437,64.927,34.909,82.347,34.909c6.711-0.001,10.939-0.664,11.525-0.762c3.834-0.643,6.949-3.45,7.985-7.197  c1.036-3.747-0.193-7.755-3.153-10.277c-9.412-8.02-14.932-14.569-18.141-19.272C390.578,304.654,423.789,267.339,423.789,225.29z   M210.133,228.895h-90c-5.523,0-10-4.477-10-10s4.477-10,10-10h90c5.523,0,10,4.477,10,10S215.656,228.895,210.133,228.895z   M240.133,179.561h-150c-5.523,0-10-4.477-10-10c0-5.523,4.477-10,10-10h150c5.523,0,10,4.477,10,10  C250.133,175.084,245.656,179.561,240.133,179.561z M325.373,302.767c-5.051,1.065-8.461,5.799-7.871,10.927  c0.224,1.946,1.705,9.83,11.347,21.917c-15.384-2.515-36.304-9.878-55.581-29.844c-1.401-1.451-3.208-2.445-5.184-2.85  c-4.193-0.86-8.289-1.921-12.288-3.155c45.494-23.441,74.471-63.779,74.471-108.342c0-15.473-3.409-30.503-9.942-44.576  c20.77,3.551,39.708,11.696,54.598,23.678c18.615,14.979,28.867,34.429,28.867,54.768  C403.789,261.171,371.543,293.03,325.373,302.767z"/>
        </svg>
    </div>
</div>

</body>
</html>
